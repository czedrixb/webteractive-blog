<div>
    <div class="border rounded-lg p-5 bg-white">
        <div class="flex justify-between items-center mb-10">
            <div class="text-xl font-bold">View</div>
            <nav aria-label="breadcrumb" class="block">
                <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 py-2 px-4">
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased">
                        <a class="opacity-60" wire:navigate href="{{ route('blogs.index') }}">
                            <span>Blogs</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased">
                        <span class="font-medium text-blue-gray-900 transition-colors hover:text-gra">
                            {{ $blog->title }}
                        </span>
                    </li>
                </ol>
            </nav>
        </div>

        <form>
            <div class="flex flex-col gap-3">
                <div>
                    <label>Title</label>
                    <div class="font-bold text-xl">{{ $blog->title }}</div>
                </div>

                <div>
                    <label>Image</label>
                    <img src="{{ asset('uploads/' . $blog->image) }}" class="max-w-[30%]" alt="">
                </div>

                <div>
                    <label for="editor">Content</label>
                    {!! $blog->content !!}
                </div>
                <div class="flex justify-end">
                    <a wire:navigate href="{{ route('blogs.index') }}"
                        class="bg-zinc-500 hover:bg-zinc-700 uppercase flex items-center gap-2 hover:bg-primar font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                        back
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
