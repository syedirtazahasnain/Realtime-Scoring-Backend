<x-app-layout>

    {{-- HERO Section Refined --}}
    <div class="relative bg-[#fff]">
        <div class="px-[0px] lg:px-[40px] xl:px-[80px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-[18px]">
                <div class="col-span-8 h-full">
                    <div class="bg-blue-950 relative">
                        <img src="{{ asset('images/home/video-bg-poster.jpg') }}" alt="Background image"
                            class="h-full w-full object-cover">
                        <div id="controls-carousel" class="absolute top-0 left-1/2 -translate-x-1/2 w-[100%] h-full"
                            data-carousel="static">
                            <div class="relative h-full overflow-hidden">
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <video autoplay muted loop playsinline class="block w-full h-full object-cover">
                                        <source src="{{ asset('storage/new/video-tsfpl.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                    <video autoplay muted loop playsinline class="block w-full h-full object-cover">
                                        <source src="{{ asset('storage/web-bg.webm') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            {{-- Slider Removed --}}
                            {{-- <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button> --}}
                        </div>
                    </div>
                    <div class="w-full px-[20px] lg:px-[0px] py-[15px] xl:py-[20px] relative">
                        <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background"
                            class="absolute top-0 left-0 w-full h-full object-cover z-0" />

                        <p
                            class="py-0 leading-none font-montu font-bold text-[16px] sm:text-[18px] lg:text-[24px] xl:text-[28px] 2xl:text-[34px] text-white text-center relative z-10">
                            Twenty Four Seven Premier League
                        </p>
                    </div>
                </div>
                <div class="col-span-4 h-full grid grid-cols-1 gap-[10px]">
                    @forelse ($blogs as $blog)
                        <div class="flex justify-between items-center relative overflow-hidden bg-[#FFF4ED]">
                            <div
                                class="font-monti w-[60%] flex justify-center items-center px-[10px] xl:px-[20px] 2xl:px-[30px]">
                                <div>
                                    <h3
                                        class="text-[14px] 2xl:text-[20px] xl:text-[17px] font-bold text-[#094AB7] my-0 leading-tight">
                                        {{ $blog->title }}
                                    </h3>
                                    <div class="h-[50px] overflow-hidden mt-[10px] xl:mt-[15px] mb-[15px] xl:mb-[30px]">
                                        <p class="text-[12px] 2xl:text-[16px] xl:text-[14px]">
                                            {{ $blog->content }}
                                        </p>
                                    </div>
                                    <div class="bg-[#094AB7] hover:bg-[#094AB7] transition-colors duration-200 w-[85%]">
                                        <a href=""
                                            class="block text-center text-white text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-[40%] h-full">
                                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt=""
                                    class="absolute top-0 right-0 object-cover w-full h-full">
                            </div>
                        </div>
                    @empty
                        <p>No Blogs To Show</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>


    {{-- Upcoming Matches Refined --}}
    <div class="relative bg-[#fff]">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px] mt-[40px] mb-[30px] xl:mt-[100px] xl:mb-[60px]">
            <div class="w-full py-[15px] xl:py-[20px] relative px-[20px] xl:px-[40px] 2xl:px-[80px] flex items-center">
                <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background"
                    class="absolute top-0 left-0 w-full h-full object-cover z-0" />
                <p
                    class="py-0 leading-none font-montu font-bold text-[16px] lg:text-[20px] xl:text-[24px] 2xl:text-[30px] text-white relative z-10">
                    Upcoming Matches
                </p>
            </div>
            <div class="mt-[30px] xl:mt-[50px] relative">
                <div class="upcoming-matches w-[90%] xl:w-[95%]">
                    @forelse ($matches as $match)
                        <div class="overflow-hidden border-[2px] border-[#F4F4F4] mr-[20px]">
                            <div
                                class="flex items-center justify-between px-[10px] xl:px-[25px] 2xl:px-[50px] py-[10px] md:py-[20px] 2xl:py-[30px]">
                                <p class="my-0 text-[14px] 2xl:text-[16px] font-sans font-bold">
                                    {{ \Carbon\Carbon::parse($match->match_date)->format('d M Y - h:i a') }}
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40"
                                    viewBox="0 0 45 40" fill="none" class="w-[15px] h-[15px]">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23.2323 0.732225C24.2085 -0.244075 25.7915 -0.244075 26.7677 0.732225L44.2677 18.2323C45.244 19.2085 45.244 20.7915 44.2677 21.7677L26.7677 39.2677C25.7915 40.244 24.2085 40.244 23.2323 39.2677C22.256 38.2915 22.256 36.7085 23.2323 35.7323L36.4645 22.5H2.5C1.1193 22.5 0 21.3807 0 20C0 18.6193 1.1193 17.5 2.5 17.5H36.4645L23.2323 4.26777C22.256 3.29145 22.256 1.70855 23.2323 0.732225Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div
                                class="grid grid-cols-5 items-center border-y-[2px] border-[#F4F4F4] py-[10px] xl:py-[20px] 2xl:py-[25px]">
                                <div class="col-span-2 text-center flex flex-col items-center">
                                    <img src="{{ asset('images/home/ragging-bull.png') }}"
                                        alt="{{ $match->team1->name }}" class="">
                                    <p class="my-0 text-[12px] xl:text-[14px] font-sans font-semibold mt-[5px]">
                                        {{ $match->team1->short_name }}
                                    </p>
                                </div>
                                <div class="text-center">
                                    <p
                                        class="my-0 font-extrabold text-[#000] font-montu text-[18px] lg:text-[20px] xl:text-[24px]">
                                        vs
                                    </p>
                                </div>
                                <div class="col-span-2 text-center flex flex-col items-center">
                                    <img src="{{ asset('images/home/strikers.png') }}" alt="{{ $match->team2->name }}"
                                        class="">
                                    <p class="my-0 text-[12px] xl:text-[14px] font-sans font-semibold mt-[5px]">
                                        {{ $match->team2->short_name }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="px-[10px] xl:px-[25px] 2xl:px-[50px] py-[10px] md:py-[20px] 2xl:py-[30px] text-center">
                                <p class="my-0 text-[12px] ont-sans font-bold text-[#000] text-nowrap">
                                    {{-- {{ $match->tournament->name }} - {{ $match->venue }} --}}
                                    Match 12 - Pindi Cricket Stadium
                                </p>
                            </div>
                        </div>
                    @empty
                        <p>no macthes found</p>
                    @endforelse
                </div>

                {{-- <button
                    class="custom-prev absolute top-1/2 right-[50px] transform -translate-y-1/2 z-10 bg-[#094AB7] w-[45px] h-full flex items-center justify-center">
                    <img src="{{ asset('images/icons/arc-right.svg') }}" alt="Previous" class="p-[10px]">
                </button> --}}

                <button
                    class="custom-next absolute top-1/2 right-[0px] transform -translate-y-1/2 z-10 bg-[#094AB7] w-[30px] xl:w-[45px] h-full flex items-center justify-center">
                    <img src="{{ asset('images/icons/arc-right.svg') }}" alt="Next" class="p-[10px]">
                </button>
            </div>
        </div>
    </div>


    {{-- Magic Moments Refined --}}
    <div class="relative bg-[#fff]">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px] my-[30px] xl:my-[60px]">
            <div class="mb-[15px] lg:mb-[30px] xl:mb-[50px]">
                <p class="text-[#094AB7] text-[22px] lg:text-[26px] xl:text-[30px] font-bold font-montu">
                    Magic Moments
                </p>
            </div>
            <div class="magic_moments overflow-hidden">
                <div class="w-full h-full mx-[5px] overflow-hidden">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/1.png') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            5 Sixes in a Row
                            vs TFS Sultan
                        </p>
                    </div>
                </div>
                <div class="w-full h-full mx-[5px] relative">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/2.png') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            3 Sixes in a Row
                            vs TFS Strikers
                        </p>
                    </div>
                </div>
                <div class="w-full h-full mx-[5px]">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/3.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            3 Sixes in a Row
                            vs TFS Zalmi
                        </p>
                    </div>
                </div>
                <div class="w-full h-full object-cover mx-[5px]">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/4.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            3 Sixes in a Row
                            vs Raging Bulls
                        </p>
                    </div>
                </div>
                <div class="w-full h-full mx-[5px]">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/5.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            Raging Bulls all out on 55 / 10
                        </p>
                    </div>
                </div>
                <div class="w-full h-full mx-[5px]">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/6.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#094AB7] py-[15px] xl:py-[30px] px-[10px] xl:px-[15px] 2xl:px-[20px] h-full">
                        <p
                            class="text-white text-[16px] xl:text-[18px] font-monti font-bold leading-tight my-0 xl:w-[90%] 2xl:w-[80%]">
                            3 Sixes in a Row
                            vs TFS Invaders
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Finalist Runner & Champions Refined --}}
    <div class="relative bg-[#fff]">
        <div class="my-[30px] xl:my-[60px] px-[20px] lg:px-[0px]">
            <div class="hidden lg:block h-[70px] w-full relative overflow-hidden">
                <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background"
                    class="absolute top-0 left-0 w-full h-full object-cover" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-7">
                <div class="lg:col-span-2">
                    <div
                        class="pl-[0px] lg:pl-[40px] xl:pl-[60px] 2xl:pl-[80px] pb-[30px] lg:pb-[0px] h-full flex items-center justify-start">
                        <div class="grid grid-cols-3 lg:grid-cols-1 w-full items-center">
                            <div class="col-span-2 lg:col-span-1">
                                <p
                                    class="text-[#094AB7] font-montu text-[22px] lg:text-[26px] xl:text-[30px] font-bold my-0 leading-tight">
                                    Finalist / Runner-Up / Champions
                                </p>
                            </div>
                            <div class="flex items-center justify-end lg:justify-start">
                                <button type="button"
                                    class="lg:w-[65%] px-[12px] lg:px-[20px] py-[7px] lg:py-[10px] lg:mt-[30px] bg-[#094AB7]">
                                    <p
                                        class="text-nowrap font-sans text-[12px] lg:text-[14px] font-normal text-white my-0">
                                        View Details</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 w-full h-full">
                    <div class="lg:hidden w-full relative overflow-hidden">
                        <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background" class="w-full" />
                    </div>
                    {{-- Winner Image --}}
                    <img src="{{ asset('storage/new/finalist.png') }}" alt="finalist"
                        class="w-full h-full object-cover">

                    <div class="lg:hidden w-full relative overflow-hidden">
                        <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background" class="w-full" />
                    </div>
                </div>
            </div>
            <div class="hidden lg:block h-[70px] w-full relative overflow-hidden">
                <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background"
                    class="absolute top-0 left-0 w-full h-full object-cover" />
            </div>
        </div>
    </div>


    {{-- Gup Shap Refined --}}
    <div class="relative bg-[#fff]">
        <div class="px-[20px] lg:px-[0px] my-[25px] xl:my-[50px]">
            <div class="px-[20px] lg:px-[40px] xl:px-[80px] md:bg-[#FFF4ED] relative">
                <div class="flex items-center justify-between py-[20px] md:py-[40px] flex-wrap">
                    <h2
                        class="lg:pl-[24px] text-[#094AB7] text-[22px] lg:text-[26px] xl:text-[30px] font-bold font-montu my-0">
                        GupShup/Reels/Interviews
                    </h2>
                    <div class="">
                        <a href="#gallery-grid">
                            <button id="btn"
                                class="px-[12px] lg:px-[20px] xl:px-[35px] py-[7px] lg:py-[10px] bg-yellow-400 text-[12px] lg:text-[14px] text-[#094AB7] font-sans cursor-pointer font-medium">
                                View All
                            </button>
                        </a>
                    </div>
                </div>
                <div id="gallery-grid"
                    class="relative grid sm:grid-cols-2 md:grid-cols-4 xl:gap-[20px] lg:gap-[13px] gap-[10px] md:pb-[100px] ">
                    {{-- Side Vector --}}
                    <img src="{{ asset('storage/new/lgbg.png') }}" alt=""
                        class="absolute left-[-80px] top-[-100px] hidden xl:block">

                    <div class="z-20 col-span-1 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-monti z-10">
                            <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>
                    <div class="z-20 col-span-1 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-monti z-10">
                            <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>
                    <div class="z-20 col-span-2 sm:col-span-2 md:col-span-2 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels2.png') }}" alt="pic 2"
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0">
                        <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                        <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-monti z-10">
                            <p
                                class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] hidden md:flex">
                                Tom Got Heated After an Umpire’s <br> Controversial Decision
                            </p>
                            <p
                                class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] md:hidden">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>
                    <div class="z-20 col-span-2 sm:col-span-2 md:col-span-2 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels2.png') }}" alt="pic 2"
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0">
                        <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                        <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-monti z-10">
                            <p
                                class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] hidden md:flex">
                                Tom Got Heated After an Umpire’s <br> Controversial Decision
                            </p>
                            <p
                                class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] md:hidden">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>
                    <div class="z-20 col-span-1 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-monti z-10">
                            <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>
                    <div class="z-20 col-span-1 relative group overflow-hidden">
                        <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                            class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                        <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                            class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-monti z-10">
                            <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                                Tom Got Heated After an Umpire’s Controversial Decision
                            </p>
                        </div>
                    </div>

                    {{-- Side Vector --}}
                    <img src="{{ asset('storage/new/lgbg.png') }}" alt=""
                        class="absolute right-[-80px] bottom-[-20px] hidden xl:block rotate-[180deg]">
                </div>
            </div>
        </div>
    </div>


    {{-- Standings section Refined --}}
    <div class="relative bg-[#fff]">
        <div class="py-[50px] lg:py-[70px] xl:py-[100px]">
            <div class="">
                <div class="relative h-[240px]">
                    <div class="absolute top-0 left-0 w-full h-full object-cover object-center">
                        <img src="{{ asset('storage/new/standings-bg.png') }}" alt="Background"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="pt-[50px] pb-[30px] relative z-30 px-[20px] lg:px-[40px] xl:px-[80px]">
                        <div class="flex justify-between items-center flex-wrap gap-[10px]">
                            <div>
                                <p
                                    class="text-[22px] lg:text-[26px] xl:text-[30px] font-bold font-montu text-white my-0">
                                    Standings
                                </p>
                            </div>
                            <div class="hs-dropdown relative">
                                <div class="w-[100px] lg:w-[120px] bg-[#fff]">
                                    <select id="cars" name="cars"
                                        class="w-full py-[5px] xl:py-[8px] bg-white xl:text-[14px] md:text-[12px] text-[10px] font-medium font-monti text-[#060E34] border-none">
                                        <option value="">Season 1</option>
                                        <option value="">Season 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Standings Table -->
                <div
                    class="px-[20px] lg:px-[40px] xl:px-[80px] relative grid grid-cols-1 xl:grid-cols-2 gap-[10px] lg:gap-[16px] xl:gap-[22px] mt-[-100px]">
                    <div class="lg:mt-[15px]">
                        <table
                            class="w-full bg-[#0160FF] shadow-[0px_14px_35px_rgba(9,21,75,0.55)] rounded-[15px] font-monti">
                            <thead>
                                <tr
                                    class="text-white border-b border-[#397242] text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px]">
                                    <th class="py-[20px] px-[10px] 2xl:px-[20px]">
                                        Group A
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        M
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        W
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        L
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        NR
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        D
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        P
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        NRR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                                            class="w-7 h-7">
                                        <span class="">Strikers</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                            class="w-7 h-7">
                                        <span class=" ">Raging
                                            Bulls</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans"
                                            class="w-7 h-7">
                                        <span class=" ">Sultans</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders"
                                            class="w-7 h-7">
                                        <span class=" ">Invaders</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2.000</td>
                                </tr>
                                <tr class="text-white text-center">
                                    <td colspan="8"
                                        class="px-[10px] py-[16px] xl:py-[22px] font-normal font-monti text-[12px] xl:text-[14px]">
                                        <div class="flex justify-center items-center">
                                            <a href="/ranking"
                                                class="group flex items-center gap-[30px] lg:gap-[40px] xl:gap-[60px] cursor-pointer hover:text-[#fff] transition-all hover:gap-[20px] duration-200 ease-in-out">
                                                <p class="leading-none">View All Rankings</p>
                                                <img src="{{ asset('storage/b.svg') }}" alt="Arrow icon"
                                                    class="transition duration-300" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- table 2 --}}
                    <div class="lg:mt-[15px]">
                        <table
                            class="w-full bg-[#0160FF] shadow-[0px_14px_35px_rgba(9,21,75,0.55)] rounded-[15px] font-monti">
                            <thead>
                                <tr
                                    class="text-white border-b border-[#397242] text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px]">
                                    <th class="py-[20px] px-[10px] 2xl:px-[20px]">
                                        Group A
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        M
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        W
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        L
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        NR
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        D
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        P
                                    </th>
                                    <th class="py-[20px] px-[5px] text-center">
                                        NRR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers"
                                            class="w-7 h-7">
                                        <span class="">Strikers</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                            class="w-7 h-7">
                                        <span class=" ">Raging
                                            Bulls</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans"
                                            class="w-7 h-7">
                                        <span class=" ">Sultans</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center ">
                                        2.000</td>
                                </tr>
                                <tr
                                    class="text-white border-b border-[#32457E] hover:bg-blue-950 transition text-[10px] sm:text-[12px] lg:text-[13px] xl:text-[14px] 2xl:text-[16px] font-medium">
                                    <td
                                        class="py-[20px] px-[10px] 2xl:px-[20px] flex items-center gap-[10px] xl:gap-[15px]">
                                        <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders"
                                            class="w-7 h-7">
                                        <span class=" ">Invaders</span>
                                    </td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        3</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        1</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        0</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        4</td>
                                    <td class="py-[20px] px-[5px] text-center">
                                        2.000</td>
                                </tr>
                                <tr class="text-white text-center">
                                    <td colspan="8"
                                        class="px-[10px] py-[16px] xl:py-[22px] font-normal font-monti text-[12px] xl:text-[14px]">
                                        <div class="flex justify-center items-center">
                                            <a href="/ranking"
                                                class="group flex items-center gap-[30px] lg:gap-[40px] xl:gap-[60px] cursor-pointer hover:text-[#fff] transition-all hover:gap-[20px] duration-200 ease-in-out">
                                                <p class="leading-none">View All Rankings</p>
                                                <img src="{{ asset('storage/b.svg') }}" alt="Arrow icon"
                                                    class="transition duration-300" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Highlights section Refined --}}
    <div class="relative bg-[#FFF4ED]">
        <div class="col-md-10 mx-auto">
            <div class="py-[20px] md:py-[30px] xl:py-[40px]">
                <div class="flex items-center justify-between ml-2 xl:ml-0">
                    <h2 class="text-[22px] lg:text-[26px] xl:text-[30px] text-[#094AB7] font-bold font-montu">
                        Highlights
                    </h2>
                    <div class="py-[36px] xl:pr-[20px] pr-[15px]">
                        <a href="/teams">
                            <button id="btn"
                                class="px-[23px] md:px-[35px] md:py-[9px] py-[5px] bg-[#094AB7] text-[10px] md:text-[14px] text-white font-sans cursor-pointer ">
                                View All
                            </button>
                        </a>
                    </div>
                </div>

                {{-- Highlighted Section --}}
                <div class="highlights_section">
                    @foreach ([
        [
            'default_image' => 'storage/new/team-vs-team.png',
            'hover_image' => 'storage/new/h2.png',
            'title' => 'Tom Got Heated After an Umpire’s Controversial Decision',
        ],
        [
            'default_image' => 'storage/new/team-vs-team.png',
            'hover_image' => 'storage/new/h3.png',
            'title' => 'Tom Got Heated After an Umpire’s Controversial Decision',
        ],
        [
            'default_image' => 'storage/new/team-vs-team.png',
            'hover_image' => 'storage/new/h4.png',
            'title' => 'Tom Got Heated After an Umpire’s Controversial Decision',
        ],
        [
            'default_image' => 'storage/new/team-vs-team.png',
            'hover_image' => 'storage/new/h4.png',
            'title' => 'Tom Got Heated After an Umpire’s Controversial Decision',
        ],
    ] as $item)
                        <div class="highlights_box ">
                            <div class="relative w-full px-[10px]">
                                <div class="w-full h-[304px] relative bg-black">
                                    <img src="{{ asset($item['default_image']) }}" alt="Default Image"
                                        class="object-cover w-full h-full">
                                </div>
                                <div
                                    class="text-black font-monti mt-[24px] font-bold text-[14px] lg:text-[15px] 2xl:text-[16px]">
                                    <p class="my-0">
                                        {{ $item['title'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    {{-- Featured Players Refined  --}}
    <div class="relative bg-[#fff]">
        <div class="col-md-11 mx-auto">
            <div class="py-[50px] md:py-[70px] xl:py-[100px] px-[20px] xl:px-[30px]">
                <p
                    class="font-montu text-[22px] lg:text-[26px] xl:text-[30px] font-bold leading-[46px] pb-[20px] md:pb-[30px] xl:pb-[40px] text-[#094AB7]">
                    Featured Players</p>
                <div class="featured_players">
                    @foreach ([
        [
            'stats_image' => 'storage/new/fpl.png',
            'player_image' => 'storage/new/fb1.png',
            'bg_color' => 'bg-[#094AB7]',
            'first_name' => 'Jamshaid',
            'last_name' => 'Arbab Khan',
            'role' => 'Allrounder',
            'flag_image' => 'storage/new/gb.png',
            'matches' => '20',
            'wickets' => '40',
            'strike_rate' => '220',
            'scores' => '400',
        ],
        [
            'stats_image' => 'storage/new/s.png',
            'player_image' => 'storage/new/54.png',
            'bg_color' => 'bg-yellow-400',
            'first_name' => 'Muhammad',
            'last_name' => 'Awais Khan',
            'role' => 'Allrounder',
            'flag_image' => 'storage/new/s.png',
            'matches' => '20',
            'wickets' => '40',
            'strike_rate' => '220',
            'scores' => '400',
        ],
        [
            'stats_image' => 'storage/new/fpl.png',
            'player_image' => 'storage/new/fb1.png',
            'bg_color' => 'bg-[#094AB7]',
            'first_name' => 'Jamshaid',
            'last_name' => 'Arbab Khan',
            'role' => 'Allrounder',
            'flag_image' => 'storage/new/gb.png',
            'matches' => '20',
            'wickets' => '40',
            'strike_rate' => '220',
            'scores' => '400',
            'hidden_class' => 'max-[640px]:hidden',
        ],
        [
            'stats_image' => 'storage/new/s.png',
            'player_image' => 'storage/new/54.png',
            'bg_color' => 'bg-yellow-400',
            'first_name' => 'Muhammad',
            'last_name' => 'Awais Khan',
            'role' => 'Allrounder',
            'flag_image' => 'storage/new/s.png',
            'matches' => '20',
            'wickets' => '40',
            'strike_rate' => '220',
            'scores' => '400',
        ],
    ] as $player)
                        <div
                            class="bg-[#FFF4ED] border border-[#F4F4F4] xl:mr-[30px] xl:mx-0 mx-[10px] {{ $player['hidden_class'] ?? '' }}">
                            <div class="grid grid-cols-5">
                                <div class="col-span-2">
                                    <div class="flex flex-col justify-center items-center">
                                        <img src="{{ asset($player['stats_image']) }}" alt="featured player"
                                            class="object-cover w-[52px] h-[60px] mt-[22px] mb-[15px]">
                                        <h4 class="font-sans text-[12px] md:text-[14px] font-normal">Matches</h4>
                                        <p class="font-montu font-bold text-[20px] md:text-[24px]">
                                            {{ $player['matches'] }}</p>
                                        <h4 class="font-sans text-[12px] md:text-[14px] font-normal">Wickets</h4>
                                        <p class="font-montu font-bold text-[20px] md:text-[24px]">
                                            {{ $player['wickets'] }}</p>
                                        <h4 class="font-sans text-[12px] md:text-[14px] font-normal">Strike Rate
                                        </h4>
                                        <p class="font-montu font-bold text-[20px] md:text-[24px]">
                                            {{ $player['strike_rate'] }}</p>
                                        <h4 class="font-sans text-[12px] md:text-[14px] font-normal">Scores</h4>
                                        <p class="font-montu font-bold text-[20px] md:text-[24px]">
                                            {{ $player['scores'] }}</p>
                                    </div>
                                </div>
                                <div class="col-span-3 flex justify-center {{ $player['bg_color'] }}">
                                    <img src="{{ asset($player['player_image']) }}" alt="featured player"
                                        class="h-full object-cover">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 px-[30px]">
                                <div class="mt-[16px]">
                                    <p class="font-sans text-[14px] font-bold mb-[8px]">
                                        {{ $player['first_name'] }}</p>
                                    <p class="font-montu md:text-[22px] text-[20px] font-bold mb-[8px]">
                                        {{ $player['last_name'] }}</p>
                                    <p class="font-monti md:text-[14px] text-[12px] mb-[16px]">
                                        {{ $player['role'] }}</p>
                                </div>
                                <div>
                                    <div class="flex justify-end mb-[8px]">
                                        <img src="{{ asset($player['flag_image']) }}" alt="featured player"
                                            class="object-cover w-[32px] h-[37px] mt-[22px]">
                                    </div>
                                    <div class="flex justify-end mb-[16px]">
                                        <button class="font-sans text-[12px] font-medium">
                                            View Profile <span class="pl-[8px] text-[11px]"><i class="fa-solid fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    {{-- Latest News Section --}}
    <div class="relative">
        <div class="px-[0px] md:px-[60px] xl:px-[80px]">
            <div class="py-[12px] flex flex-wrap items-center justify-between mb-[30px] xl:mb-[50px] relative">
                <img src="{{ asset('storage/ranking/latestnewsbackground.png') }}" alt="Background Image"
                    class="absolute w-full h-full object-cover -z-10" />
                <p
                    class="px-[15px] lg:px-[30px] xl:px-[50px] text-white text-[18px] md:text-[20px] xl:text-[24px] font-bold font-montu">
                    Latest News
                </p>
                <div class="px-[19px] xl:px-[25px] ">
                    <a href="">
                        <button
                            class="bg-yellow-400 px-[28px] xl:px-[35px] py-[5px] xl:py-[9px] text-[#094AB7] font-monti cursor-pointer text-[10px] md:text-[12px] xl:text-[14px]">
                            View All
                        </button>
                    </a>
                </div>
            </div>
            <!-- News Grid Refined -->
            <div class="news_section">
                @foreach ([
        [
            'image' => 'storage/news/n1.png',
            'date' => '12 December, 2024',
            'title' => 'Jamshed Jimmy picks up 3 important wickets in an over.',
        ],
        [
            'image' => 'storage/news/n2.png',
            'date' => '12 December, 2024',
            'title' => 'Muhammad Zain’s fiery bowling stuns TFS Warriors',
        ],
        [
            'image' => 'storage/news/n3.png',
            'date' => '12 December, 2024',
            'title' => 'Abid Hussain smashes 2 consecutive sixes to snatch a sensational thriller victory!',
        ],
        [
            'image' => 'storage/news/n4.png',
            'date' => '12 December, 2024',
            'title' => 'TFS Zalmi clinch nail-biting finish in eliminator thriller against TFS Strikers!',
        ],
    ] as $newsItem)
                    <div class="relative group overflow-hidden mx-[19px] md:mx-[4px]">
                        <img src="{{ asset($newsItem['image']) }}" alt="news"
                            class="w-full transition-all duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50 group-hover:opacity-100">
                        </div>
                        <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-0 text-white px-[24px] font-monti ">
                            <p class="xl:text-[14px] py-[10px] font-monti text-[#ffff] text-[12px]">
                                {{ $newsItem['date'] }}
                            </p>
                            <p class="text-[12px] md:text-[15px] 2xl:text-[16px] font-bold">
                                {{ $newsItem['title'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
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
