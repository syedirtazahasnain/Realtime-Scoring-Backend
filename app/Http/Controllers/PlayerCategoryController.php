<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PlayerProfile;

class PlayerCategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'platinum' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'platinum'))->with('playerProfile')->get(),
            'diamond' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'diamond'))->with('playerProfile')->get(),
            'gold' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'gold'))->with('playerProfile')->get(),
            'silver' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'silver'))->with('playerProfile')->get(),
            'emerging' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'emerging'))->with('playerProfile')->get(),
        ];

        // Get all players not assigned to any category
        $uncategorizedPlayers = User::where('is_admin', false)
            ->where(function ($query) {
                $query->whereDoesntHave('playerProfile')
                    ->orWhereHas('playerProfile', function ($q) {
                        $q->whereNull('category');
                    });
            })
            ->with(['playerProfile' => function ($query) {
                $query->withDefault([
                    'category' => null
                ]);
            }])
            ->get();
        return view('player-categories.index', compact('categories', 'uncategorizedPlayers'));
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:users,id',
            'category' => 'required|in:platinum,diamond,gold,silver,emerging'
        ]);

        $player = User::findOrFail($request->player_id);
        $player->assignRole('player');
        $player->playerProfile()->updateOrCreate([], [
            'category' => $request->category,
            'playing_role' => $request->playing_role ?? 'batsman'
        ]);

        return response()->json(['success' => true]);
    }

    public function bulkUpdate(Request $request)
    {
        $request->validate([
            'player_ids' => 'required|array',
            'player_ids.*' => 'exists:users,id',
            'category' => 'required|in:platinum,diamond,gold,silver,emerging',
            'playing_role' => 'nullable|in:batter,bowler,all-rounder,wicket-keeper'
        ]);

        PlayerProfile::whereIn('user_id', $request->player_ids)
            ->update([
                'category' => $request->category,
                'playing_role' => $request->playing_role ?? 'all-rounder'
            ]);

        return back()->with('success', 'Players updated successfully!');
    }
}
