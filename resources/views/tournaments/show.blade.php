<x-app-layout>
    <x-slot name="title">{{ $tournament->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">{{ $tournament->name }}</h1>
                <div class="flex items-center space-x-4 mt-2">
                    <span class="text-gray-600">{{ $tournament->location }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600">{{ $tournament->start_date->format('M j, Y') }} - {{ $tournament->end_date->format('M j, Y') }}</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-600">{{ ucfirst(str_replace('-', ' ', $tournament->format)) }}</span>
                </div>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('tournaments.edit', $tournament->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                    Edit Tournament
                </a>
                <a href="{{ route('matches.create', ['tournament_id' => $tournament->id]) }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                    Add Match
                </a>
            </div>
        </div>

        @if($tournament->description)
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-semibold mb-2">Description</h2>
                <p class="text-gray-700">{{ $tournament->description }}</p>
            </div>
        @endif

        @if($tournament->format === 'group-knockout')
            <!-- Group Stage Navigation -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-xl font-semibold">Group Stage</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6">
                    @foreach($groupMatches as $groupName => $matches)
                        <a href="{{ route('matches.group', ['tournament' => $tournament->id, 'group' => $groupName]) }}"
                           class="bg-gray-50 hover:bg-gray-100 rounded-lg p-4 text-center transition">
                            <h3 class="font-medium text-lg">{{ $groupName }}</h3>
                            <p class="text-sm text-gray-500">{{ $matches->count() }} matches</p>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Knockout Stage Navigation -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-xl font-semibold">Knockout Stage</h2>
                </div>
                <div class="p-6">
                    <a href="{{ route('matches.knockout', $tournament->id) }}"
                       class="inline-block bg-blue-50 hover:bg-blue-100 text-blue-600 font-medium rounded-lg px-6 py-3 transition">
                        View Knockout Stage Matches
                    </a>
                </div>
            </div>
        @else
            <!-- All Matches for non-group tournaments -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-xl font-semibold">All Matches</h2>
                </div>
                <div class="divide-y divide-gray-200">
                    @forelse($tournament->matches->sortBy('match_date') as $match)
                        <div class="p-6 hover:bg-gray-50">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center">
                                            <img src="{{ asset('storage/' . $match->team1->logo) }}" alt="{{ $match->team1->name }}" class="h-8 w-8 rounded-full mr-2">
                                            <span class="font-medium">{{ $match->team1->short_name }}</span>
                                        </div>
                                        <span class="text-gray-500">vs</span>
                                        <div class="flex items-center">
                                            <span class="font-medium">{{ $match->team2->short_name }}</span>
                                            <img src="{{ asset('storage/' . $match->team2->logo) }}" alt="{{ $match->team2->name }}" class="h-8 w-8 rounded-full ml-2">
                                        </div>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $match->match_date->format('M j, Y h:i A') }} • {{ $match->venue }}
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="block text-sm font-medium
                                        {{ $match->status == 'completed' ? 'text-green-600' : 'text-blue-600' }}">
                                        {{ ucfirst($match->status) }}
                                    </span>
                                    @if($match->status == 'completed')
                                        <span class="text-sm text-gray-600">{{ $match->winner->short_name }} won</span>
                                    @endif
                                    <a href="{{ route('matches.show', $match->id) }}" class="text-blue-500 text-sm mt-1 block">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="p-6 text-center text-gray-500">
                            No matches scheduled yet
                        </div>
                    @endforelse
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
