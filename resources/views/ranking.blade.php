<x-app-layout>
    @section('title', 'Ranking')

    @section('content')
        <!-- Header Section -->
        <div class="relative ">
            <div class="md:h-[300px] h-[100px]  flex justify-center items-center  mb-[50px] overflow-hidden">
                <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                    class="h-[300px] absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
                <h2
                    class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montu font-bold relative">
                    Rankings
                </h2>
            </div>
        </div>

        {{-- ist section --}}

        <div class="relative">
            <div
                class="w-[94%] lg:w-[88%] xl:w-[84%] mx-auto px-[16px] md:px-[20px] min-[1000px]:px-[90px] xl:px-[120px] 2xl:px-[180px] h-[484px]">

                <!-- Header -->
                <div class="bg-[#094AB7] mb-5">
                    <h1 class="text-white font-bold font-montserrat px-5 py-3.5 text-[15px] sm:text-[20px] md:text-[24px]">
                        Teams Ranking
                    </h1>
                </div>

                <!-- Filter Buttons -->
                <div class="mb-5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            @foreach (['Players', 'Men'] as $label)
                                <button
                                    class="flex items-center gap-2 px-2 sm:px-3 md:px-5 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat font-bold text-[12px] sm:text-[14px] md:text-[16px]">
                                    {{ $label }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                                        fill="none">
                                        <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            @endforeach
                        </div>
                        <button
                            class="flex items-center gap-2 px-2 sm:px-3 md:px-5 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat font-bold text-[12px] sm:text-[14px] md:text-[16px]">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                                fill="none">
                                <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#094AB7"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="relative bg-[#094AB7] text-white font-sans font-bold">
                    <table class="w-full border-collapse">
                        <thead
                            class="border-b border-[#0EA825] text-left text-[12px] sm:text-[14px] lg:text-[16px] xl:text-[18px]">
                            <tr>
                                <th class="text-center py-4 w-[96.52px]">Pos</th>
                                <th class="w-[56px]"></th>
                                <th class="w-[301px]">Teams</th>
                                <th class="pl-10 w-[278px]">M</th>
                                <th class="w-[117px]">W</th>
                                <th class="text-center w-[190px]">L</th>
                                <th class="text-center w-[205px]">Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([1, 2, 3, 4] as $pos)
                                <tr
                                    class="border-b border-[#32457E] hover:bg-[#F6C200] text-[11px] sm:text-[13px] lg:text-[14px] xl:text-[16px] font-semibold">
                                    <td class="text-center">{{ $pos }}.</td>
                                    <td><img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2" />
                                    </td>
                                    <td class="flex items-center gap-3 py-3 font-medium">
                                        <img src="{{ asset('storage/ranking/s.png') }}" alt="" />
                                        Strikers
                                    </td>
                                    <td class="pl-10">9</td>
                                    <td class="pl-1">9</td>
                                    <td class="text-center">9</td>
                                    <td class="text-center">9</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="7"
                                    class="py-5 text-center text-[#14CD5B] text-[11px] sm:text-[13px] lg:text-[14px] font-montserrat font-medium">
                                    . Group A - Ranking
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        <div class="flex items-center justify-center width-full">
            <img src="./storage/ranking/break.svg" alt="break" class="mt-[38px] mb-[51px]">
        </div>

        {{-- 2nd section --}}
        <div
            class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%] h-[484px] mb-[85px]">
            <div class="  bg-[#094AB7] mb-5">
                <h1 class="md:text-[24px] sm:text-[20px] text-[15px] font-bold font-montserrat px-5 py-3.5 text-white ">
                    Players Ranking</h1>
            </div>
            <div class="mb-5 ">
                <div class="flex items-center justify-between">
                    <div class="flex justify-center items-center gap-5">
                        <button
                            class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold">
                            Players
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                                fill="none">
                                <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button
                            class="flex items-center md:gap-2 min-[365px]:gap-1 md:px-5 sm:px-3 min-[365px]:px-2 py-2 border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                            Men
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7"
                                fill="none">
                                <path d="M1 1.8252L4.5 5.797L8 1.8252" stroke="#094AB7" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <button
                        class="flex items-center gap-2 md:px-5 sm:px-3 min-[365px]:px-2 py-2  border-2 border-[#094AB7] text-[#094AB7] font-montserrat md:text-[16px] sm:text-[14px] min-[365px]:text-[12px] font-bold ">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                            fill="none">
                            <path d="M0.999999 6.25L5.5 10M5.5 10L10 6.25M5.5 10L5.5 1" stroke="#094AB7" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="relative bg-[#094AB7]"></div>
            {{-- 2nd table --}}
            <div class="relative">
                <table class="w-full border-collapse bg-[#094AB7] text-white font-sans font-bold">
                    <thead
                        class="border-b border-[#0EA825] text-left text-[12px] sm:text-[14px] lg:text-[16px] xl:text-[18px]">
                        <tr>
                            <th class="text-center py-4 w-[96.52px]">Pos</th>
                            <th class="w-[56px]"></th>
                            <th class="w-[301px]">Teams</th>
                            <th class="pl-10 w-[278px]">Names</th>
                            <th class="w-[117px]"></th>
                            <th class="text-center w-[190px]">Scores</th>
                            <th class="text-center w-[205px]">Ratings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $players = [
                                ['pos' => 1, 'team' => 'Strikers', 'name' => 'M.MASOOD', 'score' => 9, 'rating' => 9],
                                ['pos' => 2, 'team' => 'Warriors', 'name' => 'A.HUSSAIN', 'score' => 8, 'rating' => 8],
                                ['pos' => 3, 'team' => 'Titans', 'name' => 'S.ALI', 'score' => 7, 'rating' => 7],
                                ['pos' => 4, 'team' => 'Legends', 'name' => 'F.KHAN', 'score' => 6, 'rating' => 6],
                            ];
                        @endphp

                        @foreach ($players as $player)
                            <tr
                                class="border-b border-[#32457E] hover:bg-[#F6C200] text-[11px] sm:text-[13px] lg:text-[14px] xl:text-[16px] font-semibold">
                                <td class="text-center">{{ $player['pos'] }}.</td>
                                <td><img src="{{ asset('storage/ranking/l.png') }}" alt="" class="mx-2" /></td>
                                <td
                                    class="flex items-center gap-3 py-3 font-medium text-[10px] sm:text-[13px] lg:text-[14px] xl:text-[16px]">
                                    <img src="{{ asset('storage/ranking/s.png') }}" alt="" />
                                    {{ $player['team'] }}
                                </td>
                                <td class="pl-10 text-[8px] sm:text-[13px] lg:text-[14px] xl:text-[16px]">
                                    {{ $player['name'] }}
                                </td>
                                <td><img src="{{ asset('storage/ranking/ico.png') }}" alt="" /></td>
                                <td class="text-center">{{ $player['score'] }}</td>
                                <td class="text-center">{{ $player['rating'] }}</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="7"
                                class="py-5 text-center text-[#14CD5B] text-[11px] sm:text-[13px] lg:text-[14px] font-montserrat font-medium">
                                . Batsman - Ranking
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </x-app-layout>
