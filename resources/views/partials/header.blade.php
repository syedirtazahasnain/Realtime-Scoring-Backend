<header>

    <div class="w-full z-10 bg-[#094AB7] px-[10px] lg:px-[20px] xl:px-[30px] 2xl:px-[40px] relative h-[102px] flex items-center"
        x-data="{ open: false }">
        <!-- Background Images -->
        <img src="{{ asset('images/home/header-bg.png') }}" alt=""
            class="absolute top-0 left-0 grayscale opacity-50">
        <img src="{{ asset('images/home/header-bg.png') }}" alt=""
            class="absolute top-0 right-0 grayscale opacity-50 rotate-[180deg]">

        <!-- Main Header Flex -->
        <div class="grid grid-cols-2 relative z-20 w-full">
            <div class="flex items-center gap-[18px] lg:gap-[26px] xl:gap-[34px]">
                <!-- Logo -->
                <div class="relative">
                    <img src="{{ asset('images/logo/logo-main.png') }}" alt="Logo" class="w-full">
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex">
                    <div class="flex gap-[16px] lg:gap-[20px] xl:gap-[26px] items-center font-montu">
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Home</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/about"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">About</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/teams"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Teams</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/ranking"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Rankings</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/matches"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Fixtures</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/drafting"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Drafting</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/news"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">News</a>
                        </div>
                        <div class="text-[14px] xl:text-[16px]">
                            <a href="/players"
                                class="text-[#fff] hover:text-[#00aeef] duration-200 transition-all ease-in-out">Players</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Desktop Button + Logo -->
            <div class="flex items-center justify-end w-full gap-[20px] xl:gap-[30px]">
                <!-- Desktop CTA -->
                <div class="hidden xl:flex lg:flex md:flex items-center border-x-[1px] border-[#fff] relative group">
                    <button
                        class="px-[15px] 2xl:px-[20px] py-[5px] text-white hover:cursor-pointer text-[14px] xl:text-[16px] font-montu text-nowrap">
                        Join TFSC PL
                    </button>
                    <!-- Dropdown menu -->
                    <div
                        class="absolute hidden group-hover:block top-full right-0 mt-0 w-48 bg-white rounded-md shadow-lg z-50">
                        <div class="py-1">
                            <!-- Profile link -->
                            @if(auth()->check())
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                     this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            @else
                            <!-- Login link -->
                            <x-dropdown-link :href="route('login')">
                                {{ __('Login') }}
                            </x-dropdown-link>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Right Logo -->
                <div class="">
                    <img src="{{ asset('images/logo/tfsc-logo-white.png') }}" alt="Logo" class="">
                </div>

                <!-- Burger Button moved here (visible only on small screens) -->
                <button class="md:hidden text-white focus:outline-none ml-4" @click="open = !open">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path x-show="!open" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>



        <!-- Mobile Navigation -->
        <div class="md:hidden text-center" x-show="open" x-transition>
            <nav>
                <ul class="space-y-2 text-white text-sm font-montu ">
                    <li><a href="/" class="block py-1 hover:text-gray-300">Home</a></li>
                    <li><a href="/about" class="block py-1 hover:text-gray-300">About</a></li>
                    <li><a href="/matches" class="block py-1 hover:text-gray-300">Teams</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Rankings</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Fixtures</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Top Fans</a></li>
                    <li><a href="/ranking" class="block py-1 hover:text-gray-300">Awards</a></li>
                    <li><a href="/news" class="block py-1 hover:text-gray-300">Players</a></li>
                </ul>
            </nav>
        </div>


    </div>
    {{-- site links --}}
    <div class="px-[20px] lg:px-[40px] xl:px-[80px] bg-[#F6C200] flex justify-between py-[12px] items-center">

        <div
            class="text-[#2b3990] text-[14px] 2xl:text-[16px] font-sans font-normal hidden lg:flex items-center gap-[20px]">
            <p class="my-0">Extended Health Services</p>
            <p class="my-0">ScribeAlign</p>
            <p class="my-0">24-7Consultancy</p>
        </div>
        <div class="flex items-center gap-[15px] xl:gap-[30px] text-[#2b3990]">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-tiktok"></i>
            <i class="fab fa-whatsapp"></i>
        </div>
        <div class="md:hidden">
            <button
                class="2xl:px-[22px] xl:px-[16px] lg:px-[10px] px-[5px] py-1 text-white hover:cursor-pointer font-montserrat text-[12px] font-semibold ">
                Join TFSC PL
            </button>
        </div>


    </div>
</header>
