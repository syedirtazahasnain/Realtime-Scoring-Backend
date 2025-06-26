<x-app-layout>
@section('title', 'Videos')
@section('content')
    {{-- header --}}
    <div class="relative w-full h-screen">
        <!-- Background Video -->
        <div class="w-full h-full">
            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-white text-center max-w-[583px]">
                <p class="font-montu font-bold 2xl:text-[50px] xl:text-[40px] lg:text-[30px] text-[18px]">
                    TFSC Primer League
                    2025 Player Drafting
                </p>
                <div class="">
                    <p class="font-sans xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] lg:py-[30px] py-[16px]">
                        Match 12 - Pindi Cricket Stadium
                    </p>
                    <div class="flex justify-center gap-[10px]">
                        <button
                            class="font-sans xl:text-[14px] lg:text-[12px] text-[10px] lg:px-[46px] px-[28px] lg:py-[10px] py-[3px] bg-[#F6C200] text-[#094AB7] hover:cursor-pointer">Join
                            Us</button>
                        <a href="/drafting#gallery"
                            class="font-sans xl:text-[14px] lg:text-[12px] text-[10px] lg:px-[46px] px-[28px] lg:py-[10px] py-[3px] bg-white text-[#094AB7] hover:cursor-pointer text-center">
                            Gallery
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- players data section --}}
    <div class="lg:pt-[60px] pt-[30px]">
        <div class=" lg:bg-[#094AB7]">
            <div class="xl:w-[84%] mx-auto w-[94%]">
                <div class="py-[30px] grid lg:grid-cols-6 grid-cols-2  gap-[10px]">
                    <div class="hidden lg:flex"></div>
                    <div class="text-center bg-[#094AB7] py-[20px] lg:py-0">
                        <p class="font-montu 2xl:text-[60px] lg:text-[50px] text-[40px] font-semibold text-white">206
                        </p>
                        <p class="font-montu 2xl:text-[20px] lg:text-[18px] text-[14px] font-semibold text-white">
                            Total registered Players
                        </p>
                    </div>
                    <div class="text-center bg-[#094AB7] py-[20px] lg:py-0">
                        <p class="font-montu 2xl:text-[60px] lg:text-[50px] text-[40px] font-semibold text-white">
                            150
                        </p>
                        <p class="font-montu 2xl:text-[20px] lg:text-[18px] text-[14px] font-semibold text-white">
                            Picked
                        </p>
                    </div>
                    <div class="text-center bg-[#094AB7]  py-[20px] lg:py-0">
                        <p class="font-montu 2xl:text-[60px] lg:text-[50px] text-[40px] font-semibold text-white">56
                        </p>
                        <p class="font-montu 2xl:text-[20px] lg:text-[18px] text-[14px] font-semibold text-white">
                            Unpicked
                        </p>
                    </div>
                    <div class="text-center bg-[#094AB7]  py-[20px] lg:py-0">
                        <p class="font-montu 2xl:text-[60px] lg:text-[50px] text-[40px] font-semibold text-white">10
                        </p>
                        <p class="font-montu 2xl:text-[20px] lg:text-[18px] text-[14px] font-semibold text-white">
                            Total Teams
                        </p>
                    </div>
                    <div class="hidden lg:flex"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- teams --}}
    <div class="xl:w-[84%] mx-auto w-[94%] hidden lg:block ">
        <div class="py-[60px]">
            <div class="grid grid-cols-9 gap-[10px]">
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('storage/drafting/1.png') }}" alt="">
                </div>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                            <p class="xl:text-[18px] lg:text-[16px] md:text-[14px] text-[12px] font-montserrat font-bold">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                            <img src="{{ asset('storage/videos/share.svg') }}" alt="">
                        </div>
                        <div class="flex justify-between">
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">25, Dec, 1965</p>
                            <p class="md:text-[10px] text-[8px] text-[#8C8C8C] font-montserrat">00:12:00</p>
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
                <h2 class="font-montu text-[#094AB7] font-semibold text-center lg:text-[30px] text-[18px]">TFSC
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
