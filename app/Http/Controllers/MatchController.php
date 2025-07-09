<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Matches;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\TournamentStanding;

class MatchController extends Controller
{
    public function index()
    {
        $matches = Matches::with(['team1', 'team2', 'tournament', 'winner'])
            ->orderBy('match_date', 'desc')
            ->paginate(10);
        $tournaments = Tournament::all();
            return view('matches.index', compact('matches', 'tournaments'));
    }

    public function create(Request $request)
    {
        $tournaments = Tournament::all();
        $teams = Team::all();
        $players = User::role('player')->get();

        $selectedTournament = $request->input('tournament_id')
            ? Tournament::find($request->input('tournament_id'))
            : null;

        return view('matches.create', compact('tournaments', 'teams', 'players', 'selectedTournament'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'team1_id' => 'required|different:team2_id|exists:teams,id',
            'team2_id' => 'required|different:team1_id|exists:teams,id',
            'match_date' => 'required|date',
            'venue' => 'required|string|max:255',
            'status' => 'required|in:scheduled,completed,abandoned',
            'toss_winner_id' => 'required|exists:teams,id',
            'toss_decision' => 'required|in:bat,field',
        ]);

        $match = Matches::create($validated);

        return redirect()->route('matches.show', $match->id)
            ->with('success', 'Match created successfully!');
    }

    public function show(Matches $match)
    {
        $match->load([
            'team1.players',
            'team2.players',
            'tournament',
            'winner',
            'tossWinner',
            'manOfTheMatch',
            'innings.battingTeam',
            'innings.bowlingTeam',
            // 'innings.batsmen.player',
            // 'innings.bowlers.player'
            'innings.battingScores.player',
            'innings.bowlingFigures.player'
        ]);

        return view('matches.show', compact('match'));
    }

    public function edit(Matches $match)
    {
        $tournaments = Tournament::all();
        $teams = Team::all();
        $players = User::role('player')->get();

        return view('matches.edit', compact('match', 'tournaments', 'teams', 'players'));
    }

    public function update(Request $request, Matches $match)
    {
        $validated = $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'team1_id' => 'required|different:team2_id|exists:teams,id',
            'team2_id' => 'required|different:team1_id|exists:teams,id',
            'match_date' => 'required|date',
            'venue' => 'required|string|max:255',
            'status' => 'required|in:scheduled,completed,abandoned',
            'winner_id' => 'nullable|exists:teams,id',
            'toss_winner_id' => 'required|exists:teams,id',
            'toss_decision' => 'required|in:bat,field',
            'team1_score' => 'nullable|integer',
            'team1_wickets' => 'nullable|integer|between:0,10',
            'team1_overs' => 'nullable|numeric',
            'team2_score' => 'nullable|integer',
            'team2_wickets' => 'nullable|integer|between:0,10',
            'team2_overs' => 'nullable|numeric',
            'result' => 'nullable|string',
            'man_of_the_match_id' => 'nullable|exists:users,id',
            'summary' => 'nullable|string'
        ]);

        $match->update($validated);

        return redirect()->route('matches.show', $match->id)
            ->with('success', 'Match updated successfully!');
    }

    public function destroy(Matches $match)
    {
        $match->delete();

        return redirect()->route('matches.index')
            ->with('success', 'Match deleted successfully!');
    }

    public function groupMatches($tournamentId, $group)
    {
        $tournament = Tournament::with(['matches' => function ($query) use ($group) {
            $query->whereHas('team1.group', function ($q) use ($group) {
                $q->where('name', $group);
            })->orWhereHas('team2.group', function ($q) use ($group) {
                $q->where('name', $group);
            });
        }])->findOrFail($tournamentId);

        $standings = TournamentStanding::where('tournament_id', $tournamentId)
            ->whereHas('team.group', function ($query) use ($group) {
                $query->where('name', $group);
            })
            ->orderBy('points', 'desc')
            ->orderBy('net_run_rate', 'desc')
            ->get();

        return view('matches.group', compact('tournament', 'group', 'standings'));
    }

    public function knockoutStage($tournamentId)
    {
        $tournament = Tournament::with(['matches' => function ($query) {
            $query->whereDoesntHave('team1.group')
                ->orWhereDoesntHave('team2.group');
        }])->findOrFail($tournamentId);

        return view('matches.knockout', compact('tournament'));
    }
}
