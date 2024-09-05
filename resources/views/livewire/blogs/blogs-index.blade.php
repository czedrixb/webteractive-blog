<div>
    <div class="border rounded-lg p-5 bg-white" x-data="{ open: false, modalId: null }">
        <div class="flex justify-between mb-10">
            <div class="text-xl font-bold">Blogs Management</div>
            <a wire:navigate href="{{ route('blogs.create') }}"
                class="bg-green-600 hover:bg-green-700 flex items-center gap-2 hover:bg-primar font-semibold  text-white text-sm py-2.5 px-5 mr-2 mb-2 transition duration-300">
                <i class="fa-solid fa-plus"></i>
                ADD BLOG
            </a>
        </div>
        <livewire:flash-message />
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr class="border-b border-slate-300 bg-slate-50">
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">ID</th>
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">Thumbnail</th>
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">Title</th>
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">Category</th>
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">Created by</th>
                    <th class="p-4 text-sm font-normal leading-none text-slate-500">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr class="hover:bg-slate-50">
                        <td class="class="p-4 border-b border-slate-200 py-5"">1</td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <img src="{{ asset('uploads/' . $blog->image) }}" class="w-20" alt="">
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="block font-semibold text-sm text-slate-800">{{ $blog->title }}</p>
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="block font-semibold text-sm text-slate-800">{{ $blog->category }}</p>
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="text-sm text-slate-500">{{ $blog->user }}</p>
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <div class="flex flex-col gap-1">
                                <a wire:navigate href="/blogs/{{ $blog->id }}/view"
                                    class="bg-green-600 hover:bg-green-700 flex items-center justify-center uppercase gap-2 font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                                    <i class="fa-solid fa-eye"></i>
                                    view
                                </a>
                                <a wire:navigate href="/blogs/{{ $blog->id }}/edit"
                                    class="bg-sky-600 hover:bg-sky-700 flex items-center justify-center uppercase gap-2 font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                                    <i class="fa-solid fa-pencil"></i>
                                    edit
                                </a>
                                <button @click="open = true; modalId = {{ $blog->id }}"
                                    class="bg-red-600 hover:bg-red-700 flex items-center justify-center uppercase gap-2 font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                                    <i class="fa-solid fa-trash"></i>
                                    delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
            @click.away="open = false" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="bg-white p-6 rounded shadow-lg w-1/3" @click.stop>
                <h2 class="text-lg font-semibold mb-4">Confirm Delete</h2>
                <p class="mb-4">Are you sure you want to delete this blog post?</p>
                <div class="flex justify-end gap-2">
                    <button @click="open = false"
                        class="bg-gray-300 hover:bg-gray-400 text-black font-semibold py-2 px-4 rounded">Cancel</button>
                    <button type="button" @click="open = false; $wire.call('delete', modalId)"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
