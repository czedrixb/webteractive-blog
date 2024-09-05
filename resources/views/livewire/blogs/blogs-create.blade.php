<div>
    <div class="border rounded-lg p-5 bg-white">
        <div class="flex justify-between items-center mb-10">
            <div class="text-xl font-bold">Create Blog</div>
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
                            Create
                        </span>
                    </li>
                </ol>
            </nav>
        </div>

        <form wire:submit="store">
            <div class="flex flex-col gap-3">
                <div>
                    <label>Image</label>
                    <div class="flex items-center justify-center bg-grey-lighter">
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-secondary">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select a file</span>
                            <input type="file" wire:model="image" name="image" class="hidden" />
                        </label>
                    </div>
                    @error('image')
                        <div class="text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label>Title</label>
                    <input type="text" wire:model="title" name="title"
                        class="w-full rounded-lg active:border-secondary transition-all ease-out duration-150">
                    @error('title')
                        <div class="text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label>Category</label>
                    <select wire:model="category" name="category"
                        class="w-full rounded-lg border-gray-300 focus:border-secondary transition-all ease-out duration-150">
                        <option hidden selected>Select an option</option>
                        <option value="News">News</option>
                        <option value="Podcast">Podcast</option>
                        <option value="Blog">Blog</option>
                        <option value="News">News</option>
                    </select>

                    @error('category')
                        <div class="text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <div wire:ignore>
                        <label>Content</label>
                        <textarea id="summernote" wire:model.defer="content" name="content" rows="5"></textarea>
                    </div>
                    @error('content')
                        <div class="text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <div class="flex gap-1 items-center">
                        <a wire:navigate href="{{ route('blogs.index') }}"
                            class="bg-zinc-500 hover:bg-zinc-700 uppercase flex items-center gap-2 hover:bg-primar font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                            back
                        </a>
                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 uppercase flex items-center gap-2 hover:bg-primar font-semibold  text-white text-sm py-2.5 px-5 transition duration-300">
                            submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('js')
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(e) {
                    @this.set('content', e);
                },
            }
        });
    </script>
@endsection
