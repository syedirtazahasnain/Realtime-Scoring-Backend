<x-app-layout>
    @section('title', 'About Us - TFSPL')

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

    {{-- Hero Section Refined --}}
    <div class="relative h-[50vh] md:h-[60vh] xl:h-[90vh]">
        <img src="{{ asset('storage/about/about4.png') }}" alt=""
            class="absolute top-0 left-0 w-full h-full object-cover object-top">
        <div>
            <div
                class="absolute left-[10px] xl:left-[80px] bottom-[10px] sm:bottom-[20px] xl:bottom-[40px] 2xl:bottom-[80px]">
                <p class="text-black font-sans font-semibold 2xl:text-[18px] xl:text-[14px] text-[10px] my-0">
                    Chief Executive Officer
                </p>
                <p
                    class="font-monti font-bold 2xl:text-[40px] xl:text-[30px] lg:text-[20px] md:text-[15px] 2xl:mt-[20px] text-[12px] text-black xl:w-[90%] leading-none my-0">
                    Naeem Abbas: TFSC Premier League Fixtures & Results
                </p>
            </div>
        </div>
    </div>

    {{-- TFSC Managemnt Refined --}}
    <div class="animate relative bg-[#094AB7]">
        <img src="{{ asset('storage/about/tfscmanagement.png') }}" alt=""
            class="absolute top-0 left-0 w-full h-full object-cover">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px]">
            <div
                class="grid grid-cols-1 lg:grid-cols-9 xl:mt-[90px] md:mt-[60px] mt-[40px] lg:py-[90px] py-[30px] relative z-30">
                <div class="lg:col-span-3 mt-[10px] text-center">
                    <p
                        class="font-montu text-[22px] lg:text-[26px] xl:text-[30px] font-bold my-0 text-white leading-tight lg:text-left">
                        TFSC Premier League Management
                    </p>
                    <p
                        class="font-sans font-normal text-[15px] lg:text-[16px] xl:text-[18px] mt-[20px] max-w-[547px] text-white lg:text-left">
                        Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League Twenty
                        Four Seven Consultancy Premier League.
                    </p>

                    <button
                        class="w-[180px] xl:w-[238px] px-[20px] py-[8px] bg-yellow-400 mt-[30px] hidden lg:block text-[#094AB7] font-medium">
                        View Details
                    </button>

                </div>

                <div class="lg:col-span-6 lg:mt-3 xl:mt-0 mt-[20px]">
                    <div class="management_section">
                        @foreach ([['image' => 'owner11.png', 'name' => 'Danish Ather', 'title' => 'Chief Operating Officer'], ['image' => 'owner11.png', 'name' => 'Muzahir Hussain', 'title' => 'Director Operations'], ['image' => 'owner11.png', 'name' => 'Muhammad Sulaman', 'title' => 'Director Administration'], ['image' => 'owner11.png', 'name' => 'Muhammad Sulaman', 'title' => 'Director Administration']] as $person)
                            <div class="relative mx-[6px] lg:mx-[12px] overflow-hidden">
                                <div class="h-[500px] relative rounded-[10px] overflow-hidden">
                                    <img src="{{ asset('storage/about/' . $person['image']) }}" alt=""
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="absolute z-30 bottom-0 left-0 w-full px-2">
                                    <p
                                        class="my-0 text-[14px] lg:text-[18px] xl:text-[20px] 2xl:text-[24px] font-monti font-bold text-white text-nowrap text-center w-full leading-tight">
                                        {{ $person['name'] }}
                                    </p>
                                    <p
                                        class="my-0 text-[12px] lg:text-[14px] xl:text-[16px] 2xl:text-[18px] font-monti font-medium text-white text-nowrap text-center w-full leading-tight">
                                        {{ $person['title'] }}
                                    </p>
                                </div>
                                <div
                                    class="bg-[linear-gradient(to_top,rgba(9,74,183,1)_30%,rgba(9,74,183,0)_100%)] w-full h-[100px] absolute bottom-0 left-0 z-20">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TFSC Community Refined --}}
    <div class="relative bg-[#FFF4ED] my-[50px] lg:my-[70px] xl:my-[100px]">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px]">
            <div class="py-[20px] md:py-[30px] xl:py-[60px]">
                <p class="text-[#094AB7] font-montu font-bold text-[22px] lg:text-[26px] xl:text-[30px]">
                    TFSC Community
                </p>
                <div class="mt-[15px] lg:mt-[30px] relative overflow-hidden">
                    <img src="{{ asset('storage/about/comunity1.png') }}" alt=""
                        class="absolute top-0 left-0 w-full h-full object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-[#094AB7] opacity-30"></div>
                    <div class="py-[20px] lg:py-[40px] xl:py-[90px] flex lg:items-center justify-center">
                        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-[740px] relative">
                            <div class="lg:bg-[#094AB7] rounded-[15px]">
                                <div class="pt-[30px] px-[40px]">
                                    <p
                                        class="font-sans lg:text-[24px] text-[16px] font-bold text-white text-center leading-tight">
                                        Do You Want Feel Part Of
                                        TFS Premier League
                                    </p>
                                    <div class="lg:flex justify-center hidden">
                                        <img src="{{ asset('storage/about/tfsc1.png') }}" alt=""
                                            class="w-[258px] max-h-[282px] object-cover">
                                    </div>

                                    {{-- for mobile view --}}
                                    <div class="lg:hidden mt-[15px]">
                                        <div class="bg-white py-[10px] flex flex-col items-center">
                                            <p class=" font-sans text-[14px] text-[#094AB7] font-bold ">
                                                Join the TFSC Community
                                            </p>
                                            <button
                                                class="lg:px-[42px] px-[19px] lg:py-[9px] py-[2px] bg-yellow-400 font-sans font-bold lg:text-[14px] text-[12px] mt-[5px] text-[#094AB7]">
                                                Become Premium
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute bottom-[30px] lg:bottom-[40px] xl:bottom-[60px] lg:right-0 bg-white px-[50px] py-[30px] hidden lg:block rounded-[15px]">
                                <p class=" font-sans lg:text-[24px] text-[18px] text-[#094AB7] font-bold ">
                                    Join the TFSC Community
                                </p>
                                <button
                                    class="px-[42px] py-[9px] bg-yellow-400 font-sans font-bold text-[14px] mt-[15px] text-[#094AB7] rounded-[8px]">
                                    Become Premium
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Our Story Refined --}}
    <div class="bg-[#FFF4ED] relative ">
        <div class="2xl:mt-[100px] mt-[40px]">
            <div class="xl:py-[60px] py-[30px] 2xl:px-[80px] xl:px-[60px] md:px-[40px] px-[16px]">
                <p
                    class="font-montu text-[#094AB7] font-bold text-center text-[22px] lg:text-[26px] xl:text-[30px] my-0">
                    Our Stories
                </p>
                <p
                    class="font-sans lg:text-[18px] text-[12px] text-center mt-[20px] max-w-[650px] mx-auto leading-tight">
                    Twenty Four Seven Consultancy Premier League Twenty Four Seven Consultancy Premier League Twenty
                    Four Seven Consultancy Premier League
                </p>

                <div class="story_section lg:py-[30px] py-[10px]">
                    @php
                        $teamMembers = [
                            [
                                'image' => 'danish-new.png',
                                'name' => 'Danish Ather',
                                'position' => 'Danish Ather Clinches another title',
                                'type' => 'Feature',
                                'date' => '12 Jan 2025',
                            ],
                            [
                                'image' => '65-group.png',
                                'name' => 'Danish Ather',
                                'position' => 'Giving Chance To Youngsters',
                                'type' => 'Feature',
                                'date' => '12 Jan 2025',
                            ],
                            [
                                'image' => 'danish-new.png',
                                'name' => 'Danish Ather',
                                'position' => 'Danish Ather Clinches another title',
                                'type' => 'Feature',
                                'date' => '12 Jan 2025',
                            ],
                            [
                                'image' => '65-group.png',
                                'name' => 'Danish Ather',
                                'position' => 'Danish Ather Clinches another title',
                                'type' => 'Feature',
                                'date' => '12 Jan 2025',
                            ],
                            [
                                'image' => 'danish-new.png',
                                'name' => 'Danish Ather',
                                'position' => 'Danish Ather Clinches another title',
                                'type' => 'Feature',
                                'date' => '12 Jan 2025',
                            ],
                        ];
                    @endphp

                    @foreach ($teamMembers as $member)
                        <div class="mx-[15px]">
                            <div class="w-full h-[570px] overflow-hidden rounded-[10px] relative">
                                <img src="{{ asset('storage/about/' . $member['image']) }}" alt=""
                                    class="w-full h-full object-cover">

                                <div
                                    class="absolute bg-[#F9D54B] text-[#094AB7] px-4 py-1 top-[20px] left-0 font-montu text-[10px] font-bold rounded-r-[3px]">
                                    Stories
                                </div>
                                <div
                                    class="bg-[linear-gradient(to_top,rgba(0,0,0,1)_30%,rgba(0,0,0,0)_100%)] absolute bottom-0 left-0 h-[250px] w-full z-10">
                                </div>
                                <div
                                    class="absolute bottom-[20px] xl:bottom-[30px] left-0 z-20 w-full px-[15px] xl:px-[25px]">
                                    <p
                                        class="text-[#F6C200] font-semibold font-montu text-[18px] lg:text-[20px] xl:text-[24px]">
                                        {{ $member['position'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- TFSC Owners Refined --}}
    <div class="relative bg-[#094AB7] my-[50px] lg:my-[70px] xl:my-[100px]">
        <img src="{{ asset('storage/about/tfscmanagement.png') }}" alt=""
            class="absolute top-0 left-0 w-full h-full object-cover">
        <div class="px-[20px] lg:px-[40px] xl:px-[80px] py-[20px] lg:py-[30px] xl:py-[60px]">
            <div class="flex justify-between items-center gap-[10px] flex-wrap relative z-20">
                <div>
                    <p class="font-montu font-bold text-white text-[22px] lg:text-[26px] xl:text-[30px]">
                        TFSC Owners
                    </p>
                </div>
                <div class="flex gap-[10px] items-center">
                    <img src="{{ asset('storage/about/right-arrow.svg') }}" alt=""
                        class="w-[30px] rotate-[180deg] custom-prev-owner cursor-pointer">
                    <img src="{{ asset('storage/about/right-arrow.svg') }}" alt=""
                        class="w-[30px] custom-next-owner cursor-pointer">
                </div>
            </div>
            <div class="owner_section sm:mx-[20px] lg:mx-[40px] xl:mx-[60px] mt-[20px] xl:mt-[40px]">
                @foreach ([['name' => 'Azfar Kamal', 'title' => 'TFS Warriors', 'image' => 'owner11.png'], ['name' => 'Azfar Kamal', 'title' => 'TFS Warriors', 'image' => 'owner11.png'], ['name' => 'Jamshed Arbab Khan', 'title' => 'Timber Wolves', 'image' => 'owner22.png'], ['name' => 'Jamshed Arbab Khan', 'title' => 'Timber Wolves', 'image' => 'owner22.png'], ['name' => 'Jamshed Arbab Khan', 'title' => 'Timber Wolves', 'image' => 'owner22.png']] as $owner)
                    <div class="overflow-hidden relative rounded-[10px] mx-[10px]">
                        <div class="relative w-full h-[440px]">
                            <img src="{{ asset('storage/about/' . $owner['image']) }}" alt="Owner Image"
                                class="absolute top-0 left-0 w-full h-full rounded-lg object-cover object-top z-10">

                            <div
                                class="absolute bottom-0 left-0 w-full h-[250px] bg-gradient-to-t from-black to-transparent z-20">
                            </div>

                            <div
                                class="absolute bottom-[10px] xl:bottom-[20px] left-1/2 w-full px-[10px] -translate-x-1/2 z-30 text-white text-center">
                                <h2 class="font-montu text-[18px] lg:text-[20px] xl:text-[22px] font-bold">
                                    {{ $owner['name'] }}</h2>
                                <p class="text-[12px] xl:text-[14px] font-bold font-sans">{{ $owner['title'] }}</p>
                            </div>
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
