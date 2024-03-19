<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Implementation for user registration
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'name' => $validatedData['name'],
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        // Implementation for user login
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
    public function update(Request $request, $id)
    {
        // Implementation for updating user details
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
                'username' => 'required|unique:users,username,' . $user->id,
                'password' => 'required|min:6',
                'name' => 'required',
            ]);

        $user->update([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'name' => $validatedData['name'],
        ]);

        return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);
    }

    public function get($id)
    {
        // Implementation for retrieving user details
        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    public function logout(Request $request)
    {
        // Implementation for user logout
        $request->user()->token()->revoke();
        Auth::logout();
        return response()->json(['message' => 'Logout successful'], 200);
    }
}
