<div>
    <!-- Page Heading -->
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
                    <a class="text-accent font-medium font-inter" href="#">
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
                <a class="text-accent font-inter font-medium" href="#">
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
            <li
                class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
                <a class="text-black font-inter font-medium" href="#">
                    <span>Blog Title</span>
                </a>
            </li>
        </ol>
    </nav>


    <div class="lg:max-w-screen-md xl:max-w-screen-lg pb-5">
        <div class="mb-10">
            <div class="text-3xl md:text-5xl font-outfit font-semibold mb-5 ps-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

            <div class="flex justify-between items-center mb-5">
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/user-avatar.png') }}" class="w-8 h-8" alt="user-avatar">

                    <div class="text-xs md:text-md text-[#606165]">April 18, 2023 by <span class="text-secondary">Aaron
                            Carman</span></div>
                </div>

                <div class="flex gap-x-4 items-center">
                    <button class="flex gap-x-1 items-center text-[#606165] bg-transprarent">
                        <i class="fa-solid fa-thumbs-up"></i>

                        100
                    </button>
                    <button class="flex gap-x-1 items-center text-[#606165] bg-transprarent">
                        <i class="fa-solid fa-thumbs-down"></i>

                        100
                    </button>
                </div>
            </div>

            <hr class="bg-[#D0D1DA]">
        </div>

        <p class="text-[#606165]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus necessitatibus
            maiores maxime at ab! Placeat
            ab distinctio laudantium obcaecati repellendus, sunt fugiat aliquam nulla aperiam dolor quisquam asperiores
            cumque quod!</p>
    </div>
</div>
