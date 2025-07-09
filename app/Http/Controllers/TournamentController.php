<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::withCount('matches')->latest()->paginate(10);
        return view('tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'format' => 'required|in:round-robin,knockout,group-knockout'
        ]);

        Tournament::create($validated);

        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament created successfully!');
    }

    public function show(Tournament $tournament)
    {
        $tournament->load(['matches.team1', 'matches.team2', 'matches.winner', 'standings.team']);

        // Separate matches by group if it's a group tournament
        $groupMatches = [];
        if ($tournament->format === 'group-knockout') {
            $groups = Group::all();
            foreach ($groups as $group) {
                $groupMatches[$group->name] = $tournament->matches()
                    ->where(function ($query) use ($group) {
                        $query->whereHas('team1.group', fn($q) => $q->where('id', $group->id))
                            ->orWhereHas('team2.group', fn($q) => $q->where('id', $group->id));
                    })
                    ->get();
            }
        }

        return view('tournaments.show', compact('tournament', 'groupMatches'));
    }

    public function edit(Tournament $tournament)
    {
        return view('tournaments.edit', compact('tournament'));
    }

    public function update(Request $request, Tournament $tournament)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'format' => 'required|in:round-robin,knockout,group-knockout'
        ]);

        $tournament->update($validated);

        return redirect()->route('tournaments.show', $tournament->id)
            ->with('success', 'Tournament updated successfully!');
    }

    public function destroy(Tournament $tournament)
    {
        $tournament->delete();
        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament deleted successfully!');
    }
}
