<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use App\Models\PlayerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    public function create()
    {
        $teams = Team::all();
        $categories = PlayerProfile::getCategories();
        $playingRoles = ['batter', 'bowler', 'all-rounder', 'wicket-keeper'];

        return view('players.create', compact('teams', 'categories', 'playingRoles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email',
            'emp_id' => 'required|string|max:255|unique:users,emp_id',
            'photo' => 'nullable|image|max:2048',
            'category' => 'required|in:platinum,diamond,gold,silver,emerging',
            'playing_role' => 'required|in:batsman,bowler,all_rounder,wicket_keeper',
            'teams' => 'nullable|array',
            'teams.*' => 'exists:teams,id'
        ]);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'emp_id' => $request->emp_id,
            'email' => $request->email,
            'password' => bcrypt('password') // Default password
        ]);

        // Assign player role
        $user->assignRole('player');

        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('player-photos', 'public');
            $user->profile_picture = $photoPath;
            $user->save();
        }

        // Create player profile
        $user->playerProfile()->create([
            'category' => $request->category,
            'playing_role' => $request->playing_role
        ]);

        // Assign to teams if specified
        if ($request->filled('teams')) {
            $user->teams()->sync($request->teams);
        }

        return redirect()->route('player-categories.index')
            ->with('success', 'Player created successfully!');
    }

    public function edit(User $player)
    {
        $teams = Team::all();
        $categories = PlayerProfile::getCategories();
        $playingRoles = ['batter', 'bowler', 'all-rounder', 'wicket-keeper'];

        return view('players.edit', compact('player', 'teams', 'categories', 'playingRoles'));
    }

    public function update(Request $request, User $player)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'emp_id' => 'required|string|max:255|unique:users,emp_id,' . $player->id,
            'photo' => 'nullable|image|max:2048',
            'category' => 'required|in:platinum,diamond,gold,silver,emerging',
            'playing_role' => 'required|in:batsman,bowler,all_rounder,wicket_keeper',
            'teams' => 'nullable|array',
            'teams.*' => 'exists:teams,id'
        ]);

        // Update user
        $player->update([
            'name' => $request->name,
            'emp_id' => $request->emp_id
        ]);
        $player->assignRole('player');

        // Handle photo upload
        $photoPath = $player->profile_picture ?? null;
        if ($request->hasFile('photo')) {
            if ($photoPath) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = $request->file('photo')->store('player-photos', 'public');
            $player->profile_picture = $photoPath;
            $player->save();
        }

        // Update or create player profile
        $player->playerProfile()->updateOrCreate(
            ['user_id' => $player->id],
            [
                'category' => $request->category,
                'playing_role' => $request->playing_role
            ]
        );

        // Sync teams
        $player->teams()->sync($request->teams ?? []);

        return redirect()->route('player-categories.index')
            ->with('success', 'Player updated successfully!');
    }


    public function index()
    {
        // Get players grouped by their playing role
        $batters = User::role('player')
            ->with(['playerProfile', 'playerStatistics', 'teams'])
            ->whereHas('playerProfile', function ($query) {
                $query->where('playing_role', 'batsman');
            })
            ->get()
            ->map(function ($player) {
                return $this->formatPlayerData($player);
            });

        $bowlers = User::role('player')
            ->with(['playerProfile', 'playerStatistics', 'teams'])
            ->whereHas('playerProfile', function ($query) {
                $query->where('playing_role', 'bowler');
            })
            ->get()
            ->map(function ($player) {
                return $this->formatPlayerData($player);
            });

        $allRounders = User::role('player')
            ->with(['playerProfile', 'playerStatistics', 'teams'])
            ->whereHas('playerProfile', function ($query) {
                $query->where('playing_role', 'all_rounder');
            })
            ->get()
            ->map(function ($player) {
                return $this->formatPlayerData($player);
            });
        $sponsors = [
            ['src' => '1.png', 'alt' => 'KFC'],
            ['src' => '2.png', 'alt' => 'Sports network'],
            ['src' => '3.png', 'alt' => 'BKT'],
            ['src' => '4.png', 'alt' => 'kayo'],
            ['src' => '5.png', 'alt' => 'Foxtel'],
            ['src' => '6.png', 'alt' => 'weber']
        ];
        return view('players', compact('batters', 'bowlers', 'allRounders', 'sponsors'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $players = User::with('playerProfile')
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('emp_id', 'like', "%{$query}%")
                    ->orWhereHas('playerProfile', function ($q2) use ($query) {
                        $q2->where('playing_role', 'like', "%{$query}%");
                    });
            })
            ->limit(10)
            ->get()
            ->map(function ($player) {
                $profile = $player->playerProfile;

                return [
                    'id' => $player->id,
                    'name' => $player->name,
                    'emp_id' => $player->emp_id,
                    'playing_role' => $profile->playing_role ?? null,
                    'category' => $profile->category ?? null,
                    'photo_url' => $profile && $profile->photo
                        ? asset('storage/' . $profile->photo)
                        : asset('images/default-avatar.png'),
                ];
            });

        return response()->json($players);
    }

    private function formatPlayerData($player)
    {
        // Determine which stats to show based on player role
        $profile = $player->playerProfile;
        $stats = $player->playerStatistics;
        $team = $player->teams->first();

        if ($profile->playing_role === 'batter') {
            $score = $stats->total_runs ?? 0;
            $stat = 'runs';
        } elseif ($profile->playing_role === 'bowler') {
            $score = $stats->total_wickets ?? 0;
            $stat = 'wickets';
        } else { // all-rounder
            $score = ($stats->total_runs ?? 0) . '/' . ($stats->total_wickets ?? 0);
            $stat = 'runs/wkts';
        }

        return [
            'image' => $player->profile_picture ? 'storage/' . $player->profile_picture : 'images/home/avatar_cricket.png',
            'name' => $player->name,
            'type' => ucfirst($profile->playing_role),
            'score' => $score,
            'stat' => $stat,
            'team' => $team ? $team->short_name : 'N/A'
        ];
    }
}
