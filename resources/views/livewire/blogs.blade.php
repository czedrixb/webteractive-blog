<div>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                        </svg>

                                        100
                                    </button>
                                    <button class="flex gap-x-1 items-center text-[#606165] bg-transprarent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591" />
                                        </svg>

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
