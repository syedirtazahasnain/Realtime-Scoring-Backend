<x-app-layout>
@section('title', 'News')


@section('content')
    <!-- Header Section -->
    <div class="md:h-[300px] h-[100px] relative flex justify-center items-center overflow-hidden ">
        <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
            class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
        <h2
            class="text-white 2xl:text-[50px] xl:text-[40px] lg:text-[30px] sm:text-[20px] text-[18px] font-montagu-slab font-bold relative">
            News
        </h2>
    </div>

    {{-- Images --}}
    <div class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[150px] lg:px-[120px]">
        <div class="grid 2xl:grid-cols-3 grid-rows-2 lg:grid-cols-2  gap-12 py-15">
            <div class="box flex flex-col p-4">
                <div class="relative overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers" class="w-full ">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent  z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            <div class="box flex flex-col p-4">
                <div class="relative overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers" class="w-full">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            <div class="box flex flex-col p-4 ">
                <div class="relative  overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers"
                            class="w-full rounded-[15px]">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            <div class="box flex flex-col p-4 ">

                <div class="relative  overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers" class="w-full">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent  z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            <div class="box flex flex-col p-4 ">
                <div class="relative  overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers" class="w-full">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
            <div class="box flex flex-col p-4 ">
                <div class="relative  overflow-hidden group">
                    <a href="/newpage" class="block">
                        <img src="{{ asset('storage/newspage/1.png') }}" alt="Zalmi vs Strikers" class="w-full">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#09154B] to-transparent  z-10 opacity-0 group-hover:opacity-100">
                        </div>
                        <img src="{{ asset('storage/newspage/2.png') }}" alt="Zalmi vs Strikers"
                            class="absolute inset-35 w-[55px] object-cover z-20 opacity-0 group-hover:opacity-100 text-white">
                    </a>
                </div>
                <div class="mt-4">
                    <p class="text-[18px] font-bold font-montserrat text-wrap">
                        Zalmi and Strikers face off in what promises to be a thrilling encounter.
                    </p>
                </div>
                <div class="mt-4">
                    <p class="font-normal font-montserrat text-[14px] text-black opacity-80">
                        12 December, 2024
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- ending button --}}
    <div class="mb-10">
        <div class="flex justify-center items-center py-5">
            <button class="px-4 py-2 bg-[#094AB7] text-white text-[14px] font-montserrat">
                Load More
            </button>
        </div>
    </div>
</x-app-layout>
