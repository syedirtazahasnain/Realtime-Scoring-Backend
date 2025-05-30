<x-app-layout>
    <x-slot name="title">Matches</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">All Matches</h1>
            <a href="{{ route('matches.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Create New Match
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Filter/Search Section -->
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="tournament_filter"
                        class="block text-sm font-medium text-gray-700 mb-1">Tournament</label>
                    <select id="tournament_filter"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">All Tournaments</option>
                        @foreach ($tournaments as $tournament)
                            <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="status_filter"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">All Statuses</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="completed">Completed</option>
                        <option value="abandoned">Abandoned</option>
                    </select>
                </div>
                <div>
                    <label for="date_filter" class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                    <input type="text" id="date_filter"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Select date range">
                </div>
            </div>
        </div>

        <!-- Matches Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Teams</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tournament</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date & Venue</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Result</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($matches as $match)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ asset('storage/' . $match->team1->logo) }}"
                                                alt="{{ $match->team1->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $match->team1->short_name }} vs {{ $match->team2->short_name }}</div>
                                            <div class="text-sm text-gray-500">{{ $match->team1->name }} &
                                                {{ $match->team2->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $match->tournament->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $match->tournament->format }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $match->match_date->format('M d, Y h:i A') }}
                                    </div>
                                    <div class="text-sm text-gray-500">{{ $match->venue }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $match->status == 'completed'
                                            ? 'bg-green-100 text-green-800'
                                            : ($match->status == 'scheduled'
                                                ? 'bg-blue-100 text-blue-800'
                                                : 'bg-red-100 text-red-800') }}">
                                        {{ ucfirst($match->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if ($match->status == 'completed')
                                        <div class="font-medium">{{ $match->winner->short_name }} won</div>
                                        <div>{{ $match->result }}</div>
                                    @else
                                        <div class="text-gray-400">Not played yet</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('matches.show', $match->id) }}"
                                        class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                    <a href="{{ route('matches.edit', $match->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                    <form action="{{ route('matches.destroy', $match->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                            onclick="return confirm('Are you sure you want to delete this match?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No matches found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($matches->hasPages())
                <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                    <div class="text-sm text-gray-700">
                        Showing {{ $matches->firstItem() }} to {{ $matches->lastItem() }} of {{ $matches->total() }}
                        results
                    </div>
                    <div class="flex space-x-2">
                        @if ($matches->onFirstPage())
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Previous</span>
                        @else
                            <a href="{{ $matches->previousPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Previous</a>
                        @endif

                        @foreach ($matches->getUrlRange(1, $matches->lastPage()) as $page => $url)
                            @if ($page == $matches->currentPage())
                                <span
                                    class="px-3 py-1 rounded border bg-blue-500 text-white">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">{{ $page }}</a>
                            @endif
                        @endforeach

                        @if ($matches->hasMorePages())
                            <a href="{{ $matches->nextPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next</a>
                        @else
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next</span>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>

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
