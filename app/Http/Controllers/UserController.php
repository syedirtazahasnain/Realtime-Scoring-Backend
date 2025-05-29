<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('contact')->select('id', 'name', 'email', 'emp_id')->paginate(10);
        return view('user.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'emp_id' => 'required|string|unique:users,emp_id',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'd_o_j' => 'nullable|date',
            'age' => 'nullable|integer',
            'city' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'emp_id' => $request->emp_id,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Contacts::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'address' => $request->address,
                'd_o_j' => $request->d_o_j,
                'age' => $request->age,
                'city' => $request->city,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::with('contact')->findOrFail($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'emp_id' => 'required|string|unique:users,emp_id,' . $id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'd_o_j' => 'nullable|date',
            'age' => 'nullable|integer',
            'city' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'emp_id' => $request->emp_id,
        ]);

        $contact = Contacts::where('user_id', $id)->first();
        if ($contact) {
            $contact->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'd_o_j' => $request->d_o_j,
                'age' => $request->age,
                'city' => $request->city,
                'status' => $request->status,
            ]);
        } else {
            Contacts::create([
                'user_id' => $id,
                'phone' => $request->phone,
                'address' => $request->address,
                'd_o_j' => $request->d_o_j,
                'age' => $request->age,
                'city' => $request->city,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
