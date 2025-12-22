<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ 
   public function login(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Invalid credentials');
    }
    $token = $user->createToken('api-token')->plainTextToken;
    $request->session()->put('user_id', $user->id);
    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
        'user' => $user
    ]);
}

public function showLogin()
{
    return view('login'); 
}
 public function showRegister()
{
    return view('register');
}
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken('api-token')->plainTextToken;
    $request->session()->put('user_id', $user->id);

    return response()->json([
        'message' => 'Registration successful',
        'token' => $token,
        'user' => $user
    ]);
}
}
