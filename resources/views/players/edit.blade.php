// resources/views/players/edit.blade.php
<x-app-layout>
    <x-slot name="title">Edit Player - {{ $player->name }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Edit Player</h1>
            <a href="{{ route('player-categories.index') }}" class="text-blue-500 hover:text-blue-700">
                Back to Categories
            </a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <form method="POST" action="{{ route('players.update', $player->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Player Photo -->
                    <div class="md:col-span-2">
                        <div class="flex items-center space-x-6">
                            <div class="shrink-0">
                                <img id="photoPreview" class="h-24 w-24 rounded-full object-cover"
                                    src="{{ $player->profile_picture ? asset('storage/' . $player->profile_picture) : asset('images/default-player.png') }}"
                                    alt="Player photo">
                            </div>
                            <div class="w-full">
                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="profile_picture" id="profile_picture"
                                        class="block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-50 file:text-blue-700
                                        hover:file:bg-blue-100">
                                </label>
                                @if ($player->profile_picture)
                                    <div class="mt-2 flex items-center">
                                        <input type="checkbox" id="remove_profile_picture" name="remove_profile_picture"
                                            class="mr-2">
                                        <label for="remove_profile_picture" class="text-sm text-gray-600">Remove current
                                            photo</label>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Basic Info -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $player->name) }}"
                            required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="emp_id" class="block text-sm font-medium text-gray-700">Employee ID *</label>
                        <input type="text" id="emp_id" name="emp_id" value="{{ old('emp_id', $player->emp_id) }}"
                            required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Player Profile -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category *</label>
                        <select id="category" name="category" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="platinum"
                                {{ old('category', optional($player->playerProfile)->category) == 'platinum' ? 'selected' : '' }}>
                                Platinum</option>
                            <option value="diamond"
                                {{ old('category', optional($player->playerProfile)->category) == 'diamond' ? 'selected' : '' }}>
                                Diamond</option>
                            <option value="gold"
                                {{ old('category', optional($player->playerProfile)->category) == 'gold' ? 'selected' : '' }}>
                                Gold</option>
                            <option value="silver"
                                {{ old('category', optional($player->playerProfile)->category) == 'silver' ? 'selected' : '' }}>
                                Silver</option>
                            <option value="emerging"
                                {{ old('category', optional($player->playerProfile)->category) == 'emerging' ? 'selected' : '' }}>
                                Emerging</option>
                        </select>
                    </div>

                    <div>
                        <label for="playing_role" class="block text-sm font-medium text-gray-700">Playing Role *</label>
                        <select id="playing_role" name="playing_role" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="batsman"
                                {{ old('playing_role', optional($player->playerProfile)->playing_role) == 'batsman' ? 'selected' : '' }}>
                                Batsman</option>
                            <option value="bowler"
                                {{ old('playing_role', optional($player->playerProfile)->playing_role) == 'bowler' ? 'selected' : '' }}>
                                Bowler</option>
                            <option value="all-rounder"
                                {{ old('playing_role', optional($player->playerProfile)->playing_role) == 'all-rounder' ? 'selected' : '' }}>
                                All-rounder</option>
                            <option value="wicket-keeper"
                                {{ old('playing_role', optional($player->playerProfile)->playing_role) == 'wicket-keeper' ? 'selected' : '' }}>
                                Wicket Keeper</option>
                        </select>
                    </div>

                    <!-- Team Assignment -->
                    <div class="md:col-span-2">
                        <label for="teams" class="block text-sm font-medium text-gray-700">Teams</label>
                        <select id="teams" name="teams[]" multiple
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 select2-multiple">
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}"
                                    {{ $player->teams->contains($team->id) ? 'selected' : '' }}>
                                    {{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Update Player
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Photo preview
        document.getElementById('profile_picture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('photoPreview').src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Initialize Select2 for multiple team selection
        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Select teams",
                allowClear: true
            });
        });
    </script>
</x-app-layout>
