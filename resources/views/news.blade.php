<x-app-layout>
    @section('title', 'News')


    @section('content')
        <!-- Header Section -->
        <div class="relative">
            <div class="md:h-[300px] h-[100px] flex justify-center relative items-center">
                <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                    class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
                <h2
                    class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                    News
                </h2>
            </div>

        </div>

        {{-- Images --}}
        <div class="relative">
            <div class="col-md-10 mt-[30px] md:mt-[40px] lg:mt-[55px] xl:mt-[78px] mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] sm:gap-[20px] md:gap-[40px] lg:gap-[50px]">
                    @foreach ([
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter.',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => 'image1.png',
                'hover_image' => '2.png',
                'title' => 'Tom Got Heated After an Umpire’s Controversial Decision',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => 'image2.png',
                'hover_image' => '2.png',
                'title' => 'Irfan Khan smashes sixer on last ball to get his team home',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => 'image3.png',
                'hover_image' => '2.png',
                'title' => 'Saad pulls off a screamer in a knockout game to dismiss Awais!',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => 'image4.png',
                'hover_image' => '2.png',
                'title' => 'That’s OUT!” says the umpire on the very first ball of the semifinal!',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => 'image5.png',
                'hover_image' => '2.png',
                'title' => 'Jamshed Arbab Leading top wicket Taker',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
        ] as $item)
                        <div class="box flex flex-col xl:p-[18px] lg:p-[15px] md:p-[12px] p-[10px]">
                            <div class="relative overflow-hidden group">
                                <a href="{{ $item['link'] }}" class="block">
                                    <!-- Main Image -->
                                    <img src="{{ asset('storage/newspage/' . $item['main_image']) }}"
                                        alt="{{ $item['title'] }}"
                                        class="w-full @if ($item['rounded']) rounded-[15px] @endif">

                                    <!-- Hover Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#09154B] rounded-b-[15px] to-transparent z-10 opacity-0 group-hover:opacity-100">
                                    </div>

                                    <!-- Hover Icon -->
                                    <img src="{{ asset('storage/newspage/' . $item['hover_image']) }}"
                                        alt="{{ $item['title'] }}"
                                        class="absolute inset-35 rounded-b-lg w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                                </a>
                            </div>

                            <!-- News Title -->
                            <div class="px-0 lg:px-[2px] mt-[10px] md:mt-[15px] lg:mt-[20px]">
                                <p class="text-[14px] lg:text-[18px] font-bold font-monti text-black text-wrap">
                                    {{ $item['title'] }}
                                </p>
                            </div>

                            <!-- News Date -->
                            <div class="px-0 lg:px-[2px] mt-[5px] md:mt-[7px] lg:mt-[10px] mb-[7px]">
                                <p class="font-normal font-monti text-[12px] lg:text-[14px] text-black/80">
                                    {{ $item['date'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- ending button --}}
        <div class="lg:my-[80px] my-[20px]">
            <div class="flex justify-center items-center py-5">
                <button class="px-[17px] py-[8px] bg-[#094AB7] text-white text-[15px] font-semibold rounded-[5px] font-monti">
                    Load More
                </button>
            </div>
        </div>
    </x-app-layout>
