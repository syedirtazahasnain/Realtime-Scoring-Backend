<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Group;
use App\Models\Matches;
use App\Models\Tournament;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * This function is used to update and store the
     * group
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $group = Group::findOrFail($id);
        $group->update([
            'name' => $request->name,
            'picture' => $request->name,
            'status' => $request->name,
        ]);
    }

    /**
     * This function is used for home page
     * guest user
     */
    public function home()
    {
        $matches = Matches::with(['team1', 'team2', 'tournament', 'winner'])
            ->orderBy('match_date', 'desc')
            ->paginate(10);
        $tournaments = Tournament::all();
        $blogs = Blog::select('title','slug','thumbnail','content')->orderBy('id','desc')->limit(2)->get();
        return view('home', compact('matches', 'tournaments','blogs'));
    }
}
