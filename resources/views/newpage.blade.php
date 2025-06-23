<x-app-layout>
@section('title', 'Newspage')

@section('content')
    {{-- hero section --}}
    <div
        class="relative flex flex-col justify-center items-center w-full lg:h-[500px] md:h-[400px] h-[300px] overflow-hidden">
        <img src="{{ asset('storage/newpage/bg.png') }}" alt=""
            class="absolute left-0 bottom-0 top-0 w-full h-full object-cover" />
        <div
            class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] lg:px-[90px] sm:px-[20px] min-[365px]:px-[20px] relative flex flex-col items-center">
            <p
                class="text-white text-[18px] sm:text-[20px] lg:text-[30px] xl:text-[40px] 2xl:text-[50px]
                      font-bold font-montserrat xl:leading-[60px] ">
                Zalmi and Strikers face off in what promises to be a thrilling encounter
            </p>
        </div>
    </div>

    <div
        class="w-[84%] mx-auto 2xl:px-[180px] xl:px-[120px] lg:px-[90px] sm:px-[20px] min-[365px]:px-[20px] 2xl:py-[61px] xl:py-[35px] py-[21px]">
        <div class="relative mb-[10px]">
            <a href="/news">
                <button class="absolute top-5 left-[-58px]   text-white p-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 35 35"
                        fill="none">
                        <circle cx="17.5" cy="17.5" r="17.5" transform="matrix(-1 0 0 1 35 0)" fill="#094AB7" />
                        <path d="M19 12L14 18L19 24" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </a>
            <h2
                class="text-[18px] sm:text-[24px] lg:text-[30px] font-bold font-montserrat text-[#094AB7] xl:leading-[46px] ">
                Strikers edged out Team Zalmi by 3 runs in a high-stakes match filled with dramatic moments.
            </h2>
        </div>
        <div class="">
            <p
                class="font-medium font-montserrat lg:text-[16px] md:text-[14px] text-[12px] xl:leading-[46px] text-[#0D0C22] opacity-75">
                First Innings Recap The Strikers won the toss and elected to bat first. Jason Roy opened the innings with a
                bang, smashing a quickfire 45 off 28 balls. However, Zalmi’s Zubair Malik struck twice in the powerplay,
                removing both openers. Rohan Mehra anchored the innings with a composed 60 off 50 balls, while the lower
                order
                chipped in with valuable runs. The Strikers posted a competitive total of 165/7 in their 20 overs.
            </p>
            <p
                class="font-medium font-montserrat lg:text-[16px] md:text-[14px] text-[12px] xl:leading-[46px] text-[#0D0C22] opacity-75">
                Second Innings Recap Chasing 166, Team Zalmi got off to a shaky start, losing two wickets in the powerplay.
                Ahmad Ali steadied the ship with a counter-attacking 70 off 42 balls, partnering with Sameer Khan, who
                contributed a crucial 40. The game went down to the wire, with Zalmi needing 12 runs off the last over.
            </p>
        </div>
        <div class="overflow-hidden my-6 w-full h-[180px]">
            <img src="{{ asset('storage/newpage/1.png') }}" alt="" class="w-full h-full object-cover ">
        </div>
        <p
            class="font-medium font-montserrat lg:text-[16px] md:text-[14px] text-[12px] xl:leading-[46px] text-[#0D0C22] opacity-75">
            For Zalmi, Ahmad Ali’s valiant effort was the highlight of the match, but the team fell just short of the
            finish line. Their middle-order struggles and a lack of acceleration in the final overs proved to be the
            deciding factors.
        </p>
        <p
            class="font-medium font-montserrat lg:text-[16px] md:text-[14px] text-[12px] xl:leading-[46px] text-[#0D0C22] opacity-75">
            Player of the Match Rohan Mehra (Strikers) for his match-winning knock of 60 runs and
            exceptional leadership on the field.
        </p>
        <p
            class="font-medium font-montserrat lg:text-[16px] md:text-[14px] text-[12px] xl:leading-[46px] text-[#0D0C22] opacity-75 mt-[10px]">
            Fan Reactions</p>
        <ul
            class="list-disc pl-4 space-y-2 text-[#17109E] opacity-75 font-montserrat lg:text-[16px] md:text-[14px] text-[12px] mt-[10px]">
            <li><span class="">“What a game! Both teams played their hearts out. Strikers just had that
                    extra edge today.”
                </span></li>
            <li><span class="">“Ahmad Ali’s innings was pure class! Unlucky for Zalmi, but they’ll bounce
                    back.”
                </span></li>
            <li><span class="">“Prakash Patel’s spin is a delight to watch. He’s been phenomenal this
                    season.”
                </span></li>
        </ul>
        <div class="flex flex-col justify-between lg:flex-row xl:mt-0 lg:mt-3 lg:gap-0 min-[365px]:gap-3">
            <p class="mt-6 text-[#09154B] font-montserrat lg:text-[16px] md:text-[14px] text-[12px]">Stay tuned for more
                updates and
                analysis from the
                world of cricket!</p>
            <div class="flex justify-center lg:justify-end 2xl:gap-[44px] xl:gap-[20px] lg=:gap-3 min-[365px]:gap-4 ">
                <button
                    class="2xl:px-6 2xl:py-[11px] xl:px-4 xl:py-[6px] lg:px-3 lg:py-[2px] min-[365px]:px-5 min-[365px]:py-[4px] bg-[#094AB7] text-white 2xl:text-[14px] xl:text-[11px] lg:text-[9px] min-[365px]:text-[10px] font-montserrat font-normal ">❮
                    Previous Post</button>
                <button
                    class="2xl:px-6 2xl:py-[11px] xl:px-4 xl:py-[6px] lg:px-3 lg:py-[2px] min-[365px]:px-5 min-[365px]:py-[4px] bg-[#094AB7] text-white 2xl:text-[14px] xl:text-[11px] lg:text-[9px] min-[365px]:text-[10px] font-montserrat font-normal">Next
                    Post ❯</button>
            </div>
        </div>
    </div>
</x-app-layout>
