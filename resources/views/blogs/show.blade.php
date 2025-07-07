<x-app-layout>
    @section('title', $blog->title)


    <!-- Header Section -->
    <div class="relative">
        <div class="md:h-[300px] h-[200px] flex flex-col gap-[15px] justify-center relative items-center">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                {{ $blog->title }}
            </h2>
            <div class="relative z-20">
                <a href="{{ route('blogs.index') }}"
                    class="block text-center text-white text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                    Back To Blog Posts
                </a>
            </div>
        </div>
    </div>

    <div class="relative bg-[#fff]">
        <div class="my-[40px] xl:my-[80px]">
            <div class="col-md-8 mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-5 items-center gap-[10px] lg:gap-[20px] xl:gap-[30px]">
                    <div class="bg-black">
                        @if ($blog->thumbnail)
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                class="w-full">
                        @endif
                    </div>
                    <div class="lg:col-span-4">
                        <p
                            class="text-sm px-[10px] bg-[#094AB7] text-[#fff] py-[2px] inline-block font-medium">
                            Published: {{ $blog->published_at->format('M d, Y') }}
                        </p>
                        <p
                            class="mt-[10px] text-[18px] lg:text-[20px] xl:text-[22px] 2xl:text-[24px] font-bold text-[#094AB7]">
                            {{ $blog->title }}
                        </p>
                        <div class="">
                            {!! $blog->content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($blog->scripts)
        {!! $blog->scripts !!}
    @endif
</x-app-layout>
