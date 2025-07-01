<x-app-layout>
    @section('title', 'Players')

    @section('content')
        {{-- header --}}
        <div class="md:h-[300px] h-[100px] relative flex justify-center items-center overflow-hidden ">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montu font-bold relative">
                Players
            </h2>
        </div>


        <div class="w-full my-24">
            <div class="   flex justify-center items-center font-montu text-white gap-3">
                <span class="bg-[#00AEEF]  px-3 py-1">Batter</span>
                <span class="bg-[#0D45A3]  px-3 py-1">Bowller</span>
                <span class="bg-[#ECBA01]  px-3 py-1">All Rounder</span>
            </div>

        </div>
        {{-- batter section without slick --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px] lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
            <h2 class="text-[30px] font-bold font-montu text-[#09154B] pb-[30px]">
                Enrolled as a Batter
            </h2>
            <div class="hidden lg:grid grid-cols-4 gap-6">
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
                    <div class="border-2 border-[#F4F4F4]">
                        <div>
                            <div class="relative flex justify-center">
                                <div class="h-[246px]">
                                    <img src="{{ asset('storage/about/' . $player['image']) }}" alt="{{ $player['name'] }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="absolute bottom-0 text-center bg-[#094AB7] px-[50px] py-[7px]"
                                    style="transform: skewX(-20deg);">
                                    <p class="text-[13px] font-sans font-normal text-white"
                                        style="display: inline-block; transform: skewX(20deg);">
                                        {{ $player['type'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-[18px] font-sans font-bold text-[#094AB7] pt-[10px]">{{ $player['name'] }}</p>
                            <p class="text-[30px] font-sans font-bold pt-[10px]">{{ $player['score'] }}</p>
                            <p class="text-[14px] font-sans font-normal pt-[10px] text-[#828282]">{{ $player['stat'] }}</p>
                        </div>
                        <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[16px] font-sans font-bold">Played With {{ $player['team'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- batter section with slick for mbile view --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px] lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
            <h2
                class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montu text-[#09154B] lg:pb-[30px] pb-[15px]">
                Enrolled as an Batter
            </h2>
            <div class="lg:hidden">
                <div class="batters_section">
                    @foreach ([
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Batter',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
            ],
            // Add more players following the same structure
        ] as $player)
                        <div class="border-2 border-[#F4F4F4] mx-[3px]">
                            <div class="bg-[#F6C200] flex justify-center">
                                <div class="pt-[40px]">
                                    <div class="relative flex justify-center">
                                        <!-- Desktop Image -->
                                        <div class="h-[246px] hidden md:block">
                                            <img src="{{ asset('storage/players/' . $player['desktop_image']) }}"
                                                alt="{{ $player['name'] }}" class="md:w-full w-[108px] h-full object-cover">
                                        </div>

                                        <!-- Mobile Image -->
                                        <div class="w-[108px] md:hidden">
                                            <img src="{{ asset('storage/players/' . $player['mobile_image']) }}"
                                                alt="{{ $player['name'] }}" class="w-full h-full object-cover">
                                        </div>

                                        <!-- Player Type Badge -->
                                        <div class="absolute bottom-0 text-center bg-[#094AB7] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                            style="transform: skewX(-20deg);">
                                            <p class="md:text-[13px] text-[10px] font-sans font-normal text-white"
                                                style="display: inline-block; transform: skewX(20deg);">
                                                {{ $player['type'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Player Info -->
                            <div class="text-center">
                                <p class="md:text-[18px] text-[14px] font-sans font-bold text-[#094AB7] pt-[10px]">
                                    {{ $player['name'] }}
                                </p>
                                <p class="md:text-[30px] text-[18px] font-sans font-bold md:pt-[10px] pt-[6px]">
                                    {{ $player['score'] }}
                                </p>
                                <p
                                    class="md:text-[14px] text-[10px] font-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                                    {{ $player['stat'] }}
                                </p>
                            </div>

                            <!-- Team Info -->
                            <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="md:text-[16px] text-[10px] font-sans font-bold">
                                    Played With {{ $player['team'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

        {{-- bowler section without slick --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px]  lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
            <h2 class="text-[30px] font-bold font-montu text-[#09154B] pb-[30px]">
                Enrolled as a Bowler
            </h2>
            <div class="hidden lg:grid grid-cols-4 gap-6">
                @foreach ([
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler', // Changed from Batter to Bowler to match your example
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7', // Added background color
                'badge_color' => '#F6C200', // Added badge color
            ],

            // Add more players here following the same format
        ] as $player)
                    <div class="border-2 border-[#F4F4F4]">
                        <div class="bg-[{{ $player['bg_color'] }}] flex justify-center">
                            <div>
                                <div class="relative flex justify-center">
                                    <div class="h-[246px]">
                                        <img src="{{ asset('storage/about/' . $player['image']) }}"
                                            alt="{{ $player['name'] }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute bottom-0 text-center bg-[{{ $player['badge_color'] }}] px-[50px] py-[7px]"
                                        style="transform: skewX(-20deg);">
                                        <p class="text-[13px] font-sans font-normal text-white"
                                            style="display: inline-block; transform: skewX(20deg);">
                                            {{ $player['type'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-[18px] font-sans font-bold text-[#094AB7] pt-[10px]">{{ $player['name'] }}</p>
                            <p class="text-[30px] font-sans font-bold pt-[10px]">{{ $player['score'] }}</p>
                            <p class="text-[14px] font-sans font-normal pt-[10px] text-[#828282]">{{ $player['stat'] }}</p>
                        </div>
                        <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[16px] font-sans font-bold">Played With {{ $player['team'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- bowler section with slick for mbile view --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px] lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
            <h2
                class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montu text-[#09154B] lg:pb-[30px] pb-[15px]">
                Enrolled as an Bowler
            </h2>
            <div class="lg:hidden">
                <div class="bowler_section">

                    @foreach ([
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Bowler',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#094AB7',
                'badge_color' => '#F6C200',
            ],
            // Add more players here
        ] as $player)
                        <div class="border-2 border-[#F4F4F4] mx-[3px]">
                            <div class="bg-[{{ $player['bg_color'] }}] flex justify-center">
                                <div class="pt-[40px]">
                                    <div class="relative flex justify-center">
                                        <!-- Desktop Image -->
                                        <div class="h-[246px] hidden md:block">
                                            <img src="{{ asset('storage/players/' . $player['desktop_image']) }}"
                                                alt="{{ $player['name'] }}"
                                                class="md:w-full w-[108px] h-full object-cover">
                                        </div>

                                        <!-- Mobile Image -->
                                        <div class="w-[108px] md:hidden">
                                            <img src="{{ asset('storage/players/' . $player['mobile_image']) }}"
                                                alt="{{ $player['name'] }}" class="w-full h-full object-cover">
                                        </div>

                                        <!-- Player Type Badge -->
                                        <div class="absolute bottom-0 text-center bg-[{{ $player['badge_color'] }}] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                            style="transform: skewX(-20deg);">
                                            <p class="md:text-[13px] text-[10px] font-sans font-normal text-white"
                                                style="display: inline-block; transform: skewX(20deg);">
                                                {{ $player['type'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Player Info -->
                            <div class="text-center">
                                <p class="md:text-[18px] text-[14px] font-sans font-bold text-[#094AB7] pt-[10px]">
                                    {{ $player['name'] }}
                                </p>
                                <p class="md:text-[30px] text-[18px] font-sans font-bold md:pt-[10px] pt-[6px]">
                                    {{ $player['score'] }}
                                </p>
                                <p
                                    class="md:text-[14px] text-[10px] font-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                                    {{ $player['stat'] }}
                                </p>
                            </div>

                            <!-- Team Info -->
                            <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="md:text-[16px] text-[10px] font-sans font-bold">
                                    Played With {{ $player['team'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- all rounder section  without slick --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[16px] lg:w-[88%] w-[94%] mt-[100px] mb-[100px] hidden lg:block">
            <h2 class="text-[30px] font-bold font-montu text-[#09154B] pb-[30px]">
                Enrolled as an Allrounder
            </h2>
            <div class="hidden lg:grid lg:grid-cols-4 gap-6">
                @foreach ([
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'image' => 'owner11.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            // Add more players here
        ] as $player)
                    <div class="border-2 border-[#F4F4F4]">
                        <div class="bg-[{{ $player['bg_color'] }}] flex justify-center">
                            <div>
                                <div class="relative flex justify-center">
                                    <!-- Player Image -->
                                    <div class="h-[246px]">
                                        <img src="{{ asset('storage/about/' . $player['image']) }}"
                                            alt="{{ $player['name'] }}" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Player Type Badge -->
                                    <div class="absolute bottom-0 text-center bg-[{{ $player['badge_color'] }}] lg:px-[40px] xl:px-[50px] py-[7px]"
                                        style="transform: skewX(-20deg);">
                                        <p class="text-[13px] font-sans font-normal text-white"
                                            style="display: inline-block; transform: skewX(20deg);">
                                            {{ $player['type'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Player Info -->
                        <div class="text-center">
                            <p class="text-[18px] font-sans font-bold text-[#094AB7] pt-[10px]">
                                {{ $player['name'] }}
                            </p>
                            <p class="text-[30px] font-sans font-bold pt-[10px]">
                                {{ $player['score'] }}
                            </p>
                            <p class="text-[14px] font-sans font-normal pt-[10px] text-[#828282]">
                                {{ $player['stat'] }}
                            </p>
                        </div>

                        <!-- Team Info -->
                        <div class="py-[10px] border-t-2 border-[#F4F4F4] text-center">
                            <p class="text-[16px] font-sans font-bold">
                                Played With {{ $player['team'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- all rounder section with slick for mbile view --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[100px] lg:px-[80px] px-[35px] lg:w-[88%] w-[94%] lg:my-[100px] my-[30px] lg:hidden">
            <h2
                class="xl:text-[30px] lg:text-[25px] text-[18px] font-bold font-montu text-[#09154B] lg:pb-[30px] pb-[15px]">
                Enrolled as an Allrounder
            </h2>
            <div class="lg:hidden">
                <div class="allround_section">

                    @foreach ([
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            [
                'desktop_image' => '1.png',
                'mobile_image' => '2.png',
                'name' => 'Jamshaid Arbab',
                'type' => 'Allrounder',
                'score' => '1230',
                'stat' => 'runs',
                'team' => 'TW',
                'bg_color' => '#F6C200',
                'badge_color' => '#094AB7',
            ],
            // Add more players here
        ] as $player)
                        <div class="border-2 border-[#F4F4F4] mx-[3px]">
                            <div class="bg-[{{ $player['bg_color'] }}] flex justify-center">
                                <div class="pt-[40px]">
                                    <div class="relative flex justify-center">
                                        <!-- Desktop Image -->
                                        <div class="h-[246px] hidden md:block">
                                            <img src="{{ asset('storage/players/' . $player['desktop_image']) }}"
                                                alt="{{ $player['name'] }}"
                                                class="md:w-full w-[108px] h-full object-cover">
                                        </div>

                                        <!-- Mobile Image -->
                                        <div class="w-[108px] md:hidden">
                                            <img src="{{ asset('storage/players/' . $player['mobile_image']) }}"
                                                alt="{{ $player['name'] }}" class="w-full h-full object-cover">
                                        </div>

                                        <!-- Player Type Badge -->
                                        <div class="absolute bottom-0 text-center bg-[{{ $player['badge_color'] }}] md:px-[50px] px-[30px] md:py-[7px] py-[2px]"
                                            style="transform: skewX(-20deg);">
                                            <p class="md:text-[13px] text-[10px] font-sans font-normal text-white"
                                                style="display: inline-block; transform: skewX(20deg);">
                                                {{ $player['type'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Player Info -->
                            <div class="text-center">
                                <p class="md:text-[18px] text-[14px] font-sans font-bold text-[#094AB7] pt-[10px]">
                                    {{ $player['name'] }}
                                </p>
                                <p class="md:text-[30px] text-[18px] font-sans font-bold md:pt-[10px] pt-[6px]">
                                    {{ $player['score'] }}
                                </p>
                                <p
                                    class="md:text-[14px] text-[10px] font-sans font-normal md:pt-[10px] pt-[6px] text-[#828282]">
                                    {{ $player['stat'] }}
                                </p>
                            </div>

                            <!-- Team Info -->
                            <div class="md:py-[10px] py-[6px] border-t-2 border-[#F4F4F4] text-center">
                                <p class="md:text-[16px] text-[10px] font-sans font-bold">
                                    Played With {{ $player['team'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- sponsor section --}}
        <div class="relative">
            <div class="lg:my-[100px] my-[30px] ">
                <div>
                    <img src="{{ asset('storage/about/sponsor.png') }}" alt=""
                        class="lg:h-[644px] md:h-[450px] sm:h-[430px md:hidden block h-[400px] w-full object-cover">
                    <img src="{{ asset('storage/about/sponsor1.png') }}" alt=""
                        class="lg:h-[644px] md:h-[450px] sm:h-[430px] h-[400px] md:block hidden   w-full object-cover">

                </div>
                <div class="absolute inset-0 bg-white md:bg-[#1653BB]  opacity-80"></div>
                <div class="grid grid-cols-1 xl:grid-cols-3 lg:py-[60px] py-[30px] absolute inset-0">
                    <div class="hidden xl:block"></div>
                    <div>
                        <h2
                            class="font-montu text-[#094AB7] md:text-white font-semibold text-center text-[22px] lg:text-[26px] xl:text-[30px]">
                            TFSC
                            Premier League
                            Sponsers
                        </h2>
                        <p
                            class="font-sans lg:text-[18px] text-black md:text-white text-[12px] text-center mt-[20px] leading-[24px] text-wrap xl:px-0 px-5">
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
                                @foreach ([['src' => '2.png', 'alt' => 'Sports network'], ['src' => '3.png', 'alt' => 'BKT'], ['src' => '4.png', 'alt' => 'kayo']] as $logo)
                                    <div class="lg:py-[46px] py-[20px] flex justify-center items-center">
                                        <img class="md:w-[99px] md:h-[54px] w-[54px] h-[29px] transition filter grayscale hover:grayscale-0"
                                            src="{{ asset('storage/icons/' . $logo['src']) }}"
                                            alt="{{ $logo['alt'] }}">
                                    </div>
                                @endforeach

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
