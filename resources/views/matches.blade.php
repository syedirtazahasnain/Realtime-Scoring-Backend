<x-app-layout>
@section('title', 'Matches')

@section('content')
    <!-- Header Section -->
    <div class="md:h-[300px] h-[100px] relative flex justify-center items-center overflow-hidden ">
        <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
            class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
        <h2
            class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montu font-bold relative">
            Matches
        </h2>
    </div>

    <!-- Filters Section -->
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%] bg-white py-10">
        <div class="flex md:justify-between justify-center">
            <div class="flex xl:gap-[16px] lg:gap-[14px] min-[500px]:gap-[40px] gap-[10px] px-[16px] sm:px-0">
                <button
                    class="border-2 border-[#0E4EB8] text-[#0A0443] sm:px-[18px] px-[12px] py-[5px] md:px-7 md:py-2 xl:text-[16px] lg:text-[14px] sm:text-[12px] text-[10px] font-sans font-semibold">Fixtures</button>
                <button
                    class="border-2 border-[#0E4EB8] text-[#0A0443] sm:px-[18px] px-[12px] py-[5px] md:px-7 md:py-2 xl:text-[16px] lg:text-[14px] sm:text-[12px] text-[10px] font-sans font-semibold">Results</button>
                <div>
                    <button
                        class="border-2 border-[#0E4EB8] text-[#0A0443] items-center  sm:px-[18px] px-[12px] py-[5px] md:px-7 md:py-2 xl:text-[16px] lg:text-[14px] sm:text-[12px] text-[10px] font-bold font-sans flex">
                        Teams <span class="ml-2 items-center  py-2"><img src="{{ asset('storage/matches/b.svg') }}"
                                alt="" class="h-auto w-auto"></span>
                    </button>
                </div>
                <div>
                    <button
                        class="border-2 border-[#0E4EB8] text-[#0A0443] items-center sm:px-[18px] px-[12px] py-[5px] md:px-7 md:py-2 xl:text-[16px] lg:text-[14px] sm:text-[12px] text-[10px] font-bold font-sans flex">
                        Date <span class="ml-2 items-center  py-2"><img src="{{ asset('storage/matches/b.svg') }}"
                                alt=""></span>
                    </button>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="">
                    <button
                        class="border-2 border-[#0E4EB8] text-[#0A0443] items-center sm:px-[18px] px-[12px] py-[5px] md:px-7 md:py-2 xl:text-[16px] lg:text-[14px] sm:text-[12px] text-[10px] font-bold font-sans flex">
                        Men <span class="ml-2 items-center py-2"><img src="{{ asset('storage/matches/b.svg') }}"
                                alt=""></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Match -->
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%]">
        <div class=" border border-[#0E4EB8] mb-13">


            <style>
                .ring-container {
                    position: relative;
                    width: 55px;
                    height: 55px;
                }

                .circle {
                    width: 7px;
                    height: 7px;
                    background-color: #FF0066;

                    border-radius: 50%;
                    position: absolute;
                    top: 20.8px;
                    left: 20.8px;
                    z-index: 2;
                }

                .ringring {
                    border: 1px solid #FF0066;
                    border-radius: 50%;
                    height: 15px;
                    width: 15px;
                    position: absolute;
                    top: 17px;
                    left: 17px;
                    animation: pulsate 1.5s ease-out infinite;
                    opacity: 0;
                    z-index: 1;
                }

                @keyframes pulsate {
                    0% {
                        transform: scale(0.1);
                        opacity: 0;
                    }

                    50% {
                        opacity: 1;
                    }

                    100% {
                        transform: scale(1.5);
                        opacity: 0;
                    }
                }
            </style>
            {{-- table top bar --}}
            <div
                class="bg-[#0E4EB8] text-white sm:h-[56px] h-[25px] px-[10px] md:px-6 flex items-center sm:text-[18px] text-[12px] font-bold font-sans leading-[60px]">
                Live
                <div class="relative ring-container">
                    <div class="ringring mt-1 "></div>
                    <div class="circle mt-1 "></div>
                </div>
                <div class="flex-grow h-0.5 bg-[#FF0066] ml-[-10px]"></div>
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3 items-center max-[640px]:my-2 max-[640px]:px-15">
                <div class="max-[640px]:text-center pt-[20px] md:pt-0">
                    <p class="lg:text-[18px] text-[16px] font-bold font-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] text-[12px] font-bold font-sans lg:leading-[27px] sm:leading-[20px] opacity-65 mt-[4px] md:mt-0">
                        Islamabad Cricket
                        Stadium</p>
                </div>
                <div class="grid grid-cols-3 items-center text-center md:mt-[31px] md:mb-[40px] py-[20px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>
                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>
                <div class="sm:text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center mb-[20px] md:mb-0">
                    <button
                        class="border-[1px] border-[#0E4EB8] text-[#0A0443] px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px]  font-sans font-semibold">
                        Match Centre
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- upcoming match --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%]">
        <div class="border border-[#0E4EB8] mb-13">
            <div
                class="bg-[#0E4EB8] text-white sm:h-[56px] h-[25px] px-[10px] md:px-6 flex items-center sm:text-[18px] text-[12px] font-bold font-sans leading-[60px]">
                Upcoming
                <hr class="flex-grow border-t-2 border-[#D6D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3 items-center max-[640px]:my-2 max-[640px]:px-15">
                <div class="max-[640px]:text-center pt-[20px] md:pt-0">
                    <p class="lg:text-[18px] text-[16px] font-bold font-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] text-[12px] font-bold font-sans lg:leading-[27px] sm:leading-[20px] opacity-65 mt-[4px] md:mt-0">
                        Islamabad Cricket
                        Stadium</p>
                </div>
                <div class="grid grid-cols-3 items-center text-center md:mt-[31px] md:mb-[40px] py-[20px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>
                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>
                <div class="sm:text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center mb-[20px] md:mb-0">
                    <button
                        class="border-[1px] border-[#0E4EB8] text-[#0A0443] px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px] font-sans font-semibold">
                        Match Centre
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- upcoming match --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%] hidden md:block">
        <div class="  border border-[#0E4EB8] mb-13">
            <div
                class="bg-[#0E4EB8] text-white sm:h-[56px] px-[10px] md:px-6 flex items-center text-[18px] font-bold font-sans leading-[60px]">
                Upcoming
                <hr class="flex-grow border-t-2 border-[#D6D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3 items-center max-[640px]:my-2 max-[640px]:px-15">
                <div class="max-[640px]:text-center pt-[20px] md:pt-0">
                    <p class="lg:text-[18px] text-[16px] font-bold font-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] text-[12px] font-bold font-sans lg:leading-[27px] sm:leading-[20px] opacity-65 mt-[4px] md:mt-0">
                        Islamabad Cricket
                        Stadium</p>
                </div>
                <div class="grid grid-cols-3 items-center text-center md:mt-[31px] md:mb-[40px] py-[20px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>
                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>
                <div class="sm:text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center mb-[20px] md:mb-0">
                    <button
                        class="border-[1px] border-[#0E4EB8] text-[#0A0443] px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px]  font-sans font-semibold">
                        Match Centre
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- completed match --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%]">
        <div class="  border border-[#0E4EB8] mb-13">
            <div
                class="bg-[#0E4EB8] text-white sm:h-[56px] h-[25px] px-[10px] md:px-6 flex items-center sm:text-[18px] text-[12px] font-bold font-sans leading-[60px]">
                Completed
                <hr class="flex-grow border-t-2 border-[#48D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3 items-center max-[640px]:my-2 max-[640px]:px-15">
                <div class="max-[640px]:text-center pt-[20px] md:pt-0">
                    <p class="lg:text-[18px] text-[16px] font-bold font-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] text-[12px] font-bold font-sans lg:leading-[27px] sm:leading-[20px] opacity-65 mt-[4px] md:mt-0">
                        Islamabad Cricket
                        Stadium</p>
                </div>
                <div class="grid grid-cols-3 items-center text-center md:mt-[31px] md:mb-[40px] py-[20px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>
                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>
                <div class="sm:text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center mb-[20px] md:mb-0">
                    <button
                        class="border-[1px] border-[#0E4EB8] text-[#0A0443] px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px]  font-sans font-semibold">
                        Match Centre
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- completed match --}}
    <div
        class="xl:w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px] lg:w-[88%] w-[94%] hidden md:block">
        <div class="  border border-[#0E4EB8] mb-13">
            <div
                class="bg-[#0E4EB8] text-white sm:h-[56px] px-[10px] md:px-6 flex items-center text-[18px] font-bold font-sans leading-[60px]">
                Completed
                <hr class="flex-grow border-t-2 border-[#48D607] ml-4">
            </div>
            {{-- grid --}}
            <div class="sm:px-5 grid sm:grid-cols-3 items-center max-[640px]:my-2 max-[640px]:px-15">
                <div class="max-[640px]:text-center pt-[20px] md:pt-0">
                    <p class="lg:text-[18px] text-[16px] font-bold font-sans lg:leading-[27px] sm:leading-[20px]">
                        19 Dec
                        2024 – 15th Match
                    </p>
                    <p
                        class="text-black lg:text-[14px] text-[12px] font-bold font-sans lg:leading-[27px] sm:leading-[20px] opacity-65 mt-[4px] md:mt-0">
                        Islamabad Cricket
                        Stadium</p>
                </div>
                <div class="grid grid-cols-3 items-center text-center md:mt-[31px] md:mb-[40px] py-[20px]">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Zalmiico.png') }}" alt="Zalmi" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Zalmi</p>
                    </div>
                    <p class="lg:text-[14px] sm:text-[12px] font-medium font-montserrat">vs</p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('storage/Warrior.png') }}" alt="Warriors" class="h-13">
                        <p class="lg:text-[15px] text-[13px] font-semibold font-sans text-[#2F3F50]">
                            Warriors</p>
                    </div>
                </div>
                <div class="sm:text-right md:pr-[22px] sm:pr-[19px] min-[365px]:text-center mb-[20px] md:mb-0">
                    <button
                        class="border-[1px] border-[#0E4EB8] text-[#0A0443] px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px]  font-sans font-semibold">
                        Match Centre
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- ending button --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] min-[1000px]:px-[90px] md:px-[20px] px-[16px]">
        <div class=" mb-[72px]">
            <div class="flex justify-center items-center py-5">
                <button class="px-5 py-[3px] md:py-2 lg:text-[14px] text-[10px] bg-[#0E4EB8]  text-white  font-montserrat">
                    Load More
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
