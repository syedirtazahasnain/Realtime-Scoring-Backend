<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Player Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section x-data="{
                        playingRole: '{{ old('playing_role', $player_profile->playing_role ?? '') }}',
                        showBatting: false,
                        showBowling: false,
                        init() {
                            this.updateVisibility(this.playingRole);
                        },
                        updateVisibility(role) {
                            this.showBatting = ['batsman', 'all-rounder', 'wicket-keeper'].includes(role);
                            this.showBowling = ['bowler', 'all-rounder'].includes(role);
                        }
                    }">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Player Profile') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Update your player information and preferences.') }}
                            </p>
                        </header>
                        <form method="post" action="{{ route('player-profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <!-- Playing Role -->
                            <div>
                                <x-input-label for="playing_role" :value="__('Playing Role')" />
                                <select
                                    id="playing_role"
                                    name="playing_role"
                                    x-model="playingRole"
                                    @change="updateVisibility(playingRole)"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('Select your role') }}</option>
                                    <option value="batsman" {{ old('playing_role', $player_profile->playing_role ?? '') == 'batsman' ? 'selected' : '' }}>
                                        {{ __('Batsman') }}
                                    </option>
                                    <option value="bowler" {{ old('playing_role', $player_profile->playing_role ?? '') == 'bowler' ? 'selected' : '' }}>
                                        {{ __('Bowler') }}
                                    </option>
                                    <option value="all-rounder" {{ old('playing_role', $player_profile->playing_role ?? '') == 'all-rounder' ? 'selected' : '' }}>
                                        {{ __('All Rounder') }}
                                    </option>
                                    <option value="wicket-keeper" {{ old('playing_role', $player_profile->playing_role ?? '') == 'wicket-keeper' ? 'selected' : '' }}>
                                        {{ __('Wicket Keeper') }}
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('playing_role')" />
                            </div>

                            <!-- Batting Style (Conditional) -->
                            <div x-show="showBatting" x-transition>
                                <x-input-label for="batting_style" :value="__('Batting Style')" />
                                <select
                                    id="batting_style"
                                    name="batting_style"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('Select batting style') }}</option>
                                    <option value="right-handed" {{ old('batting_style', $player_profile->batting_style ?? '') == 'right-handed' ? 'selected' : '' }}>
                                        {{ __('Right Handed') }}
                                    </option>
                                    <option value="left-handed" {{ old('batting_style', $player_profile->batting_style ?? '') == 'left-handed' ? 'selected' : '' }}>
                                        {{ __('Left Handed') }}
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('batting_style')" />
                            </div>

                            <!-- Bowling Style (Conditional) -->
                            <div x-show="showBowling" x-transition>
                                <x-input-label for="bowling_style" :value="__('Bowling Style')" />
                                <select
                                    id="bowling_style"
                                    name="bowling_style"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('Select bowling style') }}</option>
                                    <option value="fast" {{ old('bowling_style', $player_profile->bowling_style ?? '') == 'fast' ? 'selected' : '' }}>
                                        {{ __('Fast') }}
                                    </option>
                                    <option value="medium" {{ old('bowling_style', $player_profile->bowling_style ?? '') == 'medium' ? 'selected' : '' }}>
                                        {{ __('Medium') }}
                                    </option>
                                    <option value="spin" {{ old('bowling_style', $player_profile->bowling_style ?? '') == 'spin' ? 'selected' : '' }}>
                                        {{ __('Spin') }}
                                    </option>
                                    <option value="leg-spin" {{ old('bowling_style', $player_profile->bowling_style ?? '') == 'leg-spin' ? 'selected' : '' }}>
                                        {{ __('Leg Spin') }}
                                    </option>
                                    <option value="off-spin" {{ old('bowling_style', $player_profile->bowling_style ?? '') == 'off-spin' ? 'selected' : '' }}>
                                        {{ __('Off Spin') }}
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('bowling_style')" />
                            </div>

                            <!-- Fielding Position (Always shown) -->
                            <div>
                                <x-input-label for="fielding_position" :value="__('Preferred Fielding Position')" />
                                <select
                                    id="fielding_position"
                                    name="fielding_position"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('Select preferred position') }}</option>
                                    <option value="slip" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'slip' ? 'selected' : '' }}>
                                        {{ __('Slip') }}
                                    </option>
                                    <option value="gully" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'gully' ? 'selected' : '' }}>
                                        {{ __('Gully') }}
                                    </option>
                                    <option value="point" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'point' ? 'selected' : '' }}>
                                        {{ __('Point') }}
                                    </option>
                                    <option value="cover" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'cover' ? 'selected' : '' }}>
                                        {{ __('Cover') }}
                                    </option>
                                    <option value="mid-off" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'mid-off' ? 'selected' : '' }}>
                                        {{ __('Mid Off') }}
                                    </option>
                                    <option value="mid-on" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'mid-on' ? 'selected' : '' }}>
                                        {{ __('Mid On') }}
                                    </option>
                                    <option value="wicket-keeper" {{ old('fielding_position', $player_profile->fielding_position ?? '') == 'wicket-keeper' ? 'selected' : '' }}>
                                        {{ __('Wicket Keeper') }}
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('fielding_position')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'player-profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('Saved.') }}
                                    </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
