<div>
    <div class="bg-[#F3F4F8]">
        <div class="container mx-auto px-6 py-6">
            <div class="text-2xl font-semibold font-outfit mb-5">More from Webteractive</div>

            @php
                $items = range(1, 4);
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-5 md:gap-y-5 gap-x-5 justify-between mb-8">
                @foreach ($items as $item)
                    <div>
                        <div class="relative">
                            <img class="w-max-full"
                                src="https://s3-alpha-sig.figma.com/img/0aa0/675f/370e03c6d49306d12710cd65a93ce307?Expires=1726444800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=qR2Lwq4GhFCMvQzSFTyxTY1Y-nTID7RNZ~nnD8O1sDk3Dqj1Con5u118au-vAPrLLp5ynvuLiw79Wt2TcS-Rwfe1dG5DT58QQHJMM8A2qQ1yJRq~yW~OORtmdZ5i0379FscULLI-36GT7zHqG318WbyYuOlhg~Z7AFdkjUIi0TQLniGeJakdZiBB-JmnE9QXuidZ4dgbElKigcIKshi48nsGmJ2D3IWRPgqKHx1y2ijrNfvvZGidukSIUc~cH5Y-i2uNBCluNeist7-Jm1P0lGLCX56UV-5n2HmHts2b0KVqQawjmBGa-gffAKiA3fUiDaypQhsV11zKwEHkaSobxQ__"
                                alt="">
                            <div class="absolute left-[3%] bottom-[84%]">
                                <div class="px-3 py-1 text-center uppercase bg-[#FFFFFF] font-inter font-medium text-sm">
                                    news
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-5">
                                <div class="text-xl font-bold font-outfit lg:text-xl mb-3">
                                    Lorem Ipsum dolor sit amet, consectetur adipscing elit.
                                </div>

                                <p class="text-[#606165] text-justify text-sm lg:text-md md:mb-3">
                                    Maecenas a eros sit amet tellus eleifend ullamcorper. Vivamus sagittis sit amet nisi
                                    et
                                    sodales.
                                    Nullam imperdiet, justo non vehicula
                                </p>
                            </div>

                            <div>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('images/user-avatar.png') }}" class="w-8 h-8" alt="user-avatar">

                                    <div class="text-xs text-[#606165]">April 18, 2023 by <span
                                            class="text-secondary">Aaron
                                            Carman</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
