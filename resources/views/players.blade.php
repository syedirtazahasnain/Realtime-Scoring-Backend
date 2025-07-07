<x-app-layout>
    @section('title', 'Players')
        {{-- header --}}
        <div class="relative">
            <div class="h-[40vh]">
                <div class="w-full h-full flex justify-center items-center">
                    <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                        class="h-full w-full absolute bottom-0 left-0 object-cover">
                    <h2 class="text-white text-[18px] xl:text-[50px] md:text-[30px] font-montu font-bold relative">
                        Players
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full mt-[70px] hidden md:block">
            <div class="flex justify-center items-center font-sasn text-white gap-[12px]">
                <span class="bg-[#00AEEF] text-[16px] font-bold px-[46px] py-[10px]">Batsman</span>
                <span class="bg-[#0D45A3] text-[16px] font-bold px-[44px] py-[10px]">Bowler</span>
                <span class="bg-[#ECBA01] text-[16px] font-bold px-[24px] py-[10px]">All-Rounder</span>
            </div>
        </div>

        {{-- Add Slick slider CSS and JS --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <style>
            .slick-slide {
                padding: 0 10px;
            }
            .slick-list {
                margin: 0 -10px;
            }
            .slick-prev:before, .slick-next:before {
                color: #094AB7;
                font-size: 24px;
            }
            .slick-prev {
                left: -30px;
            }
            .slick-next {
                right: -30px;
            }
            @media (max-width: 640px) {
                .slick-prev {
                    left: -15px;
                }
                .slick-next {
                    right: -15px;
                }
            }
        </style>

        {{-- batter section --}}
        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto px-4">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px] font-bold font-montu text-[#000000]">
                Enrolled as a Batsman
            </h2>
            <div class="mt-[30px] batter-slider">
                @foreach ($batters as $player)
                    <div class="px-2">
                        <div class="border-2 border-[#F4F4F4] p-0 m-0">
                            <div>
                                <div class="relative flex justify-center">
                                   <img src="{{ asset(!empty($player['image']) ? $player['image'] : 'images/home/avatar_cricket.png') }}" alt="{{ $player['name'] ?? 'Player' }}" class="w-full">

                                    <div class="absolute bottom-0 text-center bg-[#094AB7] px-[34px] md:px-[55px] py-[4px] md:py-[7px]"
                                        style="transform: skewX(-20deg);">
                                        <p class="text-[10px] md:text-[13px] font-sans text-[#FFFFFF]"
                                            style="transform: skewX(20deg);">
                                            {{ $player['type'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[14px] md:text-[18px] font-sans font-bold text-[#094AB7] mt-[11px] md:mt-[10px]">
                                    {{ $player['name'] }}</p>
                                <p class="text-[18px] md:text-[30px] mt:[6px] md:mt-[10px] font-sans font-bold text-[#000000]">
                                    {{ $player['score'] }}</p>
                                <p class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                    {{ $player['stat'] }}</p>
                            </div>
                            <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                    {{ $player['team'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- bowler section --}}
        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto px-4">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px] font-bold font-montu text-[#000000]">
                Enrolled as a Bowler
            </h2>
            <div class="mt-[30px] bowler-slider">
                @foreach ($bowlers as $player)
                    <div class="px-2">
                        <div class="border-2 border-[#F4F4F4] p-0 m-0">
                            <div>
                                <div class="relative flex justify-center">
                                    <img src="{{ asset(!empty($player['image']) ? $player['image'] : 'images/home/avatar_cricket.png') }}" alt="{{ $player['name'] ?? 'Player' }}" class="w-full">

                                    <div class="absolute bottom-0 text-center bg-[#F6C200] px-[33px] md:px-[55px] py-[4px] md:py-[7px]"
                                        style="transform: skewX(-20deg);">
                                        <p class="text-[10px] md:text-[13px] font-sans text-[#094AB7]"
                                            style="transform: skewX(20deg);">
                                            {{ $player['type'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[14px] md:text-[18px] font-sans font-bold text-[#094AB7] mt-[11px] md:mt-[10px]">
                                    {{ $player['name'] }}</p>
                                <p class="text-[18px] md:text-[30px] mt:[6px] md:mt-[10px] font-sans font-bold text-[#000000]">
                                    {{ $player['score'] }}</p>
                                <p class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                    {{ $player['stat'] }}</p>
                            </div>
                            <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                    {{ $player['team'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- all-rounder section --}}
        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto px-4">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px] font-bold font-montu text-[#000000]">
                Enrolled as an All-Rounder
            </h2>
            <div class="mt-[30px] allrounder-slider">
                @foreach ($allRounders as $player)
                    <div class="px-2">
                        <div class="border-2 border-[#F4F4F4] p-0 m-0">
                            <div>
                                <div class="relative flex justify-center">
                                    <img src="{{ asset(!empty($player['image']) ? $player['image'] : 'images/home/avatar_cricket.png') }}" alt="{{ $player['name'] ?? 'Player' }}" class="w-full">

                                    <div class="absolute bottom-0 text-center bg-[#094AB7] px-[29px] md:px-[40px] py-[4px] md:py-[7px]"
                                        style="transform: skewX(-20deg);">
                                        <p class="text-[10px] md:text-[13px] font-sans text-[#FFFFFF]"
                                            style="transform: skewX(20deg);">
                                            {{ $player['type'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[14px] md:text-[18px] font-sans font-bold text-[#094AB7] mt-[11px] md:mt-[10px]">
                                    {{ $player['name'] }}</p>
                                <p class="text-[18px] md:text-[30px] mt:[6px] md:mt-[10px] font-sans font-bold text-[#000000]">
                                    {{ $player['score'] }}</p>
                                <p class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                    {{ $player['stat'] }}</p>
                            </div>
                            <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                    {{ $player['team'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Sponsors section --}}
        <div class="relative overflow-hidden my-[50px] lg:my-[70px] xl:my-[100px]">
            <div class="absolute z-20 top-0 left-0 h-full w-full bg-[#1653BB] opacity-90"></div>
            <img src="{{ asset('storage/about/sponsor1.png') }}" alt=""
                class="absolute z-10 top-0 left-0 h-full w-full object-cover">
            <div class="py-[40px] lg:py-[70px] xl:py-[90px]">
                <div class="relative z-30">
                    <div>
                        <div class="text-center px-[20px]">
                            <p class="leading-tight font-montu text-white font-semibold text-center text-[22px] lg:text-[26px] xl:text-[30px]">
                                TFSC Premier League Sponsors
                            </p>
                            <p class="font-sans max-w-[650px] mx-auto text-[16px] xl:text-[18px] text-white pt-[30px]">
                                Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League
                                Twenty Four Seven Consultancy Premier League
                            </p>
                        </div>
                        <div class="border-b border-b-[#808080] mt-[40px] mb-[30px]"></div>
                        <div class="sponsor">
                            <div class="mx-auto flex justify-center flex-wrap gap-[20px] md:gap-[40px] lg:gap-[60px] xl:gap-[80px] 2xl:gap-[100px]">
                                @foreach (array_slice($sponsors, 0, 4) as $logo)
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('storage/icons/' . $logo['src']) }}" alt="{{ $logo['alt'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="border-b border-b-[#808080] mt-[30px] mb-[40px]"></div>
                            <div class="flex flex-wrap justify-center gap-[20px] md:gap-[40px] lg:gap-[60px] xl:gap-[80px] 2xl:gap-[100px] sponsor">
                                @foreach (array_slice($sponsors, 4) as $logo)
                                    <div class="flex justify-center">
                                        <img src="{{ asset('storage/icons/' . $logo['src']) }}" alt="{{ $logo['alt'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="border-b border-b-[#808080] mt-[40px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.batter-slider').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
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
                    ]
                });

                $('.bowler-slider').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
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
                    ]
                });

                $('.allrounder-slider').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
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
                    ]
                });
            });
        </script>
</x-app-layout>
