<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use App\Models\PlayerProfile;
use App\Models\player_profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Update the user's avatar.
     */
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $user = Auth::user();

        // Delete old avatar if exists
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Upload new avatar
        $path = AppHelper::uploadImage($request->file('avatar'), 'avatars');
        $user->profile_picture = $path;
        $user->save();

        return back()->with('status', 'avatar-updated');
    }

    /**
     * Update the Player Form.
     */
    public function storePlayerForm(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'playing_role' => 'required|in:batsman,bowler,all_rounder,wicket_keeper',
            'batting_style' => 'nullable|required_if:playing_role,batsman,all_rounder,wicket_keeper|in:right-handed,left-handed',
            'bowling_style' => 'nullable|required_if:playing_role,bowler,all_rounder|in:fast,medium,spin,leg-spin,off-spin',
            'fielding_position' => 'required|in:slip,gully,point,cover,mid-off,mid-on,wicket_keeper'
        ]);

        // Create or update the player profile
        $player_profile = PlayerProfile::updateOrCreate(
            ['user_id' => Auth::id()],
            $validated
        );
        $player_profile->player->assignRole('player');

        return back()->with(['status' => 'player-profile-updated',
            'player_profile' => $player_profile]);
    }

    /**
     * This function is used to register as
     * player
     */
    public function playerRegistration(Request $request): View
    {
        $player_profile = PlayerProfile::where('user_id' ,Auth::id())->first();

        return view('profile.player-profile', [
            'user' => $request->user(),
            'player_profile' => $player_profile,
        ]);
    }
}
