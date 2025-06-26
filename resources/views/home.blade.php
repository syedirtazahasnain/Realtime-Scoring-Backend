<x-app-layout>
    <style>
        @media screen and (min-width: 365px) and (max-width: 640px) {
            .multiple-items>button.slick-next.slick-arrow {
                display: none;
            }

            .multiple-items {
                width: 100%;
            }

            .box_spaces {
                margin-top: 15px;
                margin-right: 0px !important;
            }

            .multiple-items>.slick-prev {
                display: none
            }
        }

        @media screen and (min-width: 641px) and (max-width: 900px) {
            .multiple-items>button.slick-next.slick-arrow {
                background-color: #094AB7;
                height: 93%;
                margin-top: 8px;
            }

            .multiple-items {
                width: 96%;
            }

            .box_spaces {
                margin-top: 15px;
                margin-right: 15px;
            }

            .multiple-items>button.slick-next.slick-arrow {
                margin-right: -0.5% !important;
                width: 3%;
            }

            .multiple-items>.slick-prev {
                display: none
            }
        }

        @media screen and (min-width: 901px) and (max-width: 1200px) {
            .multiple-items>button.slick-next.slick-arrow {
                background-color: #094AB7;
                height: 93%;
                margin-top: 8px;
            }

            .multiple-items {
                width: 96%;
            }

            .box_spaces {
                margin-top: 15px;
                margin-right: 15px;
            }

            .multiple-items>button.slick-next.slick-arrow {
                margin-right: -1.8% !important;
                width: 3%;
            }

            .multiple-items>button.:before {
                content: '';
                display: block;
                width: 22px;
                height: 23px;
                border: solid white;
                border-width: 0 2px 2px 0;
                transform: rotate(-45deg);
                margin-left: 2px;
            }
        }

        @media screen and (min-width: 1201px) and (max-width: 1600px) {
            .multiple-items>button.slick-next.slick-arrow {
                background-color: #094AB7;
                height: 93%;
                margin-top: 8px;
            }

            .multiple-items {
                width: 96%;
            }

            .box_spaces {
                margin-top: 15px;
                margin-right: 15px;
            }

            .multiple-items>button.slick-next.slick-arrow {
                margin-right: -2.1% !important;
                width: 3%;
            }

            .multiple-items>button.:before {
                content: '';
                display: block;
                width: 22px;
                height: 23px;
                border: solid white;
                border-width: 0 2px 2px 0;
                transform: rotate(-45deg);
                margin-left: 2px;
            }
        }

        @media screen and (min-width: 1601px) {
            .multiple-items>button.slick-next.slick-arrow {
                background-color: #094AB7;
                height: 93%;
                margin-top: 8px;
            }

            .multiple-items {
                width: 96%;
            }

            .box_spaces {
                margin-top: 15px;
                margin-right: 15px;
            }

            .multiple-items>button.slick-next.slick-arrow {
                margin-right: -2.6% !important;
                width: 3%;

                .multiple-items>button.slick-next:before {
                    content: '';
                    display: block;
                    width: 22px;
                    height: 23px;
                    border: solid white;
                    border-width: 0 2px 2px 0;
                    transform: rotate(-45deg);
                    margin-left: 2px;
                }
            }
        }
    </style>

    {{-- HERO Section Refined --}}
    <div class="relative bg-[#fff]">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px]">
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
                            <button type="button"
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
                            </button>
                        </div>
                    </div>
                    <div class="w-full py-[15px] xl:py-[20px] relative">
                        <img src="{{ asset('images/home/bar-banner-bg.png') }}" alt="Background"
                            class="absolute top-0 left-0 w-full h-full object-cover z-0" />

                        <p
                            class="py-0 leading-none font-montu font-bold text-[18px] lg:text-[24px] xl:text-[28px] 2xl:text-[34px] text-white text-center relative z-10">
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
                                    <div class="bg-[#094AB7] hover:bg-[#083a8f] transition-colors duration-200 w-[85%]">
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
                <p class="text-[#094AB7] text-[18px] lg:text-[24px] xl:text-[30px] font-bold font-montu">
                    Magic Moments
                </p>
            </div>
            <div class="magic_moments overflow-hidden">
                <div class="w-full h-full mx-[5px] overflow-hidden">
                    <div class="h-[250px] lg:h-[320px] xl:h-[400px] relative overflow-hidden">
                        <img src="{{ asset('storage/new/1.png') }}" alt=""
                            class="w-full h-full object-cover">
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
                        <img src="{{ asset('storage/new/2.png') }}" alt=""
                            class="w-full h-full object-cover">
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
                                    class="text-[#094AB7] font-montu text-[18px] lg:text-[24px] xl:text-[30px] font-bold my-0 leading-tight">
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
                <div class="flex items-center justify-between py-[20px] md:py-[40px]">
                    <h2
                        class="lg:pl-[24px] rounded-xl text-[#094AB7] text-[18px] 2xl:text-[24px] font-bold font-montu">
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
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
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
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
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
                        <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-montserrat z-10">
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
                        <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-montserrat z-10">
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
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
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
                        <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
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


    <!-- Gup shup section -->
    <div
        class="xl:px-[80px] lg:px-[40px] px-[20px] md:bg-[#FFF4ED] mt-[30px] md:mt-[100px] h-full overflow-hidden relative">
        <div class="rounded-[5px] flex items-center justify-between md:py-[50px]">
            <h2 class="lg:pl-[24px] rounded-xl text-[#094AB7] text-[18px] 2xl:text-[24px] font-bold font-Montserrat ">
                GupShup/Reels/ <br class="md:hidden">interviews
            </h2>
            <div class="lg:pr-[20px]">
                <a href="#gallery-grid">
                    <button id="btn"
                        class="px-[23px] md:px-[35px] md:py-[9px] py-[5px] bg-yellow-400 text-[10px] md:text-[14px] text-white font-sans cursor-pointer ">
                        View All
                    </button>
                </a>
            </div>
        </div>
        <div id="gallery-grid"
            class="relative grid sm:grid-cols-2 md:grid-cols-4 xl:gap-[20px] lg:gap-[13px] gap-[10px] md:pb-[100px] ">
            <img src="{{ asset('storage/new/lgbg.png') }}" alt=""
                class="absolute -left-20 -top-25 hidden lg:flex">
            <div class="col-span-1 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
            <div class="col-span-1 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-2 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels2.png') }}" alt="pic 2"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0">
                <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-montserrat z-10">
                    <p
                        class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] hidden md:flex">
                        Tom Got Heated After an Umpire’s <br> Controversial Decision
                    </p>
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] md:hidden">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-2 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels2.png') }}" alt="pic 2"
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0">
                <img src="{{ asset('storage/new/g2.png') }}" alt="pic 2 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100">
                <div class="absolute md:bottom-6 bottom-3 left-5 text-white font-montserrat z-10">
                    <p
                        class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] hidden md:flex">
                        Tom Got Heated After an Umpire’s <br> Controversial Decision
                    </p>
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px] md:hidden">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
            <div class="col-span-1 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
            <div class="col-span-1 relative group overflow-hidden">
                <img src="{{ asset('storage/new/Reels1.png') }}" alt="pic 1 "
                    class="w-full h-auto max-h-[400px] object-cover transition-opacity duration-100 group-hover:opacity-0 rounded-none ">
                <img src="{{ asset('storage/new/g1.png') }}" alt="pic 1 hover"
                    class="w-full h-auto max-h-[400px] object-cover absolute inset-0 opacity-0 transition-opacity duration-100 group-hover:opacity-100 ">
                <div class="absolute md:bottom-6 bottom-3 md:left-5 left-2 text-white font-montserrat z-10">
                    <p class="text-[12px] md:text-[12px] lg:text-[14px] xl:text-[16px] font-bold mt-[11px]">
                        Tom Got Heated After an Umpire’s Controversial Decision
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Standings section -->
    <div class="relative w-full h-auto md:mt-[50px] mt-[30px]">
        <div class="absolute w-full h-[241px] object-cover object-center">
            <img src="{{ asset('storage/new/Standings-bg.png') }}" alt="Background"
                class="w-full h-full object-cover">
        </div>
        <div class="relative md:h-[241px] sm:h-[150px]">
            <div class="pt-[50px] xl:px-[80px] lg:px-[40px] px-[20px] flex flex-wrap justify-between items-center">
                <span
                    class="text-[18px] xl:text-[30px] lg:text-[26px] md:text-[22px] font-bold font-montserrat text-white">Standings</span>
                <div class="hs-dropdown relative">
                    <div class="px-[13px] bg-[#fff]">
                        <select id="cars" name="cars"
                            class="w-full py-2 bg-white xl:text-[14px] md:text-[12px] text-[10px] font-medium font-montserrat text-[#060E34]">
                            <option value="">Season 1</option>
                            <option value="">Season 2</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Standings Table -->
        <div
            class="xl:px-[80px] lg:px-[40px] px-[20px] relative md:grid sm:grid-cols-1 xl:grid-cols-2 md:mt-[-125px] md:gap-[20px] sm:mt-[-2px] min-[365px]:mt-[-10px] max-[640px]:pt-[30px] hidden">
            <div class="max-[768px]:mt-[15px]">
                <table class="w-full border-collapse bg-[#0160FF] shadow-[0px_14px_35px_rgba(9,21,75,0.55)]">
                    <thead>
                        <tr class="bg-[#0160FF] text-white border-b border-[#397242] ">
                            <th
                                class="py-7 sm:pl-6 min-[365px]:pl-4 text-left sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                Group A
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                M
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                W
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                L
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NR
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                D
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                P
                            </th>
                            <th
                                class="sm:p-3 text-center rounded-t-lg sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NRR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                    class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white text-center">
                            <td colspan="8"
                                class="p-5 sm:text-[14px] min-[365px]:text-[12px] font-normal font-montserrat">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="/ranking"
                                        class="group flex items-center gap-2 cursor-pointer hover:text-gray-400 transition">
                                        <p class="leading-none">View All Rankings</p>
                                        <img src="{{ asset('storage/b.svg') }}" alt="Arrow icon"
                                            class="transition duration-300 group-hover:opacity-50" />
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- table 2 --}}
            <div class="max-[768px]:mt-[15px]">
                <table class="w-full border-collapse bg-[#0160FF] shadow-[0px_14px_35px_rgba(9,21,75,0.55)]">
                    <thead>
                        <tr class="bg-[#0160FF] text-white border-b border-[#397242] ">
                            <th
                                class="py-7 sm:pl-6 min-[365px]:pl-4 text-left sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                Group A
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                M
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                W
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                L
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NR
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                D
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                P
                            </th>
                            <th
                                class="sm:p-3 text-center rounded-t-lg sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NRR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                    class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white text-center">
                            <td colspan="8"
                                class="p-5 sm:text-[14px] min-[365px]:text-[12px] font-normal font-montserrat">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="/ranking"
                                        class="group flex items-center gap-2 cursor-pointer hover:text-gray-400 transition">
                                        <p class="leading-none">View All Rankings</p>
                                        <img src="{{ asset('storage/b.svg') }}" alt="Arrow icon"
                                            class="transition duration-300 group-hover:opacity-50" />
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        {{-- table for mobile view --}}
        <div class="xl:px-[80px] lg:px-[40px] px-[20px] relative md:hidden grid sm:grid-cols-1 ">
            {{-- table 1 --}}
            <div class="max-[768px]:mt-[15px]">
                <table class="w-full border-collapse bg-[#0160FF] shadow-[0px_14px_35px_rgba(9,21,75,0.55)]">
                    <thead>
                        <tr class="bg-[#0160FF] text-white border-b border-[#397242]">
                            <th
                                class="py-7 sm:pl-6 min-[365px]:pl-4 text-left sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                Group A
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                M
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                W
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                L
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NR
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                D
                            </th>
                            <th
                                class="sm:p-3 text-center sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                P
                            </th>
                            <th
                                class="sm:p-3 text-center rounded-t-lg sm:text-[16px] min-[365px]:text-[12px] min-[450px]:text-[14px] font-montserrat font-bold">
                                NRR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Team Row Template -->
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                    class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-blue-950 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/1.png') }}" alt="Strikers" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Strikers</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/2.png') }}" alt="Raging Bulls"
                                    class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Raging
                                    Bulls</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/3.png') }}" alt="Sultans" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Sultans</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium ">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white border-b border-[#32457E] hover:bg-yellow-400 transition">
                            <td
                                class="py-4 flex items-center sm:space-x-3 min-[365px]:space-x-1 min-[450px]:space-x-2 sm:pl-6 min-[365px]:pl-2">
                                <img src="{{ asset('storage/standings/4.png') }}" alt="Invaders" class="w-7 h-7">
                                <span
                                    class=" sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">Invaders</span>
                            </td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                3</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                1</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                0</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                4</td>
                            <td
                                class="p-3 text-center sm:text-[16px] min-[365px]:text-[10px] min-[450px]:text-[14px] font-montserrat font-medium">
                                2.000</td>
                        </tr>
                        <tr class="bg-[#0160FF] text-white text-center">
                            <td colspan="8"
                                class="p-5 sm:text-[14px] min-[365px]:text-[12px] font-normal font-montserrat">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="/ranking"
                                        class="group flex items-center gap-2 cursor-pointer hover:text-gray-400 transition">
                                        <p class="leading-none">View All Rankings</p>
                                        <img src="{{ asset('storage/b.svg') }}" alt="Arrow icon"
                                            class="transition duration-300 group-hover:opacity-50" />
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Highlights section -->
    <div class="bg-[#FFF4ED] md:h-full h-[536px] ">
        <div
            class="  sm:mt-[20px] md:mt-[80px] lg:mt-[74px]  xl:px-[80px] px-[20px] max-[640px]:mt-[20px] mt-[100px] h-[536px]">
            <div class="flex items-center justify-between ml-2 xl:ml-0 ">
                <h2
                    class="md:py-[36px] text-[#094AB7] xl:text-[24px] lg:text-[20px] text-[18px] font-bold font-montu ">
                    Highlights
                </h2>
                <div class="py-[36px] xl:pr-[20px] pr-[15px]">
                    <a href="/teams">
                        <button id="btn"
                            class="px-[23px] md:px-[35px] md:py-[9px] py-[5px] bg-yellow-400 text-[10px] md:text-[14px] text-white font-sans cursor-pointer ">
                            View All
                        </button>
                    </a>
                </div>
            </div>
            <div class="highlights_section">
                <div class="highlights_box xl:mr-[20px] xl:mx-0 mx-[10px]">
                    <div class="relative w-full h-[304px]">
                        <img src="{{ asset('storage/new/worriors.png') }}" alt="Default Image"
                            class="w-full h-full transition-opacity duration-300 hover:opacity-0 object-cover ">
                        <img src="{{ asset('storage/new/h1.png') }}" alt="Hover Image"
                            class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover">
                        <div class=" text-black font-montserrat z-10 pt-[27px] pb-[43px]">
                            <p
                                class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] text-[14px] font-montserrat font-bold ">
                                Tom Got Heated After an
                                Umpire’s Controversial Decision</p>
                        </div>
                    </div>
                </div>
                <div class="highlights_box xl:mr-[20px] xl:mx-0 mx-[10px]">
                    <div class="relative">
                        <img src="{{ asset('storage/new/invaders.png') }}" alt="Default Image"
                            class="w-full h-[304px]  transition-opacity duration-300 hover:opacity-0 object-cover ">
                        <img src="{{ asset('storage/new/h2.png') }}" alt="Hover Image"
                            class="absolute inset-0 w-full h-[304px] opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover">
                        <div class=" text-black font-montserrat z-10 pt-[27px] pb-[43px]">
                            <p
                                class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] text-[14px] font-montserrat font-bold ">
                                Tom Got Heated After an
                                Umpire’s Controversial Decision</p>
                        </div>
                    </div>
                </div>
                <div class="highlights_box xl:mr-[20px] xl:mx-0 mx-[10px]">
                    <div class="relative">
                        <img src="{{ asset('storage/new/zalmi.png') }}" alt="Default Image"
                            class="w-full h-[304px]  transition-opacity duration-300 hover:opacity-0 object-cover ">
                        <img src="{{ asset('storage/new/h3.png') }}" alt="Hover Image"
                            class="absolute inset-0 w-full h-[304px] opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover">
                        <div class=" text-black font-montserrat z-10 pt-[27px] pb-[43px]">
                            <p
                                class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] text-[14px] font-montserrat font-bold ">
                                Tom Got Heated After an
                                Umpire’s Controversial Decision</p>
                        </div>
                    </div>
                </div>
                <div class="highlights_box xl:mr-[20px] xl:mx-0 mx-[10px]">
                    <div class="relative">
                        <img src="{{ asset('storage/new/sultan.png') }}" alt="Default Image"
                            class="w-full h-[304px]  transition-opacity duration-300 hover:opacity-0 object-cover ">
                        <img src="{{ asset('storage/new/h4.png') }}" alt="Hover Image"
                            class="absolute inset-0 w-full h-[304px] opacity-0 transition-opacity duration-300 hover:opacity-100 object-cover">
                        <div class=" text-black font-montserrat z-10 pt-[27px] pb-[43px]">
                            <p
                                class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] text-[14px] font-montserrat font-bold ">
                                Tom Got Heated After an
                                Umpire’s Controversial Decision</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Featured Players  --}}
    <div class="w-[95%] mx-auto xl:px-[80px] lg:px-[40px] px-[20px] pt-[30px] lg:pt-[100px]">
        <h3
            class="font-montu text-[18px] xl:text-[30px] lg:text-[24px] md:text-[22px] font-bold leading-[46px] pb-[20px] md:pb-[50px] text-[#094AB7]">
            Featured Players</h3>
        <div class="featured_players">
            <div class=" bg-[#FFF4ED] border border-[#F4F4F4] xl:mr-[30px] xl:mx-0 mx-[10px]">
                <div class=" grid grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/new/fpl.png') }}" alt="featured player"
                                class=" object-cover w-[52px] h-[60px] mt-[22px] mb-[15px]">
                            <h4 class="font-sans  text-[12px] md:text-[14px] font-normal ">Matches</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">20</p>
                            <h4 class="font-sans  text-[12px] md:text-[14px] font-normal ">Wickets</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">40</p>
                            <h4 class="font-sans  text-[12px] md:text-[14px] font-normal ">Strike Rate</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">220</p>
                            <h4 class="font-sans text-[12px]  md:text-[14px] font-normal ">Scores</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">400</p>
                        </div>
                    </div>
                    <div class="col-span-3 flex justify-center bg-[#094AB7]">
                        <img src="{{ asset('storage/new/fb1.png') }}" alt="featured player"
                            class="h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-2 px-[30px]">
                    <div class="mt-[16px]">
                        <p class="font-sans text-[14px] font-bold mb-[8px]">Jamshaid</p>
                        <p class="font-montu md:text-[22px] text-[20px] font-bold mb-[8px]">Arbab Khan</p>
                        <p class="font-montserrat md:text-[14px] text-[12px] mb-[16px]">Allrounder</p>
                    </div>
                    <div>
                        <div class="flex justify-end mb-[8px]">
                            <img src="{{ asset('storage/new/gb.png') }}" alt="featured player"
                                class=" object-cover w-[32px] h-[37px] mt-[22px] ">
                        </div>
                        <div class="flex justify-end mb-[16px]">
                            <button class="font-sans text-[12px] font-medium">
                                View Profile -→
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-[#FFF4ED] border border-[#F4F4F4] xl:mr-[30px] xl:mx-0 mx-[10px]">
                <div class=" grid grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/new/s.png') }}" alt="featured player"
                                class=" object-cover w-[52px] h-[60px] mt-[22px] mb-[15px]">
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Matches</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">20</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Wickets</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">40</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Strike Rate</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">220</p>
                            <h4 class="font-sans text-[12px]  md:text-[14px] font-normal ">Scores</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">400</p>
                        </div>
                    </div>
                    <div class="col-span-3 flex justify-center bg-yellow-400">
                        <img src="{{ asset('storage/new/54.png') }}" alt="featured player"
                            class="h-full object-cover">

                    </div>
                </div>
                <div class="grid grid-cols-2 px-[30px]">
                    <div class="mt-[16px]">
                        <p class="font-sans text-[14px] font-bold mb-[8px]">Muhammad</p>
                        <p class="font-montu md:text-[22px] text-[20px] font-bold mb-[8px]">Awais Khan</p>
                        <p class="font-montserrat md:text-[14px] text-[12px] mb-[16px]">Allrounder</p>
                    </div>
                    <div>
                        <div class="flex justify-end mb-[8px]">
                            <img src="{{ asset('storage/new/s.png') }}" alt="featured player"
                                class=" object-cover w-[32px] h-[37px] mt-[22px] ">
                        </div>
                        <div class="flex justify-end mb-[16px]">
                            <button class="font-sans text-[12px] font-medium">
                                View Profile -→
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-[#FFF4ED]  max-[640px]:hidden xl:mr-[30px] xl:mx-0 mx-[10px]">
                <div class=" grid grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/new/fpl.png') }}" alt="featured player"
                                class=" object-cover w-[52px] h-[60px] mt-[22px] mb-[15px]">
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Matches</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">20</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Wickets</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">40</p>
                            <h4 class="font-sans ext-[12px] md:text-[14px] font-normal ">Strike Rate</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">220</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Scores</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">400</p>
                        </div>
                    </div>
                    <div class="col-span-3 flex justify-center bg-[#094AB7]">
                        <img src="{{ asset('storage/new/fb1.png') }}" alt="featured player"
                            class="h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-2 px-[30px]">
                    <div class="mt-[16px]">
                        <p class="font-sans text-[14px] font-bold mb-[8px]">Jamshaid</p>
                        <p class="font-montu md:text-[22px] text-[20px] font-bold mb-[8px]">Arbab Khan</p>
                        <p class="font-montserrat md:text-[14px] text-[12px] mb-[16px]">Allrounder</p>
                    </div>
                    <div>
                        <div class="flex justify-end mb-[8px]">
                            <img src="{{ asset('storage/new/gb.png') }}" alt="featured player"
                                class=" object-cover w-[32px] h-[37px] mt-[22px] ">
                        </div>
                        <div class="flex justify-end mb-[16px]">
                            <button class="font-sans text-[12px] font-medium">
                                View Profile -→
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-[#FFF4ED] border border-[#F4F4F4] xl:mr-[30px] xl:mx-0 mx-[10px]">
                <div class=" grid grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/new/s.png') }}" alt="featured player"
                                class=" object-cover w-[52px] h-[60px] mt-[22px] mb-[15px]">
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Matches</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">20</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Wickets</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">40</p>
                            <h4 class="font-sans text-[12px] md:text-[14px] font-normal ">Strike Rate</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">220</p>
                            <h4 class="font-sans text-[12px]  md:text-[14px] font-normal ">Scores</h4>
                            <p class="font-montu font-bold text-[20px] md:text-[24px] ">400</p>
                        </div>
                    </div>
                    <div class="col-span-3 flex justify-center bg-yellow-400">
                        <img src="{{ asset('storage/new/54.png') }}" alt="featured player"
                            class="h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-2 px-[30px]">
                    <div class="mt-[16px]">
                        <p class="font-sans text-[14px] font-bold mb-[8px]">Muhammad</p>
                        <p class="font-montu md:text-[22px] text-[20px] font-bold mb-[8px]">Awais Khan</p>
                        <p class="font-montserrat md:text-[14px] text-[12px] mb-[16px]">Allrounder</p>
                    </div>
                    <div>
                        <div class="flex justify-end mb-[8px]">
                            <img src="{{ asset('storage/new/s.png') }}" alt="featured player"
                                class=" object-cover w-[32px] h-[37px] mt-[22px] ">
                        </div>
                        <div class="flex justify-end mb-[16px]">
                            <button class="font-sans text-[12px] font-medium">
                                View Profile -→
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Latest  News Section -->
    <div class="xl:px-[80px] lg:px-[40px] px-[20px] md:pt-[100px] pt-[30px] ">
        <div class="bg-[#094AB7] flex items-center justify-between mb-[30px] md:mb-[50px] mx-[10px]">
            <h2
                class="py-[12px] px-1 md:pl-[50px] text-white xl:text-[24px] lg:text-[22px] md:text-[20px] text-[18px] font-bold font-Montserrat">
                Latest News
            </h2>
            <div class="2xl:py-[13px] pr-1 md:pr-[20px] sm:py-[6px]">
                <a href="">
                    <button
                        class="px-[23px] md:px-[35px] md:py-[9px] py-[5px] bg-yellow-400 xl:text-[14px] md:text-[12px] text-[10px] text-white font-sans cursor-pointer ">
                        View All
                    </button>
                </a>
            </div>
        </div>

        <!-- News Grid -->
        <div class="news_section">
            <div class="relative group overflow-hidden mx-[10px]">
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="w-full transition-all duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50 group-hover:opacity-100"></div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10">
                    <p
                        class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] md:text-[9px] text-[12px] font-medium opacity-75">
                        12
                        December, 2024</p>
                    <p
                        class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] md:text-[8px] text-[12px] font-bold mt-[11px]">
                        Tom Got
                        Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <div class="relative group overflow-hidden mx-[10px]">
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="w-full transition-all duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50 group-hover:opacity-100"></div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10">
                    <p
                        class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] md:text-[9px] text-[12px] font-medium opacity-75">
                        12
                        December, 2024</p>
                    <p
                        class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] md:text-[8px] text-[12px] font-bold mt-[11px]">
                        Tom Got
                        Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <div class="relative group overflow-hidden mx-[10px]">
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="w-full transition-all duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50 group-hover:opacity-100"></div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10">
                    <p
                        class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] md:text-[9px] text-[12px] font-medium opacity-75">
                        12
                        December, 2024</p>
                    <p
                        class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] md:text-[8px] text-[12px] font-bold mt-[11px]">
                        Tom Got
                        Heated After an
                        Umpire’s Controversial Decision</p>
                </div>
            </div>
            <div class="relative group overflow-hidden mx-[10px]">
                <img src="{{ asset('storage/News/n1.png') }}" alt="news"
                    class="w-full transition-all duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#09154B] opacity-50 group-hover:opacity-100"></div>
                <div class="absolute bottom-0 left-0 w-full h-[120px] bg-gradient-to-t from-black to-transparent">
                </div>
                <div class="absolute bottom-6 left-5 text-white font-montserrat z-10">
                    <p
                        class="2xl:text-[14px] xl:text-[12px] lg:text-[10px] md:text-[9px] text-[12px] font-medium opacity-75">
                        12
                        December, 2024</p>
                    <p
                        class="2xl:text-[16px] xl:text-[13px] lg:text-[9px] md:text-[8px] text-[12px] font-bold mt-[11px]">
                        Tom Got
                        Heated After an
                        Umpire’s Controversial Decision</p>
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
    <script>
        $('.events-slider').on('edge', function(event, slick, direction) {
            //Edge: last slide of the slider when infinity=false
            console.log('edge was hit');
        });

        $(document).ready(function() {
            $('.video-slider').slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{

                        breakpoint: 2000,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },

                    {

                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });

        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            margin: 10,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.highlights_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.featured_players').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.news_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });



        function handleArrowVisibility() {
            var $slickNext = $('.multiple-items .slick-next');
            var screenWidth = $(window).width();

            if (screenWidth >= 320 && screenWidth <= 600) {
                console.log('hello');
                if ($slickNext.length) {
                    console.log('hello2');
                    $slickNext.remove();
                }
            }
        }

        // Run on document ready
        $(document).ready(function() {
            handleArrowVisibility();

            // Also run on window resize
            $(window).on('resize', function() {
                handleArrowVisibility();
            });
        });
    </script>
</x-app-layout>
