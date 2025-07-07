<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\PlayerProfile;

class DraftController extends Controller
{

    public function index(Tournament $tournament)
    {
        $teams = Team::with('players')->get();
        $players = User::role('player')
            ->with(['playerProfile', 'playerStatistics'])
            ->notInAnyTeam()
            ->get()
            ->sortByDesc(function ($player) {
                $categoryOrder = [
                    'diamond' => 5,
                    'gold' => 4,
                    'silver' => 3,
                    'platinum' => 2,
                    'emerging' => 1,
                ];
                return $categoryOrder[$player->playerProfile->category ?? 'platinum'];
            });

        return view('draft.index', compact('tournament', 'teams', 'players'));
    }

    public function draftPlayer(Request $request, Tournament $tournament)
    {
        $request->validate([
            'player_id' => 'required|exists:users,id',
            'team_id' => 'required|exists:teams,id',
            'jersey_number' => 'required|integer|min:1|max:999',
            'is_captain' => 'sometimes|boolean',
            'is_vice_captain' => 'sometimes|boolean'
        ]);

        $team = Team::findOrFail($request->team_id);
        $player = User::findOrFail($request->player_id);

        // Check if player is already in a team
        if ($player->teams()->exists()) {
            return back()->with('error', 'Player is already in a team!');
        }

        $team->players()->attach($player->id, [
            'jersey_number' => $request->jersey_number,
            'is_captain' => $request->is_captain ?? false,
            'is_vice_captain' => $request->is_vice_captain ?? false
        ]);

        return back()->with('success', 'Player drafted successfully!');
    }

    public function releasePlayer(Request $request, Tournament $tournament)
    {
        $request->validate([
            'player_id' => 'required|exists:users,id',
            'team_id' => 'required|exists:teams,id'
        ]);

        $team = Team::findOrFail($request->team_id);
        $team->players()->detach($request->player_id);

        return back()->with('success', 'Player released successfully!');
    }
}
