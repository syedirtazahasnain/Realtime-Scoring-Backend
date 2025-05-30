<x-app-layout>
    <x-slot name="title">Knockout Stage - {{ $tournament->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">{{ $tournament->name }}</h1>
                <h2 class="text-2xl text-red-600">Knockout Stage</h2>
            </div>
            <a href="{{ route('tournaments.show', $tournament->id) }}"
                class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                Back to Tournament
            </a>
        </div>

        <!-- Knockout Bracket Visualization -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h3 class="text-xl font-semibold mb-4">Tournament Bracket</h3>

            <div class="tournament-bracket">
                <!-- Quarter Finals -->
                <div class="bracket-round">
                    <h4 class="text-lg font-medium mb-4 text-center">Quarter Finals</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($tournament->matches->where('stage', 'quarter-final')->sortBy('match_date') as $match)
                            <div class="match-card p-3 border rounded">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-gray-500 text-sm">{{ $match->match_date->format('M j') }}</span>
                                    <span
                                        class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $match->venue }}</span>
                                </div>
                                <div class="team-row flex items-center justify-between mb-1">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team1->logo) }}"
                                            alt="{{ $match->team1->name }}" class="h-6 w-6 rounded-full mr-2">
                                        <span>{{ $match->team1->short_name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="score">{{ $match->team1_score }}/{{ $match->team1_wickets }}</span>
                                    @endif
                                </div>
                                <div class="team-row flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team2->logo) }}"
                                            alt="{{ $match->team2->name }}" class="h-6 w-6 rounded-full mr-2">
                                        <span>{{ $match->team2->short_name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="score">{{ $match->team2_score }}/{{ $match->team2_wickets }}</span>
                                    @endif
                                </div>
                                @if ($match->status == 'completed')
                                    <div class="mt-2 text-center text-sm">
                                        <span class="font-medium">{{ $match->winner->short_name }} won</span>
                                        <span class="block text-xs">{{ $match->result }}</span>
                                    </div>
                                @endif
                                <a href="{{ route('matches.show', $match->id) }}"
                                    class="text-blue-500 text-xs mt-2 block text-center">View Details</a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Semi Finals -->
                <div class="bracket-round mt-8">
                    <h4 class="text-lg font-medium mb-4 text-center">Semi Finals</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($tournament->matches->where('stage', 'semi-final')->sortBy('match_date') as $match)
                            <div class="match-card p-3 border rounded">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-gray-500 text-sm">{{ $match->match_date->format('M j') }}</span>
                                    <span
                                        class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $match->venue }}</span>
                                </div>
                                <div class="team-row flex items-center justify-between mb-1">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team1->logo) }}"
                                            alt="{{ $match->team1->name }}" class="h-6 w-6 rounded-full mr-2">
                                        <span>{{ $match->team1->short_name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="score">{{ $match->team1_score }}/{{ $match->team1_wickets }}</span>
                                    @endif
                                </div>
                                <div class="team-row flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team2->logo) }}"
                                            alt="{{ $match->team2->name }}" class="h-6 w-6 rounded-full mr-2">
                                        <span>{{ $match->team2->short_name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="score">{{ $match->team2_score }}/{{ $match->team2_wickets }}</span>
                                    @endif
                                </div>
                                @if ($match->status == 'completed')
                                    <div class="mt-2 text-center text-sm">
                                        <span class="font-medium">{{ $match->winner->short_name }} won</span>
                                        <span class="block text-xs">{{ $match->result }}</span>
                                    </div>
                                @endif
                                <a href="{{ route('matches.show', $match->id) }}"
                                    class="text-blue-500 text-xs mt-2 block text-center">View Details</a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Final -->
                <div class="bracket-round mt-8">
                    <h4 class="text-lg font-medium mb-4 text-center">Final</h4>
                    <div class="max-w-md mx-auto">
                        @foreach ($tournament->matches->where('stage', 'final')->sortBy('match_date') as $match)
                            <div class="match-card p-4 border rounded-lg bg-gray-50">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-gray-500">{{ $match->match_date->format('l, F j, Y') }}</span>
                                    <span
                                        class="text-sm bg-blue-100 text-blue-800 px-2 py-1 rounded">{{ $match->venue }}</span>
                                </div>
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team1->logo) }}"
                                            alt="{{ $match->team1->name }}" class="h-8 w-8 rounded-full mr-3">
                                        <span class="text-lg">{{ $match->team1->name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="text-lg font-medium">{{ $match->team1_score }}/{{ $match->team1_wickets }}</span>
                                    @endif
                                </div>
                                <div class="text-center my-2">
                                    <span class="text-xl font-bold">VS</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $match->team2->logo) }}"
                                            alt="{{ $match->team2->name }}" class="h-8 w-8 rounded-full mr-3">
                                        <span class="text-lg">{{ $match->team2->name }}</span>
                                    </div>
                                    @if ($match->status == 'completed')
                                        <span
                                            class="text-lg font-medium">{{ $match->team2_score }}/{{ $match->team2_wickets }}</span>
                                    @endif
                                </div>
                                @if ($match->status == 'completed')
                                    <div class="text-center py-3 bg-green-100 rounded">
                                        <div class="text-xl font-bold text-green-800">{{ $match->winner->name }} are
                                            Champions!</div>
                                        <div class="text-sm mt-1">{{ $match->result }}</div>
                                        @if ($match->manOfTheMatch)
                                            <div class="mt-2">
                                                <span class="text-sm">Man of the Match:</span>
                                                <span class="font-medium">{{ $match->manOfTheMatch->name }}</span>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                <a href="{{ route('matches.show', $match->id) }}"
                                    class="text-blue-500 text-sm mt-3 block text-center">View Full Match Details</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tournament-bracket {
            position: relative;
        }

        .bracket-round {
            position: relative;
            padding-bottom: 20px;
        }

        .bracket-round:not(:last-child):after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 20px;
            border-left: 2px dashed #ccc;
            border-right: 2px dashed #ccc;
        }

        .match-card {
            transition: all 0.3s ease;
        }

        .match-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-row {
            padding: 4px 0;
        }

        .score {
            font-weight: bold;
            color: #333;
        }
    </style>
</x-app-layout>
