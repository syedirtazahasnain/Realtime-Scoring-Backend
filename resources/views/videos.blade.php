<x-app-layout>
    @section('title', 'Videos')

    {{-- Hero Section Refined --}}
    <div class="relative w-full h-[80vh]">
        {{-- BG Video --}}
        <video autoplay muted loop playsinline
            class="w-full h-full object-cover object-top absolute top-0 left-0 z-20 opacity-60">
            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
        </video>
        <img src="{{ asset('storage/matches/hero-bg.png') }}" alt=""
            class="bg-[#094AB7] w-full h-full absolute z-10 top-0 left-0" />

        <div class="flex items-center justify-center relative z-20 w-full h-full">
            <div class="text-white text-center max-w-[583px]">
                <p
                    class="font-montu font-bold text-[24px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] my-0 leading-tight">
                    TFSC Primer League
                    2025 Player Drafting
                </p>
                <p class="font-sans text-[14px] lg:text-[16px] xl:text-[18px] py-[15px] lg:py-[30px] my-0">
                    Match 12 - Pindi Cricket Stadium
                </p>
                <div class="flex justify-center gap-[10px]">
                    <button
                        class="font-sans text-[10px] lg:text-[12px] xl:text-[14px] w-[140px] px-[10px] py-[5px] lg:py-[10px] bg-[#F6C200] text-[#094AB7] font-medium cursor-pointer text-center">Join
                        Us</button>
                    <a href="/drafting#gallery"
                        class="font-sans text-[10px] lg:text-[12px] xl:text-[14px] w-[140px] px-[10px] py-[5px] lg:py-[10px] bg-white text-[#094AB7] cursor-pointer text-center">
                        Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- Players Data Section Refined --}}
    <div class="relative xl:bg-[#094AB7] my-[10px] xl:my-[50px]">
        <img src="{{ asset('storage/drafting/coutingbg.png') }}" alt=""
            class="w-full h-full xl:block hidden absolute top-0 left-0 object-cover">

        <div class="py-[5px] xl:py-[30px] col-md-8 mx-auto">
            <div class="grid grid-cols-2 xl:grid-cols-4 gap-[10px] xl:gap-[20px]">
                @foreach ([
        [
            'value' => '206',
            'label' => 'Registered Players',
        ],
        [
            'value' => '150',
            'label' => 'Picked',
        ],
        [
            'value' => '56',
            'label' => 'Unpicked',
        ],
        [
            'value' => '10',
            'label' => 'Total Teams',
        ],
    ] as $stat)
                    <div class="text-center bg-[#094AB7] py-[10px] xl:py-[0px]">
                        <p
                            class="font-montu text-[32px] lg:text-[40px] xl:text-[50px] 2xl:text-[60px] font-semibold text-white">
                            {{ $stat['value'] }}
                        </p>
                        <p
                            class="font-montu text-[14px] lg:text-[16px] xl:text-[18px] 2xl:text-[20px] font-semibold text-white">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Teams Section Refined --}}
    <div class="relative">
        <div class="py-[20px] lg:py-[50px] col-md-10 mx-auto">
            <!-- Desktop Grid (hidden on mobile) -->
            <div class="hidden lg:grid grid-cols-9 gap-[10px]">
                @foreach (['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '9.png'] as $image)
                    <div>
                        <img src="{{ asset('storage/drafting/' . $image) }}" alt="Drafting image" class="w-full">
                    </div>
                @endforeach
            </div>

            <!-- Mobile Scroll (shown on mobile) -->
            <div class="lg:hidden overflow-x-auto whitespace-nowrap space-x-[10px]">
                @foreach (['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '9.png'] as $image)
                    <div class="inline-block w-[120px] h-[110px] relative"> <!-- Adjust width as needed -->
                        <img src="{{ asset('storage/drafting/' . $image) }}" alt="Drafting image"
                            class="w-full h-full object-cover absolute left-0 top-0">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- teams mobile view --}}
    <div class="xl:w-[84%] mx-auto w-[94%] lg:hidden">
        <div class="pb-[30px]">
            <div class="grid grid-cols-3 gap-[10px]">
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Vieos --}}
    <div class="xl:w-[84%] mx-auto w-[94%]">
        <p
            class="2xl:text-[30px] xl:text-[25px] lg:text-[20px] text-[18px] font-montu text-[#094AB7] font-bold lg:pb-[30px] pb-[21px]">
            Videos</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="border-2 border-[#F4F4F4]">
                    <div class="w-full">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="py-[20px] px-[20px]">
                        <div class="flex justify-between">
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-monti font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-monti">00:12:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- sponsor section --}}
    <div class="lg:my-[100px] my-[30px] relative">
        <div>
            <img src="{{ asset('storage/about/sponsor.png') }}" alt=""
                class="lg:h-[644px] md:h-[450px] sm:h-[430px] h-[400px] w-full object-cover">
        </div>
        <div class="absolute inset-0 bg-white opacity-80"></div>
        <div class="grid grid-cols-1 xl:grid-cols-3 lg:py-[60px] py-[30px] absolute inset-0">
            <div class="hidden xl:block"></div>
            <div>
                <h2
                    class="font-montu text-[#094AB7] font-semibold text-center text-[22px] lg:text-[26px] xl:text-[30px]">
                    TFSC
                    Premier League
                    Sponsers
                </h2>
                <p
                    class="font-sans lg:text-[18px] text-[12px] text-center mt-[20px] leading-[24px] text-wrap xl:px-0 px-5">
                    Twenty
                    Four Seven
                    Consultancy
                    Premier League
                    Twenty
                    Four Seven
                    Consultancy
                    Premier League Twenty Four Seven Consultancy Premier League
                </p>
                <div class="absolute left-0 right-0 mt-[40px] sponsor">
                    <div class="border-b border-b-[#808080]"></div>
                    <div
                        class="md:w-[84%] md:mx-auto xl:px-[80px] lg:px-[40px] px-[20px] flex justify-center gap-[40px] md:gap-[100px] ">

                        <div class="lg:py-[46px] py-[20px] flex justify-center items-center">
                            <img class="md:w-[88px] md:h-[88px] w-[48px] h-[48px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/1.png') }}" alt="KFC"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="lg:py-[46px] py-[20px] flex justify-center items-center">
                            <img class="md:w-[99px] md:h-[54px] w-[54px] h-[29px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/2.png') }}" alt="Sports network"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="lg:py-[46px] py-[20px] flex justify-center items-center">
                            <img class="md:w-[99px] md:h-[54px] w-[54px] h-[29px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/3.png') }}" alt="BKT"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="lg:py-[46px] py-[20px] flex justify-center items-center">
                            <img class="md:w-[99px] md:h-[54px] w-[54px] h-[29px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/4.png') }}" alt="kayo"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="border-b border-b-[#808080]"></div>
                    <div
                        class="md:w-[84%] md:mx-auto xl:px-[80px] lg:px-[40px] px-[20px] flex flex-wrap justify-center gap-[40px] md:gap-[100px] sponsor">

                        <div class="lg:py-[46px] py-[20px] flex justify-center">
                            <img class="md:w-[99px] md:h-[54px] w-[80px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/5.png') }}" alt="Foxtel" class="object-cover">
                        </div>
                        <div class="lg:py-[46px] py-[20px] flex justify-center">
                            <img class="md:w-[99px] md:h-[54px] w-[80px] transition filter grayscale hover:grayscale-0"
                                src="{{ asset('storage/icons/6.png') }}" alt="weber" class="object-cover">
                        </div>
                    </div>
                    <div class="border-b border-b-[#808080]"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
