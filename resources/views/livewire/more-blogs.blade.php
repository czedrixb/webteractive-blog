<div>
    <div class="bg-[#F3F4F8]">
        <div class="container mx-auto px-6 py-6">
            <div class="text-2xl font-semibold font-outfit mb-5">More from Webteractive</div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-5 md:gap-y-5 gap-x-5 justify-between mb-8">
                @foreach ($blogs as $blog)
                    <a wire:navigate href="/blogs/{{ $blog->slug }}/single">
                        <div class="relative">
                            <img class="w-max-full" src="{{ asset('uploads/' . $blog->image) }}" alt="">
                            <div class="absolute left-[3%] bottom-[84%]">
                                <div
                                    class="px-3 py-1 text-center uppercase bg-[#FFFFFF] font-inter font-medium text-sm">
                                    {{ $blog->category }}
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-5">
                                <div class="text-xl font-bold font-outfit lg:text-xl mb-3">
                                    {{ Str::limit($blog->title, 40, ' ...') }}
                                </div>

                                <p class="text-[#606165] text-justify text-sm lg:text-md md:mb-3">
                                    {{ Str::limit(strip_tags($blog->content), 100, ' ...') }}
                                </p>
                            </div>

                            <div>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('images/user-avatar.png') }}" class="w-8 h-8" alt="user-avatar">

                                    @php
                                        $user = DB::table('users')
                                            ->where('email', $blog->user)
                                            ->first();
                                    @endphp

                                    <div class="text-xs text-[#606165]">{{ $blog->created_at->format('F j, Y') }} by
                                        <span class="text-secondary">{{ $user->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
