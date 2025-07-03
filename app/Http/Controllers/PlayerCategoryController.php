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
            'bronze' => User::role('player')->whereHas('playerProfile', fn($q) => $q->where('category', 'bronze'))->with('playerProfile')->get(),
        ];
        return view('player-categories.index', compact('categories'));
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:users,id',
            'category' => 'required|in:platinum,diamond,gold,silver,bronze'
        ]);

        $player = User::findOrFail($request->player_id);
        $player->playerProfile()->updateOrCreate([], [
            'category' => $request->category
        ]);

        return response()->json(['success' => true]);
    }

    public function bulkUpdate(Request $request)
    {
        $request->validate([
            'player_ids' => 'required|array',
            'player_ids.*' => 'exists:users,id',
            'category' => 'required|in:platinum,diamond,gold,silver,bronze',
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
