<x-app-layout>
    @section('title', 'TFSPL Matches')


    <!-- Header Section -->
    <div class="relative">
        <div class="md:h-[300px] h-[200px] flex flex-col gap-[15px] justify-center relative items-center">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                TFSPL Matches
            </h2>
            <div class="flex space-x-4 relative z-20">
                <a href="{{ route('matches.create') }}"
                    class="block text-center text-white text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                    Create New Match
                </a>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="relative col-md-10 mx-auto mt-[40px] xl:mt-[80px]">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        </div>
    @endif


    <div class="relative col-md-10 mx-auto">
        <div class="mt-[40px] xl:mt-[80px] mb-[30px] xl:mb-[40px]">
            <div class="grid grid-cols-1 gap-[15px] lg:gap-[30px] xl:gap-[50px]">
                @forelse($matches as $match)
                    <div class="shadow">
                        <div
                            class="px-[16px] lg:px-[24px] py-[10px] xl:py-[20px] bg-[#0E4EB8] flex items-center gap-[10px] lg:gap-[15px] xl:gap-[20px] relative">
                            <p
                                class="my-0 text-[16px] lg:text-[17px] xl:text-[18px] 2xl:text-[20px] font-bold text-[#fff]">
                                {{ ucfirst($match->status) }}
                            </p>
                            <div class="w-[10px] h-[10px] shrink-0 rounded-full bg-[#FF0066]"></div>
                            <div class="h-[2px] rounded-full bg-[#FF0066] flex-1 mr-[40px]"></div>

                            {{-- Buttons for admin --}}
                            <div x-data="{ open: false }" class="absolute top-1/2 -translate-y-1/2 right-[15px]">
                                <img src="{{ asset('images/icons/menu-dots-vertical.svg') }}" alt="Menu"
                                    class="w-[20px] cursor-pointer" @click="open = !open" @click.away="open = false">

                                <div x-show="open" x-transition
                                    class="p-[10px] absolute top-[40px] left-0 mt-0 w-[120px] bg-white rounded-md shadow-lg z-50"
                                    style="display: none;">
                                    <div class="flex flex-col gap-[5px]">
                                        <a href="{{ route('matches.show', $match->id) }}"
                                            class="text-[#000] hover:text-[#0E4EB8] text-xs font-bold">View</a>
                                        <a href="{{ route('matches.edit', $match->id) }}"
                                            class="text-[#000] hover:text-[#0E4EB8] text-xs font-bold">Edit</a>
                                    </div>
                                    <form action="{{ route('matches.destroy', $match->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-[#c00] hover:text-[#000] text-xs font-bold"
                                            onclick="return confirm('Are you sure you want to delete this match?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="px-[16px] lg:px-[24px] py-[25px] xl:py-[50px] bg-[#fff] border-[2px] border-[#0E4EB8]">
                            <div
                                class="grid grid-cols-1 lg:grid-cols-3 gap-[10px] lg:gap-[20px] xl:gap-[30px] items-center">
                                <div class="text-center">
                                    <p
                                        class="my-0 text-[11px] lg:text-[12px] xl:text-[13px] font-bold uppercase opacity-85 lg:text-left">
                                        {{ $match->tournament->format }}
                                    </p>
                                    <p
                                        class="my-0 text-[11px] lg:text-[12px] xl:text-[13px] uppercase opacity-85 lg:text-left">
                                        {{ $match->tournament->name }}
                                    </p>
                                    <p
                                        class="my-0 text-[16px] lg:text-[17px] xl:text-[18px] 2xl:text-[20px] font-bold lg:text-left">
                                        {{ $match->match_date->format('M d, Y h:i A') }}
                                    </p>
                                    <p
                                        class="my-0 text-[13px] lg:text-[14px] xl:text-[15px] 2xl:text-[16px] font-semibold opacity-85 lg:text-left">
                                        {{ $match->venue }}
                                    </p>
                                </div>
                                <div>
                                    <div class="flex justify-between items-center gap-[10px]">
                                        <div>
                                            <img class="w-[70px]" src="{{ asset('storage/' . $match->team1->logo) }}"
                                                onerror="this.onerror=null; this.src='{{ asset('images/teams/raging-bulls.png') }}';"
                                                alt="{{ $match->team1->name }}">
                                            <p
                                                class="my-0 text-[13px] lg:text-[14px] xl:text-[15px] 2xl:text-[16px] font-semibold opacity-85 text-center mt-[5px]">
                                                {{ $match->team1->short_name }}
                                            </p>
                                        </div>
                                        <p
                                            class="my-0 text-[13px] lg:text-[14px] xl:text-[15px] 2xl:text-[16px] font-semibold opacity-85">
                                            vs
                                        </p>
                                        <div>
                                            <img class="w-[70px]" src="{{ asset('storage/' . $match->team2->logo) }}"
                                                onerror="this.onerror=null; this.src='{{ asset('images/teams/raging-bulls.png') }}';"
                                                alt="{{ $match->team2->name }}">
                                            <p
                                                class="my-0 text-[13px] lg:text-[14px] xl:text-[15px] 2xl:text-[16px] font-semibold opacity-85 text-center mt-[5px]">
                                                {{ $match->team2->short_name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="my-0 text-[11px] lg:text-[12px] xl:text-[13px] uppercase opacity-85">
                                            @if ($match->status == 'completed')
                                                {{ $match->winner->short_name }} won
                                                {{ $match->result }}
                                            @else
                                                Not played yet
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-center lg:justify-end">
                                    <button
                                        class="block w-[150px] text-center text-[#000] text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans py-[5px] px-[5px] md:py-[10px] text-nowrap bg-[#fff] font-medium hover:bg-[#094AB7] transition-colors duration-200 hover:text-[#fff] border-[2px] border-[#094AB7]">
                                        Match Center
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        <p class="px-6 py-4 text-center text-gray-500">No matches found</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>



    @if ($matches->hasPages())
        <div class="relative col-md-10 mx-auto">
            <div class="py-3 flex items-center justify-between">
                <div class="text-sm font-medium">
                    Showing {{ $matches->firstItem() }} to {{ $matches->lastItem() }} of {{ $matches->total() }}
                    results
                </div>
                <div class="flex items-center space-x-2">
                    @if ($matches->onFirstPage())
                        <span
                            class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                            <i class="fa-solid fa-angle-left"></i>
                        </span>
                    @else
                        <a href="{{ $matches->previousPageUrl() }}"
                            class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    @endif

                    @foreach ($matches->getUrlRange(1, $matches->lastPage()) as $page => $url)
                        @if ($page == $matches->currentPage())
                            <span class="px-3 text-[18px] font-semibold">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="px-3 text-[18px] font-semibold">{{ $page }}</a>
                        @endif
                    @endforeach

                    @if ($matches->hasMorePages())
                        <a href="{{ $matches->nextPageUrl() }}"
                            class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    @else
                        <span
                            class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date range picker
            $('#date_filter').daterangepicker({
                opens: 'left',
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('#date_filter').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                    'MM/DD/YYYY'));
                filterMatches();
            });

            $('#date_filter').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                filterMatches();
            });

            // Filter change handlers
            $('#tournament_filter, #status_filter').change(function() {
                filterMatches();
            });

            function filterMatches() {
                const tournamentId = $('#tournament_filter').val();
                const status = $('#status_filter').val();
                const dateRange = $('#date_filter').val();

                let url = '{{ route('matches.index') }}?';

                if (tournamentId) {
                    url += `tournament=${tournamentId}&`;
                }

                if (status) {
                    url += `status=${status}&`;
                }

                if (dateRange) {
                    const dates = dateRange.split(' - ');
                    url += `start_date=${dates[0]}&end_date=${dates[1]}&`;
                }

                window.location.href = url.replace(/&$/, '');
            }
        });
    </script>
</x-app-layout>
