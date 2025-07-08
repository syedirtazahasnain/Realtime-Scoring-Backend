<x-app-layout>
    @section('title', 'Admin Edit Player')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-6">Admin Edit Player</h2>

                    <form method="POST" action="{{ route('admin.players.update', $player->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Player Name (from users table) -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Player Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $player->user->name) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Playing Role (from player_profiles table) -->
                        <div class="mb-6">
                            <label for="playing_role" class="block text-gray-700 text-sm font-bold mb-2">Playing Role</label>
                            <select name="playing_role" id="playing_role"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="Batsman" {{ $player->playerProfile->playing_role == 'Batsman' ? 'selected' : '' }}>Batsman</option>
                                <option value="Bowler" {{ $player->playerProfile->playing_role == 'Bowler' ? 'selected' : '' }}>Bowler</option>
                                <option value="All-Rounder" {{ $player->playerProfile->playing_role == 'All-Rounder' ? 'selected' : '' }}>All-Rounder</option>
                                <option value="Wicket-Keeper" {{ $player->playerProfile->playing_role == 'Wicket-Keeper' ? 'selected' : '' }}>Wicket-Keeper</option>
                            </select>
                            @error('playing_role')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Player
                            </button>
                            <a href="{{ route('admin.players.index') }}"
                                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
