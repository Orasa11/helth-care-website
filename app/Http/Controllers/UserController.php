<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Display a list of users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        // Validation logic here

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Add other user properties as needed
        ]);

        // Redirect to a success page or return a response
    }

    // Display the specified user
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified user
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Update the specified user in the database
    public function update(Request $request, User $user)
    {
        // Validation logic here

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update other user properties as needed
        ]);

        // Redirect to a success page or return a response
    }

    // Remove the specified user from the database
    public function destroy(User $user)
    {
        $user->delete();

        // Redirect to a success page or return a response
    }
}
