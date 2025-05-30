<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with(['group', 'owner','players'])->orderBy('id','desc')->paginate(10);
        $groups = Group::select('id','name')->get();
        $users = User::all();
        // dd('teams',$teams);
        return view('user.team', compact('teams', 'groups', 'users'));
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
        $team = Team::with(['group', 'owner','players'])->findOrFail($id);
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
}
