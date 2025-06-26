<x-app-layout>
@section('title', 'About Us - TFSPL')

@section('content')
    <style>
        .story_section .story_section_box {
            margin: 15px;
        }

        .story_section .slick-list {
            margin: 0 -15px;
        }

        .sponsor {
            transform-style: preserve-3d;
            will-change: transform;
        }

        .animate {
            animation: scrolling linear;
        }

        @keyframes .animate {
            from {
                opacity: 0;
                scale: 0.5
            }

            to {
                opacity: 1;
                scale: 1
            }
        }
    </style>
    {{-- hero section --}}
    <div class="relative w-full h-full example">
        <img src="{{ asset('storage/about/about1.png') }}" alt="" class="w-full h-full object-cover">
        <img src="{{ asset('storage/about/about2.png') }}" alt="" class="absolute top-0 left-0 w-full  object-contain">
        <img src="{{ asset('storage/about/about3.png') }}" alt=""
            class="absolute top-0 left-0 w-full h-full object-contain ">

        <div class="absolute 2xl:bottom-20 lg:left-20 xl:bottom-15 lg:bottom-10 md:left-15 bottom-5 left-4">
            <p class="text-white font-sans font-semibold 2xl:text-[18px] xl:text-[14px] text-[10px]">Chief Executive
                Officer</p>
            <p
                class="font-montserrat font-bold  2xl:text-[40px] xl:text-[30px] lg:text-[20px]
                 md:text-[15px] 2xl:mt-[20px] text-[12px] text-white">
                Naeem
                Abbas: TFSC Premier
                League
                Fxtures &
                Results
            </p>
        </div>
    </div>

    {{-- tfsc managemnt --}}
    <div class="bg-[#094AB7] animate">
        <div class="2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px]">
            <div class="grid grid-cols-1 lg:grid-cols-9 xl:mt-[90px] md:mt-[60px] mt-[40px] lg:py-[90px] py-[30px]">
                <div class="lg:col-span-3 mt-[10px]">
                    <p
                        class="font-montu 2xl:text-[30px] xl:text-[25px] md:text-[20px] text-[18px] lg:text-left text-center font-bold text-white">
                        TFSC
                        Premier League
                        Management
                    </p>
                    <p
                        class="font-sans font-normal xl:text-[18px] md:text-[14px] text-[11px] lg:text-left text-center 2xl:leading-[24px] mt-[20px] max-w-[547px] mx-auto lg:mx-0 text-white">
                        Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League Twenty
                        Four Seven Consultancy Premier League Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Quisquam magni nam nisi laboriosam
                    </p>

                    <button class=" px-[80px] py-[8px] bg-yellow-400 mt-[30px] hidden lg:block text-[#094AB7]">
                        View All
                    </button>

                </div>

                <div class="lg:col-span-6 lg:mt-3 xl:mt-0 mt-[20px]">
                    <div class="management_section">
                        <div class="relative lg:mx-[12px] mx-[5px]">
                            <img src="{{ asset('storage/about/danish.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p
                                class="absolute bottom-5 left-5 2xl:text-[24px] xl:text-[20px] lg:text-[16px] text-[12px] font-montserrat font-bold text-white">
                                Chief
                                Operating
                                Officer:
                                Danish Ather
                            </p>
                        </div>
                        <div class="relative lg:mx-[12px] mx-[5px]">
                            <img src="{{ asset('storage/about/muzahir.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p
                                class="absolute bottom-5 left-5 2xl:text-[24px] xl:text-[20px] lg:text-[16px] text-[12px] font-montserrat font-bold text-white">
                                Director
                                Operations:
                                Muzahir Hussain
                            </p>
                        </div>
                        <div class="relative lg:mx-[12px] mx-[5px]">
                            <img src="{{ asset('storage/about/salman.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p
                                class="absolute bottom-5 left-5 2xl:text-[24px] xl:text-[20px] lg:text-[16px] text-[12px] font-montserrat font-bold text-white text-wrap">
                                Director
                                Administration:
                                Muhammad Sulaman
                            </p>
                        </div>
                        <div class="relative lg:mx-[12px] mx-[5px]">
                            <img src="{{ asset('storage/about/salman.png') }}" alt=""
                                class="w-full h-full object-cover">
                            <p
                                class="absolute bottom-5 left-5 2xl:text-[24px] xl:text-[20px] lg:text-[16px] text-[12px] font-montserrat font-bold text-white">
                                Director
                                Administration:
                                Muhammad Sulaman
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tfsc community --}}
    <div class="bg-[#FFF4ED] mt-[40px] lg:mt-[100px] lg:py-[60px] py-[30px]">
        <div class="2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px]">
            <h2 class="text-[#094AB7] font-montu font-bold lg:text-[30px] text-[18px]">
                TFSC Community
            </h2>
            <div class="lg:mt-[30px] mt-[10px] relative">
                <img src="{{ asset('storage/about/comunity.png') }}" alt=""
                    class="w-full xl:h-[550px] lg:h-[500px] h-[250px] object-cover">
                <div class="absolute inset-0 bg-[#094AB7] opacity-80"></div>
                <div class="absolute inset-0 flex lg:items-center justify-center ">
                    <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[741px] relative">
                        <div class="lg:col-span-1">
                            <div class="lg:bg-[#094AB7] ">
                                <div class="pt-[30px] px-[40px]">
                                    <p class="font-sans lg:text-[24px] text-[16px] font-bold text-white text-center">Do
                                        You Want Feel
                                        Part Of
                                        TFS Premier League
                                    </p>
                                    <div class="lg:flex justify-center hidden">
                                        <img src="{{ asset('storage/about/tfsc1.png') }}" alt=""
                                            class="w-[258px]  max-h-[282px] object-cover">
                                    </div>

                                    {{-- for mobile view --}}
                                    <div class="  mt-5 lg:hidden">
                                        <div class=" bg-white py-[30px] flex flex-col items-center">
                                            <p class=" font-sans text-[14px] text-[#094AB7] font-bold ">Join
                                                the TFSC
                                                Community
                                            </p>
                                            <button
                                                class="lg:px-[42px] px-[19px] lg:py-[9px] py-[2px] bg-yellow-400 font-sans font-bold lg:text-[14px] text-[12px] mt-[15px] text-[#094AB7]">Become
                                                Premium
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute lg:bottom-8 lg:right-0 bg-white px-[50px] py-[30px] hidden lg:block">
                            <p class=" font-sans lg:text-[24px] text-[18px] text-[#094AB7] font-bold ">Join the TFSC
                                Community
                            </p>
                            <button
                                class="px-[42px] py-[9px] bg-yellow-400 font-sans font-bold text-[14px] mt-[15px] text-[#094AB7]">Become
                                Premium
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- our Story --}}
    <div class="bg-[#FFF4ED] 2xl:mt-[100px] mt-[40px]">
        <div class="xl:py-[60px] py-[30px] 2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px]">
            <h2 class="font-montu text-[#094AB7] font-bold text-center lg:text-[30px] text-[18px]">Our Stories</h2>
            <p class="font-sans lg:text-[18px] text-[12px] text-center mt-[20px]">Twenty Four Seven Consultancy Premier
                League Twenty
                Four Seven
                <br class="hidden lg:block">
                Consultancy
                Premier League Twenty Four Seven Consultancy Premier League
            </p>

            <div class="story_section  lg:py-[30px] py-[10px]">
                <div class="mx-[15px]">
                    <div class="w-full sm:h-full h-[373px]">
                        <img src="{{ asset('storage/about/ourstory1.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <p
                        class="absolute bottom-14  text-[#F6C200] text-lg font-semibold px-[20px] 2xl:text-[18px] lg:text-[13px] sm:text-[12px] text-[14px] font-montu">
                        Chief Operating Officer: Danish Ather
                    </p>
                    <div class="flex px-[20px] gap-[52px] bottom-7 absolute">
                        <div class="flex gap-2 items-center">
                            <span class="w-[8px] h-[8px] bg-[#F6C200] inline-block"></span>
                            <span class="font-bold text-[#F6C200] text-[16px] font-montu">Feature</span>
                        </div>
                        <div>
                            <p class="text-[16px] font-montu font-bold text-white">12 Jan 2025</p>
                        </div>
                    </div>
                </div>

                <div class="mx-[15px]">
                    <div class="w-full sm:h-full h-[373px]">
                        <img src="{{ asset('storage/about/ourstory1.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <p
                        class="absolute bottom-14  text-[#F6C200] text-lg font-semibold px-[20px] 2xl:text-[18px] lg:text-[13px] sm:text-[12px] text-[14px] font-montu">
                        Chief Operating Officer: Danish Ather
                    </p>
                    <div class="flex px-[20px] gap-[52px] bottom-7 absolute">
                        <div class="flex gap-2 items-center">
                            <span class="w-[8px] h-[8px] bg-[#F6C200] inline-block"></span>
                            <span class="font-bold text-[#F6C200] text-[16px] font-montu">Feature</span>
                        </div>
                        <div>
                            <p class="text-[16px] font-montu font-bold text-white">12 Jan 2025</p>
                        </div>
                    </div>
                </div>
                <div class="mx-[15px]">
                    <div class="w-full sm:h-full h-[373px]">
                        <img src="{{ asset('storage/about/ourstory1.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <p
                        class="absolute bottom-14  text-[#F6C200] text-lg font-semibold px-[20px] 2xl:text-[18px] lg:text-[13px] sm:text-[12px] text-[14px] font-montu">
                        Chief Operating Officer: Danish Ather
                    </p>
                    <div class="flex px-[20px] gap-[52px] bottom-7 absolute">
                        <div class="flex gap-2 items-center">
                            <span class="w-[8px] h-[8px] bg-[#F6C200] inline-block"></span>
                            <span class="font-bold text-[#F6C200] text-[16px] font-montu">Feature</span>
                        </div>
                        <div>
                            <p class="text-[16px] font-montu font-bold text-white">12 Jan 2025</p>
                        </div>
                    </div>
                </div>
                <div class="mx-[15px]">
                    <div class="w-full sm:h-full h-[373px]">
                        <img src="{{ asset('storage/about/ourstory1.png') }}" alt=""
                            class="w-full h-full object-cover">
                    </div>
                    <p
                        class="absolute bottom-14  text-[#F6C200] text-lg font-semibold px-[20px] 2xl:text-[18px] lg:text-[13px] sm:text-[12px] text-[14px] font-montu">
                        Chief Operating Officer: Danish Ather
                    </p>
                    <div class="flex px-[20px] gap-[52px] bottom-7 absolute">
                        <div class="flex gap-2 items-center">
                            <span class="w-[8px] h-[8px] bg-[#F6C200] inline-block"></span>
                            <span class="font-bold text-[#F6C200] text-[16px] font-montu">Feature</span>
                        </div>
                        <div>
                            <p class="text-[16px] font-montu font-bold text-white">12 Jan 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tfsc owners --}}
    <div class="bg-[#094AB7]">
        <div class="2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px] lg:mt-[100px] mt-[30px] pt-[30px] lg:pt-[60px]">
            <h2 class="font-montu lg:text-[30px] text-[18px] font-bold text-white text-center lg:text-left">Teams
                Owners
            </h2>

            <div class="grid grid-cols-6 lg:grid-cols-7 pt-[30px] pb-[80px]">
                <div class="lg:col-span-1">
                </div>
                <div class="col-span-6">
                    <div class="owner_section grid grid-cols-4">
                        <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                            </div>
                            <div
                                class="absolute top-4/5 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
                                <h2 class="font-montu text-[22px] font-bold">Jamshed Arbab Khan</h2>
                                <p class="text-[14px] font-bold font-sans">Timber Wolves</p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                            </div>
                            <div
                                class="absolute top-4/5 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
                                <h2 class="font-montu text-[22px] font-bold">Jamshed Arbab Khan</h2>
                                <p class="text-[14px] font-bold font-sans">Timber Wolves</p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                            </div>
                            <div
                                class="absolute top-4/5 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
                                <h2 class="font-montu text-[22px] font-bold">Jamshed Arbab Khan</h2>
                                <p class="text-[14px] font-bold font-sans">Timber Wolves</p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                            </div>
                            <div
                                class="absolute top-4/5 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
                                <h2 class="font-montu text-[22px] font-bold">Jamshed Arbab Khan</h2>
                                <p class="text-[14px] font-bold font-sans">Timber Wolves</p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-t from-[#221D1D] to-[#003FA9] relative owner_section_box">
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/about/owner1.png') }}" alt="">
                            </div>
                            <div
                                class="absolute top-4/5 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
                                <h2 class="font-montu text-[22px] font-bold">Jamshed Arbab Khan</h2>
                                <p class="text-[14px] font-bold font-sans">Timber Wolves</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TFSC Premier League Sponsers  --}}
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
        $('.management_section').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
        $('.story_section').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
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
        $('.owner_section').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            arrows: false,
            dots: false,
            margin: 10,
            // autoplay: true, // Enables auto-scroll
            autoplaySpeed: 2000, // Speed of auto-scroll
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
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
    </script>
</x-app-layout>
