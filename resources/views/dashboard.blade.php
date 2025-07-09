<x-app-layout>
    @section('title', 'TFSPL Management')


    <!-- Header Section -->
    <div class="relative">
        <div class="md:h-[300px] h-[200px] flex flex-col gap-[15px] justify-center relative items-center">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                TFSPL Management
            </h2>
        </div>
    </div>


    <div class="relative bg-[#fff]">
        <div class="col-md-10 mx-auto my-[40px] xl:my-[80px]">
            <div>
                <h2
                    class="text-[#094AB7] text-[22px] lg:text-[26px] xl:text-[30px] font-bold font-montu my-0">
                    Teams
                </h2>
            </div>
            <div class="mt-[15px] xl:mt-[30px]">
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-[10px]">
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/raging-bulls.png') }}" alt="" class="p-[15px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                Raging Bulls
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/timber-wolves.png') }}" alt="" class="p-[15px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                Timber Wolves
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div
                        class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/team-scorchers.png') }}" alt="" class="p-[15px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Scorchers
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/tfs-zalmi.png') }}" alt="" class="p-[13px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Zalmi
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/team-strikers.png') }}" alt="" class="p-[5px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Strikers
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/team-warrios.png') }}" alt="" class="p-[12px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Warriors
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/tfs-invadors.png') }}" alt="" class="p-[12px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Invaders
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                    <div class="flex flex-col gap-[10px] items-center justify-center bg-[#094AB7] rounded-[15px] xl:rounded-[20px] py-[15px] xl:py-[30px] 2xl:py-[40px] px-[10px] xl:px-[20px]">
                        <div class="w-[100px] h-[100px] bg-[#fff] rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/teams/team-sultan.png') }}" alt="" class="p-[15px]">
                        </div>
                        <div class="mt-[10px]">
                            <p
                                class="my-0 text-[18px] lg:text-[20px] xl:text-[24px] leading-none font-bold uppercase text-[#fff] text-nowrap">
                                TFS Sultan
                            </p>
                        </div>
                        <button
                            class="block text-center text-white text-xs uppercase font-sans px-[20px] py-[5px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                            Team Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
