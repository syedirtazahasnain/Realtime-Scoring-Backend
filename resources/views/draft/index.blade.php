<x-app-layout>
    <x-slot name="title">Player Draft - {{ $tournament->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Player Draft - {{ $tournament->name }}</h1>
            <div class="flex space-x-4">
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-blue-500 rounded-full mr-2"></div>
                    <span>Diamond</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-yellow-500 rounded-full mr-2"></div>
                    <span>Gold</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-gray-400 rounded-full mr-2"></div>
                    <span>Silver</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-amber-800 rounded-full mr-2"></div>
                    <span>Platinum</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-amber-800 rounded-full mr-2"></div>
                    <span>Emerging</span>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Available Players -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-semibold mb-4">Available Players</h2>

                    <div class="space-y-3">
                        @forelse($players as $player)
                            @php
                                $category = $player->playerProfile->category ?? 'platinum';
                                $bgColors = [
                                    'diamond' => 'bg-blue-100 border-blue-300',
                                    'gold' => 'bg-yellow-100 border-yellow-300',
                                    'silver' => 'bg-gray-100 border-gray-300',
                                    'emerging' => 'bg-amber-100 border-amber-300',
                                    'platinum' => 'bg-amber-100 border-amber-300',
                                ];
                                $categoryClass = $bgColors[$category] ?? 'bg-gray-100';
                            @endphp

                            <div class="flex justify-between items-center p-3 rounded border {{ $categoryClass }}">
                                <div>
                                    <div class="font-medium">{{ $player->name }}</div>
                                    <div class="text-sm text-gray-600">
                                        {{ $player->playerProfile->playing_role ?? 'All-rounder' }} |
                                        {{ ucfirst($category) }}
                                    </div>
                                </div>

                                <form action="{{ route('draft.draft', $tournament) }}" method="POST"
                                    class="flex items-center space-x-2">
                                    @csrf
                                    <input type="hidden" name="player_id" value="{{ $player->id }}">

                                    <select name="team_id" class="text-sm rounded border-gray-300" required>
                                        <option value="">Select Team</option>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>

                                    <input type="number" name="jersey_number" placeholder="#"
                                        class="w-12 text-sm rounded border-gray-300" min="1" max="999"
                                        required>

                                    <button type="submit"
                                        class="text-sm bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">
                                        Draft
                                    </button>
                                </form>
                            </div>
                        @empty
                            <div class="text-gray-500">No available players for draft</div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Team Rosters -->
            <div class="md:col-span-2 space-y-6">
                @foreach ($teams as $team)
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">{{ $team->name }}</h2>
                            <span class="text-sm text-gray-600">{{ $team->players->count() }} players</span>
                        </div>

                        <div class="space-y-3">
                            @forelse($team->players as $player)
                                @php
                                    $category = $player->playerProfile->category ?? 'platinum';
                                    $bgColors = [
                                        'diamond' => 'bg-blue-100 border-blue-300',
                                        'gold' => 'bg-yellow-100 border-yellow-300',
                                        'silver' => 'bg-gray-100 border-gray-300',
                                        'platinum' => 'bg-amber-100 border-amber-300',
                                        'emerging' => 'bg-gray-100 border-gray-300',
                                    ];
                                    $categoryClass = $bgColors[$category] ?? 'bg-gray-100';
                                @endphp

                                <div class="flex justify-between items-center p-3 rounded border {{ $categoryClass }}">
                                    <div>
                                        <div class="font-medium">
                                            #{{ $player->pivot->jersey_number }} {{ $player->name }}
                                            @if ($player->pivot->is_captain)
                                                <span
                                                    class="text-xs bg-yellow-500 text-white rounded px-1 ml-1">C</span>
                                            @elseif($player->pivot->is_vice_captain)
                                                <span class="text-xs bg-gray-500 text-white rounded px-1 ml-1">VC</span>
                                            @endif
                                        </div>
                                        <div class="text-sm text-gray-600">
                                            {{ $player->playerProfile->playing_role ?? 'All-rounder' }} |
                                            {{ ucfirst($category) }}
                                        </div>
                                    </div>

                                    <form action="{{ route('draft.release', $tournament) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="player_id" value="{{ $player->id }}">
                                        <input type="hidden" name="team_id" value="{{ $team->id }}">
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            @empty
                                <div class="text-gray-500">No players drafted yet</div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
