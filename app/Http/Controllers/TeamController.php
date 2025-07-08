<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function index(Request $request)
    {


        $search = $request->input('search');

        $teams = Team::with(['group', 'owner', 'players'])
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhereHas('owner', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('group', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    });
            })
            ->orderBy('id', 'desc')
            ->paginate(20);
        $groups = Group::select('id', 'name')->get();
        $users = User::whereDoesntHave('teams')->get();
        return view('user.team', compact('teams', 'search'));
    }

    public function guestTeams(Request $request)
    {
        $search = $request->input('search');
        $teams = Team::with(['group', 'owner', 'players'])
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhereHas('owner', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('group', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    });
            })
            ->orderBy('id', 'desc')
            ->get();
        $groups = Group::select('id', 'name')->get();
        $users = User::whereDoesntHave('teams')->get();
        return view('user.guest-team', compact('teams', 'search'));
    }

    public function show($id)
    {
        $team = Team::with(['players' => function ($query) {
            $query->orderBy('name');
        }])->findOrFail($id);
        return view('user.teams-details', compact('team'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:10',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'owner_id' => 'required|exists:users,id',
            'group_id' => 'required|exists:groups,id'
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('team-logos', 'public');
        }

        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    public function edit(string $id)
    {
        $team = Team::with(['group', 'owner', 'players'])->findOrFail($id);
        return response()->json($team);
    }

    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:10',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'owner_id' => 'required|exists:users,id',
            'group_id' => 'required|exists:groups,id'
        ]);

        $team = Team::findOrFail($id);
        $data = $request->except('logo');

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $data['logo'] = $request->file('logo')->store('team-logos', 'public');
        }

        $team->update($data);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        if ($team->logo) {
            Storage::disk('public')->delete($team->logo);
        }
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }

    public function addMember(Team $team, Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jersey_number' => 'required|string',
            'is_captain' => 'sometimes|boolean',
            'is_vice_captain' => 'sometimes|boolean'
        ]);

        // Check if user is already in this team
        if ($team->players()->where('user_id', $request->user_id)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'This member already exists in the team'
            ]);
        }

        // Check if user is in any other team
        $userTeams = DB::table('team_user')
            ->where('user_id', $request->user_id)
            ->exists();

        if ($userTeams) {
            return response()->json([
                'success' => false,
                'message' => 'This user already belongs to another team'
            ]);
        }

        // Validate captain/vice-captain roles
        $isCaptain = $request->input('is_captain', false);
        $isViceCaptain = $request->input('is_vice_captain', false);

        // Can't be both captain and vice-captain
        if ($isCaptain && $isViceCaptain) {
            return response()->json([
                'success' => false,
                'message' => 'A member cannot be both captain and vice-captain'
            ]);
        }

        // Check if team already has a captain (if assigning new captain)
        if ($isCaptain && $team->players()->where('is_captain', true)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Team already has a captain'
            ]);
        }

        // Check if team already has a vice-captain (if assigning new vice-captain)
        if ($isViceCaptain && $team->players()->where('is_vice_captain', true)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Team already has a vice-captain'
            ]);
        }

        // Add the member
        $team->players()->attach($request->user_id, [
            'jersey_number' => $request->jersey_number,
            'is_captain' => $isCaptain,
            'is_vice_captain' => $isViceCaptain
        ]);

        return response()->json(['success' => true]);
    }

    public function removeMember(Team $team, User $user)
    {
        $team->players()->detach($user->id);
        return response()->json(['success' => true]);
    }
}
