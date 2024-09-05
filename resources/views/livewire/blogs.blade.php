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
        </ol>
    </nav>


    <div class="lg:max-w-screen-md xl:max-w-screen-lg pb-5">
        <div class="text-3xl md:text-5xl font-outfit font-semibold mb-4 ps-2">
            Latest
        </div>

        <div class="w-100 pt-[1px] bg-[#D0D1DA] mb-8"></div>

        @php
            $items = range(1, 4);
        @endphp

        <div class="flex flex-col gap-y-8 mb-8">
            @foreach ($items as $item)
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-5 mb-5">
                        <div class="relative">
                            <img class="w-max-full"
                                src="https://s3-alpha-sig.figma.com/img/0aa0/675f/370e03c6d49306d12710cd65a93ce307?Expires=1726444800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=qR2Lwq4GhFCMvQzSFTyxTY1Y-nTID7RNZ~nnD8O1sDk3Dqj1Con5u118au-vAPrLLp5ynvuLiw79Wt2TcS-Rwfe1dG5DT58QQHJMM8A2qQ1yJRq~yW~OORtmdZ5i0379FscULLI-36GT7zHqG318WbyYuOlhg~Z7AFdkjUIi0TQLniGeJakdZiBB-JmnE9QXuidZ4dgbElKigcIKshi48nsGmJ2D3IWRPgqKHx1y2ijrNfvvZGidukSIUc~cH5Y-i2uNBCluNeist7-Jm1P0lGLCX56UV-5n2HmHts2b0KVqQawjmBGa-gffAKiA3fUiDaypQhsV11zKwEHkaSobxQ__"
                                alt="">
                            <div class="absolute left-[3%] bottom-[84%]">
                                <div
                                    class="px-3 py-1 text-center uppercase bg-[#FFFFFF] font-inter font-medium text-sm">
                                    news
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-3 justify-between">
                            <div>
                                <div class="text-xl font-bold font-outfit lg:text-2xl mb-3">
                                    Lorem Ipsum dolor sit amet, consectetur adipscing elit.
                                </div>

                                <p class="text-[#606165] text-justify text-sm lg:text-md md:mb-3 xl:text-xl">
                                    Maecenas a eros sit amet tellus eleifend ullamcorper. Vivamus sagittis sit amet nisi
                                    et
                                    sodales.
                                    Nullam imperdiet, justo non vehicula fringilla, risus mauris pharetra dolor, vitae
                                    tincidunt
                                    dui
                                </p>
                            </div>

                            <div class="flex flex-col gap-y-3">
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('images/user-avatar.png') }}" class="w-8 h-8" alt="user-avatar">

                                    <div class="text-xs text-[#606165]">April 18, 2023 by <span
                                            class="text-secondary">Aaron
                                            Carman</span></div>
                                </div>

                                <div class="flex gap-x-4 items-center justify-end md:justify-start">
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
                        </div>
                    </div>

                    <div class="w-100 pt-[1px] bg-[#D0D1DA]"></div>
                </div>
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
                <a>
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a>
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a>
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a>
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>
