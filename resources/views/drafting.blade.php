<x-app-layout>
    @section('title', 'Drafting TFSPL')

    {{-- Hero Section Refined --}}
    <div class="relative w-full h-[80vh]">
        {{-- BG Video --}}
        <video autoplay muted loop playsinline class="w-full h-full object-cover object-top absolute top-0 left-0 z-20 opacity-60">
            <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
        </video>
        <img src="{{ asset('storage/matches/hero-bg.png') }}" alt="" class="bg-[#094AB7] w-full h-full absolute z-10 top-0 left-0"/>

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
                        class="font-sans text-[10px] lg:text-[12px] xl:text-[14px] w-[140px] px-[10px] py-[5px] lg:py-[10px] bg-[#F6C200] text-[#094AB7] font-medium cursor-pointer text-center">
                        Join Us
                    </button>
                    <a href="/videos"
                        class="font-sans text-[10px] lg:text-[12px] xl:text-[14px] w-[140px] px-[10px] py-[5px] lg:py-[10px] bg-white text-[#094AB7] cursor-pointer text-center">
                        Videos
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



    {{-- Gallery Section Refined --}}
    <div class="relative">
        <div class="py-[20px] col-md-10 mx-auto">
            <p id="gallery"
                class="text-[22px] lg:text-[26px] xl:text-[30px] font-montu text-[#094AB7] font-bold pb-[15px] lg:pb-[30px] my-0">
                Gallery
            </p>
            <div>
                {{-- Grid 1 --}}
                <div class="grid grid-cols-12 xl:gap-[20px] lg:gap-[15px] gap-[6px]">
                    <div class="col-span-4 relative group overflow-hidden w-full h-full">
                        <img src="{{ asset('storage/Drafting/gallery1.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class="col-span-8 group overflow-hidden w-full h-full relative">
                        <img src="{{ asset('storage/Drafting/gallery2.png') }}" alt="pic 2"
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0">
                        <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                            class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                    </div>
                </div>
                {{-- Grid 2 --}}
                <div class="grid grid-cols-4 xl:gap-[20px] lg:gap-[15px] gap-[6px] xl:py-[20px] lg:py-[10px] py-[6px]">
                    <div class="relative group overflow-hidden">
                        <img src="{{ asset('storage/Drafting/gallery3.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class=" relative group overflow-hidden">
                        <img src="{{ asset('storage/Drafting/gallery4.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class=" relative group overflow-hidden">
                        <img src="{{ asset('storage/Drafting/gallery5.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class=" relative group overflow-hidden">
                        <img src="{{ asset('storage/Drafting/gallery6.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                </div>
                {{-- Grid 3 --}}
                <div class="grid grid-cols-3 xl:gap-[20px] lg:gap-[15px] gap-[6px] xl:pb-[20px] lg:pb-[10px] pb-[6px]">
                    <div class=" relative group overflow-hidden w-full h-full">
                        <img src="{{ asset('storage/Drafting/gallery7.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class=" relative group overflow-hidden w-full h-full">
                        <img src="{{ asset('storage/Drafting/gallery8.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                    <div class=" relative group overflow-hidden w-full h-full">
                        <img src="{{ asset('storage/Drafting/gallery9.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                </div>
                {{-- Grid 4 --}}
                <div class="grid grid-cols-12 xl:gap-[20px] lg:gap-[15px] gap-[6px]">
                    <div class="col-span-8 group overflow-hidden w-full max-h-[512px] h-auto relative">
                        <img src="{{ asset('storage/Drafting/gallery10.png') }}" alt="pic 2"
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0">
                        <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                            class="w-full h-full object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                    </div>
                    <div class="col-span-4 relative group overflow-hidden w-full max-h-[512px] h-auto">
                        <img src="{{ asset('storage/Drafting/gallery11.png') }}" alt="pic 1 "
                            class="w-full h-full object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-full  object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TFSC Premier League Sponsers Refined  --}}
    <div class="relative overflow-hidden my-[50px] lg:my-[70px] xl:my-[100px]">
        <div class="absolute z-20 top-0 left-0 h-full w-full bg-[#1653BB] opacity-90"></div>
        <img src="{{ asset('storage/about/sponsor1.png') }}" alt=""
            class="absolute z-10 top-0 left-0 h-full w-full object-cover">
        <div class="py-[40px] lg:py-[70px] xl:py-[90px]">
            <div class="relative z-30 ">
                <div>
                    <div class="text-center px-[20px]">
                        <p
                            class="leading-tight font-montu text-white font-semibold text-center text-[22px] lg:text-[26px] xl:text-[30px]">
                            TFSC Premier League Sponsers
                        </p>
                        <p class="font-sans max-w-[650px] mx-auto text-[16px] xl:text-[18px] text-white pt-[30px]">
                            Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League
                            Twenty Four Seven Consultancy Premier League
                        </p>
                    </div>
                    <div class="border-b border-b-[#808080] mt-[40px] mb-[30px]"></div>
                    <div class="sponsor">
                        <div
                            class="mx-auto flex justify-center flex-wrap gap-[20px] md:gap-[40px] lg:gap-[60px] xl:gap-[80px] 2xl:gap-[100px]">
                            <div class="flex justify-center items-center">
                                <img class="" src="{{ asset('storage/icons/1.png') }}" alt="KFC"
                                    class="">
                            </div>
                            @foreach ([['src' => '2.png', 'alt' => 'Sports network'], ['src' => '3.png', 'alt' => 'BKT'], ['src' => '4.png', 'alt' => 'kayo']] as $logo)
                                <div class="flex justify-center items-center">
                                    <img class="" src="{{ asset('storage/icons/' . $logo['src']) }}"
                                        alt="KFC" class="">
                                </div>
                            @endforeach
                        </div>
                        <div class="border-b border-b-[#808080] mt-[30px] mb-[40px]"></div>
                        <div
                            class="flex flex-wrap justify-center gap-[20px] md:gap-[40px] lg:gap-[60px] xl:gap-[80px] 2xl:gap-[100px] sponsor">

                            <div class="flex justify-center">
                                <img class="" src="{{ asset('storage/icons/5.png') }}" alt="Foxtel"
                                    class="">
                            </div>
                            <div class="flex justify-center">
                                <img class="" src="{{ asset('storage/icons/6.png') }}" alt="weber"
                                    class="">
                            </div>

                        </div>
                        <div class="border-b border-b-[#808080] mt-[40px]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
