<x-app-layout>
    @section('title', 'Players')

    @section('content')
        {{-- header --}}
        <div class="relative">
            <div class="h-[100px] md:h-[300px] xl:h-[450px]">
                <div class="w-full h-full flex justify-center items-center">
                    <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                        class="h-full w-full  absolute bottom-0 left-0 object-cover ">
                    <h2 class="text-white text-[18px] xl:text-[50px] md:text-[30px] font-montu font-bold relative">
                        Players
                    </h2>
                </div>
            </div>
        </div>


        <div class="w-full mt-[70px] hidden md:block">
            <div class="flex justify-center items-center font-sasn text-white gap-[12px]">
                <span class="bg-[#00AEEF] text-[16px] font-bold px-[46px] py-[10px]">Batter</span>
                <span class="bg-[#0D45A3] text-[16px] font-bold px-[44px] py-[10px]">Bowler</span>
                <span class="bg-[#ECBA01] text-[16px] font-bold px-[24px] py-[10px]">All-Rounder</span>
            </div>

        </div>
        {{-- batter section without slick --}}
        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px]  font-bold font-montu text-[#000000]">
                Enrolled as a Batter
            </h2>
            <div
    class="mt-[30px] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-x-[10px] md:gap-x-[20px] md:gap-y-[31px] overflow-hidden">
                @foreach ([
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Batter', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            // Add more players here following the same format
        ] as $player)
                    <div class="border-2 border-[#F4F4F4] p-0 m-0">
                        <div>
                            <div class="relative flex justify-center">
                                <img src="{{ asset('storage/about/' . $player['image']) }}" alt="{{ $player['name'] }}"
                                    class="w-full h-full object-cover relative">
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
                            <p
                                class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                {{ $player['stat'] }}</p>
                        </div>
                        <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                {{ $player['team'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>





        {{-- bowler section  --}}
        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px]  font-bold font-montu text-[#000000]">
                Enrolled as a Bowler
            </h2>
            <div
                class="mt-[30px] grid grid-cols-2 md:grid-col-3 lg:grid-cols-3 xl:grid-cols-4 gap-x-[10px] md:gap-x-[20px] md:gap-y-[31px]">
                @foreach ([
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'Bowler', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            // Add more players here following the same format
        ] as $player)
                    <div class="border-2 border-[#F4F4F4] p-0 m-0">
                        <div>
                            <div class="relative flex justify-center">
                                <img src="{{ asset('storage/about/' . $player['image']) }}" alt="{{ $player['name'] }}"
                                    class="w-full h-full object-cover relative">
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
                            <p
                                class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                {{ $player['stat'] }}</p>
                        </div>
                        <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                {{ $player['team'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <div class="mt-[30px] md:mt-[70px] col-md-8 mx-auto">
            <h2 class="text-[18px] md:text-[22px] xl:text-[30px]  font-bold font-montu text-[#000000]">
                Enrolled as an All-Rounder
            </h2>
            <div
                class="mt-[30px] grid grid-cols-2 md:grid-col-3 lg:grid-cols-3 xl:grid-cols-4 gap-x-[10px] md:gap-x-[20px] md:gap-y-[31px]">
                @foreach ([
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            ['image' => 'owner11.png', 'name' => 'Jamshaid Arbab', 'type' => 'All-Rounder', 'score' => '1230', 'stat' => 'runs', 'team' => 'TW'],
            // Add more players here following the same format
        ] as $player)
                    <div class="border-2 border-[#F4F4F4] p-0 m-0">
                        <div>
                            <div class="relative flex justify-center">
                                <img src="{{ asset('storage/about/' . $player['image']) }}" alt="{{ $player['name'] }}"
                                    class="w-full h-full object-cover relative">
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
                            <p
                                class="mt-[6px] md:mt-[10px] text-[10px] md:text-[14px] font-sans font-medium text-[#828282]">
                                {{ $player['stat'] }}</p>
                        </div>
                        <div class="py-[8px] md:py-[10px] mt:[6px] md:mt-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[12px] md:text-[16px] font-sans font-bold text-[#000000]">Played With
                                {{ $player['team'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>





        {{-- sponsor section --}}
        <div class="relative">
            <div class="md:my-[100px] my-[30px] h-[357px] md:h-[444px] lg:h-[544px] xl:h-[644px]">
                <div class="absolute inset-0 w-full h-full">
                    <img src="{{ asset('storage/about/sponsor1.png') }}" alt=""
                        class="w-full h-full hidden md:block  object-cover">
                    <img src="{{ asset('storage/about/sponsor.png') }}" alt=""
                        class="w-full h-full block md:hidden  object-cover">
                </div>
                <div class="absolute inset-0 bg-[#FFFFFF]/90 md:bg-[#1653BB]/90"></div>
                <div class="absolute inset-0">
                    <div>
                        <h2
                            class="text-[18px] lg:text-[30px] pt-[31px] md:pt-[60px] lg:pt-[90px] font-montu md:text-[#FFFFFF] text-[#1653BB] font-semibold text-center ">
                            TFSC Premier League Sponsers
                        </h2>
                        <p
                            class="max-w-[650px] pt-[10px] md:pt-[20px] lg:pt-[30px] text-[12px] md:text-[18px] font-sans md:text-white text-black text-center mx-auto">
                            Twenty
                            Four Seven
                            Consultancy
                            Premier League
                            Twenty
                            Four Seven
                            Consultancy
                            Premier League Twenty Four Seven Consultancy Premier League
                        </p>
                        <div class="absolute left-0 right-0 pt-[30px] md:pt-[40px] sponsor">
                            <div class="border-b border-b-[#808080]"></div>
                            <div
                                class="pt-[20px] md:pt-[25px] lg:pt-[30px] flex flex-row justify-center items-center px-[20px] md:px-0 gap-[54px] md:gap-[70px] lg:gap-[100px]">
                                @foreach ([['src' => '1.png', 'alt' => 'Sports network'], ['src' => '2.png', 'alt' => 'Sports network'], ['src' => '3.png', 'alt' => 'BKT'], ['src' => '4.png', 'alt' => 'kayo']] as $logo)
                                    <div class="">
                                        <img class=" transition filter object-cover w-[48px] md:w-[68px] xl:w-[88px]"
                                            src="{{ asset('storage/icons/' . $logo['src']) }}" alt="{{ $logo['alt'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="border-b pt-[20px] md:pt-[25px] xl:pt-[31px] border-b-[#808080]"></div>
                            <div
                                class="pt-[20px] md:pt-[25px] lg:pt-[39px] flex flex-row justify-center items-center gap-x-[54px] md:gap-x-[70px] lg:gap-x-[100px]">
                                <img class="md:w-[99px] md:h-[54px] w-[80px]"
                                    src="{{ asset('storage/icons/5.png') }}" alt="Foxtel" class="object-cover">
                                <img class="md:w-[99px] md:h-[54px] w-[80px]"
                                    src="{{ asset('storage/icons/6.png') }}" alt="weber" class="object-cover">
                            </div>
                            <div class="border-b pt-[20px] md:pt-[35px] xl:pt-[49px] border-b-[#808080]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            $('.events-slider').on('edge', function(event, slick, direction) {
                //Edge: last slide of the slider when infinity=false
                console.log('edge was hit');
            });
            $('.batters_section').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                margin: 10,

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
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.bowler_section').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                margin: 10,

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
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.allround_section').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                margin: 10,

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
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
    </x-app-layout>
