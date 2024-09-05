<div>
    <nav aria-label="breadcrumb" class="w-max mb-5">
        <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 py-2">
            <li
                class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
                <div class="flex items-center gap-2">
                    <svg class="text-accent" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                    </svg>
                    <a class="text-accent font-medium font-inter" wire:navigate href="{{ route('blogs') }}">
                        <span>Home</span>
                    </a>
                </div>
                <span
                    class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                    <svg class="text-accent" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </span>
            </li>
            <li
                class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
                <a class="text-accent font-inter font-medium" wire:navigate href="{{ route('blogs') }}">
                    <span>Blogs</span>
                </a>
                <span
                    class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                    <svg class="text-accent" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </span>
            </li>
        </ol>
    </nav>


    <div class="lg:max-w-screen-md xl:max-w-screen-lg pb-5">
        <div class="text-3xl md:text-5xl font-outfit font-semibold mb-4 ps-2">
            Latest
        </div>

        <div class="w-100 pt-[1px] bg-[#D0D1DA] mb-8"></div>

        <div class="flex flex-col gap-y-8 mb-8">
            @foreach ($blogs as $blog)
                <a wire:navigate href="/blogs/{{ $blog->slug }}/single">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-5 mb-5">
                        <div class="relative">
                            <img class="w-max-full" src="{{ asset('uploads/' . $blog->image) }}">
                            <div class="absolute left-[3%] bottom-[84%]">
                                <div
                                    class="px-3 py-1 text-center uppercase bg-[#FFFFFF] font-inter font-medium text-sm">
                                    {{ $blog->category }}
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-3 justify-between">
                            <div>
                                <div class="text-xl font-bold font-outfit lg:text-2xl mb-3">
                                    {{ Str::limit($blog->title, 40, ' ...') }}
                                </div>

                                <p class="text-[#606165] text-justify text-sm lg:text-md md:mb-3 xl:text-xl">
                                    {{ Str::limit(strip_tags($blog->content), 180, ' ...') }}
                                </p>
                            </div>

                            <div class="flex flex-col gap-y-3">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('images/user-avatar.png') }}" class="w-8 h-8" alt="user-avatar">

                                    @php
                                        $user = DB::table('users')
                                            ->where('email', $blog->user)
                                            ->first();
                                    @endphp

                                    <div class="text-xs text-[#606165]">{{ $blog->created_at->format('F j, Y') }} by
                                        <span class="text-secondary capitalize">{{ $user->name }}</span>
                                    </div>
                                </div>

                                <div class="flex gap-x-4 items-center justify-end md:justify-start">
                                    <button wire:click="like({{ $blog->id }})"
                                        class="flex gap-x-1 items-center text-[#606165] hover:text-secondary active:text-secondary bg-transparent">
                                        <i class="fa-solid fa-thumbs-up"></i>
                                        {{ $blog->likes }}
                                    </button>
                                    <button wire:click="dislike({{ $blog->id }})"
                                        class="flex gap-x-1 items-center text-[#606165] hover:text-secondary active:text-secondary bg-transparent">
                                        <i class="fa-solid fa-thumbs-down"></i>
                                        {{ $blog->dislikes }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 pt-[1px] bg-[#D0D1DA]"></div>
                </a>
            @endforeach
        </div>

        <div class="flex justify-center mb-8">
            <button
                class="bg-secondary hover:bg-primar font-semibold hover:text-white text-white text-sm py-2.5 px-5 mr-2 mb-2 transition duration-300">
                VIEW MORE
            </button>
        </div>

        <div class="border border-s-0 border-e-0 border-[#D0D1DA] py-3 flex justify-center md:justify-start">
            <div class="flex items-center gap-x-3 font-outfit">
                <div>
                    Share blog:
                </div>
                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>
