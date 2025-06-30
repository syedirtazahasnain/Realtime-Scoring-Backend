<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Picture') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your profile picture.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update-avatar') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="flex items-center gap-4">
            <!-- Current Avatar -->
            <div class="shrink-0">
                @if($user->profile_picture)
                    <img class="h-16 w-16 rounded-full object-cover" src="{{ asset('storage/' . $user->profile_picture) }}" alt="Current profile photo">
                @else
                    <!-- Show default avatar or initials -->
                    <div class="h-16 w-16 rounded-full bg-gray-300 flex items-center justify-center text-xl font-semibold text-gray-600">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                @endif
            </div>

            <!-- Avatar Upload -->
            <div class="w-full">
                <x-input-label for="avatar" :value="__('Upload new photo')" />
                <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" />
                <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'avatar-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Avatar updated.') }}
                </p>
            @endif
        </div>
    </form>
</section>
