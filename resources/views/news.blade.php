<x-app-layout>
    @section('title', 'News')


    @section('content')
        <!-- Header Section -->
        <div class="md:h-[300px] h-[100px] relative flex justify-center items-center overflow-hidden ">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montu font-bold relative">
                News
            </h2>
        </div>

        {{-- Images --}}
        <div class="relative">
            <div class="w-[84%] lg:mt-[66px] mt-[20px]  mx-auto 2xl:px-[180px] xl:px-[150px] lg:px-[120px]">
                <div class="grid 2xl:grid-cols-3 grid-rows-2 lg:grid-cols-2  gap-12 py-15">
                    @foreach ([
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
            [
                'main_image' => '1.png',
                'hover_image' => '2.png',
                'title' => 'Zalmi and Strikers face off in what promises to be a thrilling encounter',
                'date' => '12 December, 2024',
                'link' => '/newpage',
                'rounded' => false,
            ],
        ] as $item)
                        <div class="box flex flex-col p-4">
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
                            <div class="mt-4">
                                <p class="text-[18px] font-bold font-monti text-wrap">
                                    {{ $item['title'] }}
                                </p>
                            </div>

                            <!-- News Date -->
                            <div class="mt-4">
                                <p class="font-normal font-monti text-[14px] text-black opacity-80">
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
                <button class="px-4 py-2 bg-[#094AB7] text-white text-[14px] font-monti">
                    Load More
                </button>
            </div>
        </div>
    </x-app-layout>
