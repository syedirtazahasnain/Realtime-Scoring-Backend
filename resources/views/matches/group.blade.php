<x-app-layout>
    <x-slot name="title">{{ $group }} Matches - {{ $tournament->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">{{ $tournament->name }}</h1>
                <h2 class="text-2xl text-blue-600">{{ $group }} Matches</h2>
            </div>
            <a href="{{ route('tournaments.show', $tournament->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                Back to Tournament
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Upcoming Matches -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4 border-b pb-2">Upcoming Matches</h3>
                @forelse($tournament->matches->where('status', 'scheduled')->sortBy('match_date') as $match)
                    <div class="mb-4 pb-4 border-b last:border-b-0">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500">{{ $match->match_date->format('D, M j, Y') }}</span>
                            <span class="text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $match->venue }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ asset('storage/' . $match->team1->logo) }}" alt="{{ $match->team1->name }}" class="h-8 w-8 rounded-full mr-2">
                                <span>{{ $match->team1->short_name }}</span>
                            </div>
                            <span class="text-gray-500 mx-2">vs</span>
                            <div class="flex items-center">
                                <span>{{ $match->team2->short_name }}</span>
                                <img src="{{ asset('storage/' . $match->team2->logo) }}" alt="{{ $match->team2->name }}" class="h-8 w-8 rounded-full ml-2">
                            </div>
                        </div>
                        <a href="{{ route('matches.show', $match->id) }}" class="text-blue-500 text-sm mt-2 block">View Details</a>
                    </div>
                @empty
                    <p class="text-gray-500">No upcoming matches</p>
                @endforelse
            </div>

            <!-- Completed Matches -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4 border-b pb-2">Completed Matches</h3>
                @forelse($tournament->matches->where('status', 'completed')->sortByDesc('match_date') as $match)
                    <div class="mb-4 pb-4 border-b last:border-b-0">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500">{{ $match->match_date->format('D, M j, Y') }}</span>
                            <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">{{ $match->venue }}</span>
                        </div>
                        <div class="mb-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('storage/' . $match->team1->logo) }}" alt="{{ $match->team1->name }}" class="h-8 w-8 rounded-full mr-2">
                                    <span>{{ $match->team1->short_name }}</span>
                                </div>
                                <span class="text-gray-500 mx-2">vs</span>
                                <div class="flex items-center">
                                    <span>{{ $match->team2->short_name }}</span>
                                    <img src="{{ asset('storage/' . $match->team2->logo) }}" alt="{{ $match->team2->name }}" class="h-8 w-8 rounded-full ml-2">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-2 rounded">
                            <div class="flex justify-between items-center mb-1">
                                <span class="font-medium">{{ $match->team1->short_name }}</span>
                                <span>{{ $match->team1_score }}/{{ $match->team1_wickets }} ({{ $match->team1_overs }} ov)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium">{{ $match->team2->short_name }}</span>
                                <span>{{ $match->team2_score }}/{{ $match->team2_wickets }} ({{ $match->team2_overs }} ov)</span>
                            </div>
                            <div class="mt-2 text-center">
                                <span class="font-bold text-green-600">{{ $match->winner->name }} won by {{ $match->result }}</span>
                            </div>
                        </div>
                        <a href="{{ route('matches.show', $match->id) }}" class="text-blue-500 text-sm mt-2 block">View Details</a>
                    </div>
                @empty
                    <p class="text-gray-500">No completed matches</p>
                @endforelse
            </div>

            <!-- Group Standings -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4 border-b pb-2">{{ $group }} Standings</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Team</th>
                                <th class="px-4 py-2 text-center">P</th>
                                <th class="px-4 py-2 text-center">W</th>
                                <th class="px-4 py-2 text-center">L</th>
                                <th class="px-4 py-2 text-center">NRR</th>
                                <th class="px-4 py-2 text-center">Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($standings as $standing)
                                <tr class="{{ $loop->iteration <= 2 ? 'bg-green-50' : '' }}">
                                    <td class="px-4 py-2 flex items-center">
                                        <img src="{{ asset('storage/' . $standing->team->logo) }}" alt="{{ $standing->team->name }}" class="h-6 w-6 rounded-full mr-2">
                                        <span>{{ $standing->team->short_name }}</span>
                                    </td>
                                    <td class="px-4 py-2 text-center">{{ $standing->matches_played }}</td>
                                    <td class="px-4 py-2 text-center">{{ $standing->matches_won }}</td>
                                    <td class="px-4 py-2 text-center">{{ $standing->matches_lost }}</td>
                                    <td class="px-4 py-2 text-center">{{ number_format($standing->net_run_rate, 2) }}</td>
                                    <td class="px-4 py-2 text-center font-bold">{{ $standing->points }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-sm text-gray-500">
                    <p>Top 2 teams qualify for knockout stage</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
