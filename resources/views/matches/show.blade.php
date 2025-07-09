<x-app-layout>
    <x-slot name="title">{{ $match->team1->name }} vs {{ $match->team2->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">{{ $match->team1->name }} vs {{ $match->team2->name }}</h1>
                <div class="flex items-center space-x-4 mt-2">
                    <span class="text-gray-600">{{ $match->tournament->name }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600">{{ $match->match_date->format('l, F j, Y') }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600">{{ $match->venue }}</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('matches.edit', $match->id) }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                    Edit Match
                </a>
                <a href="{{ route('tournaments.show', $match->tournament_id) }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                    Back to Tournament
                </a>
            </div>
        </div>

        <!-- Match Summary Card -->
        <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden">
            <div class="p-6 bg-gray-50 border-b">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Match Summary</h2>
                    <span
                        class="px-3 py-1 rounded-full text-sm font-medium
                        {{ $match->status == 'completed'
                            ? 'bg-green-100 text-green-800'
                            : ($match->status == 'scheduled'
                                ? 'bg-blue-100 text-blue-800'
                                : 'bg-red-100 text-red-800') }}">
                        {{ ucfirst($match->status) }}
                    </span>
                </div>
            </div>

            <div class="p-6">
                @if ($match->status == 'completed')
                    <div class="mb-6">
                        <div class="text-center mb-4">
                            <h3 class="text-2xl font-bold text-green-600">{{ $match->winner->name }} won by
                                {{ $match->result }}</h3>
                            @if ($match->manOfTheMatch)
                                <p class="text-gray-600 mt-1">Man of the Match: {{ $match->manOfTheMatch->name }}</p>
                            @endif
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Team 1 Summary -->
                            <div class="border rounded-lg p-4">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team1->logo) }}"
                                            alt="{{ $match->team1->name }}" class="h-10 w-10 rounded-full mr-3">
                                        <h4 class="text-lg font-semibold">{{ $match->team1->name }}</h4>
                                    </div>
                                    <span
                                        class="text-lg font-bold">{{ $match->team1_score }}/{{ $match->team1_wickets }}</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Overs:</span>
                                        <span>{{ $match->team1_overs }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Run Rate:</span>
                                        <span>{{ number_format($match->team1_score / $match->team1_overs, 2) }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Team 2 Summary -->
                            <div class="border rounded-lg p-4">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team2->logo) }}"
                                            alt="{{ $match->team2->name }}" class="h-10 w-10 rounded-full mr-3">
                                        <h4 class="text-lg font-semibold">{{ $match->team2->name }}</h4>
                                    </div>
                                    <span
                                        class="text-lg font-bold">{{ $match->team2_score }}/{{ $match->team2_wickets }}</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Overs:</span>
                                        <span>{{ $match->team2_overs }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Run Rate:</span>
                                        <span>{{ number_format($match->team2_score / $match->team2_overs, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Toss Information -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2">Toss</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p>{{ $match->tossWinner->name }} won the toss and chose to {{ $match->toss_decision }}</p>
                    </div>
                </div>

                <!-- Match Summary -->
                @if ($match->summary)
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Match Summary</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            {!! nl2br(e($match->summary)) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Innings Details -->
        @if ($match->innings->count() > 0)
            <div class="bg-white rounded-lg shadow-lg mb-8 overflow-hidden">
                <div class="p-6 bg-gray-50 border-b">
                    <h2 class="text-xl font-semibold">Innings Details</h2>
                </div>

                <div class="p-6">
                    @foreach ($match->innings as $inning)
                        <div class="mb-8 last:mb-0">
                            <h3 class="text-lg font-semibold mb-4">
                                {{ $inning->battingTeam->name }} -
                                {{ $inning->total_runs }}/{{ $inning->total_wickets }}
                                ({{ $inning->total_overs }} overs)
                            </h3>

                            <!-- Batting Card -->
                            <div class="mb-6">
                                <h4 class="font-medium mb-2 text-gray-700">Batting</h4>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white">
                                        <thead>
                                            <tr>
                                                <th class="py-2 px-4 border-b text-left">Batsman</th>
                                                <th class="py-2 px-4 border-b text-center">R</th>
                                                <th class="py-2 px-4 border-b text-center">B</th>
                                                <th class="py-2 px-4 border-b text-center">4s</th>
                                                <th class="py-2 px-4 border-b text-center">6s</th>
                                                <th class="py-2 px-4 border-b text-center">SR</th>
                                                <th class="py-2 px-4 border-b text-left">Dismissal</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($inning->batsmen as $batsman)
                                                <tr>
                                                    <td class="py-2 px-4 border-b">
                                                        <div class="flex items-center">
                                                            <img src="{{ $batsman->player->avatar_url ?? asset('images/default-avatar.png') }}"
                                                                alt="{{ $batsman->player->name }}"
                                                                class="h-8 w-8 rounded-full mr-2">
                                                            <span>{{ $batsman->player->name }}</span>
                                                            @if ($batsman->is_captain)
                                                                <span
                                                                    class="ml-2 text-xs bg-yellow-500 text-white px-1 rounded">C</span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">{{ $batsman->runs }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">
                                                        {{ $batsman->balls_faced }}</td>
                                                    <td class="py-2 px-4 border-b text-center">{{ $batsman->fours }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">{{ $batsman->sixes }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">
                                                        {{ number_format($batsman->strike_rate, 2) }}</td>
                                                    <td class="py-2 px-4 border-b">
                                                        @if ($batsman->is_out)
                                                            {{ $batsman->dismissal_type }}
                                                            @if ($batsman->bowler)
                                                                b {{ $batsman->bowler->player->name }}
                                                            @endif
                                                            @if ($batsman->fielder)
                                                                c {{ $batsman->fielder->player->name }}
                                                            @endif
                                                        @else
                                                            not out
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>

                            <!-- Bowling Card -->
                            <div>
                                <h4 class="font-medium mb-2 text-gray-700">Bowling</h4>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white">
                                        <thead>
                                            <tr>
                                                <th class="py-2 px-4 border-b text-left">Bowler</th>
                                                <th class="py-2 px-4 border-b text-center">O</th>
                                                <th class="py-2 px-4 border-b text-center">M</th>
                                                <th class="py-2 px-4 border-b text-center">R</th>
                                                <th class="py-2 px-4 border-b text-center">W</th>
                                                <th class="py-2 px-4 border-b text-center">Econ</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($inning->bowlers as $bowler)
                                                <tr>
                                                    <td class="py-2 px-4 border-b">
                                                        <div class="flex items-center">
                                                            <img src="{{ $bowler->player->avatar_url ?? asset('images/default-avatar.png') }}"
                                                                alt="{{ $bowler->player->name }}"
                                                                class="h-8 w-8 rounded-full mr-2">
                                                            <span>{{ $bowler->player->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">
                                                        {{ $bowler->overs_bowled }}</td>
                                                    <td class="py-2 px-4 border-b text-center">{{ $bowler->maidens }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">
                                                        {{ $bowler->runs_conceded }}</td>
                                                    <td class="py-2 px-4 border-b text-center">{{ $bowler->wickets }}
                                                    </td>
                                                    <td class="py-2 px-4 border-b text-center">
                                                        {{ number_format($bowler->economy_rate, 2) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Match Timeline -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6 bg-gray-50 border-b">
                <h2 class="text-xl font-semibold">Match Timeline</h2>
            </div>

            <div class="p-6">
                <div class="relative">
                    <!-- Timeline -->
                    <div class="border-l-2 border-gray-200 absolute h-full left-4 top-0"></div>

                    <!-- Timeline Items -->
                    <div class="space-y-8">
                        <!-- Toss -->
                        <div class="relative pl-10">
                            <div
                                class="absolute w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center left-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
