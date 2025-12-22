<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // <--- IMPORTANT: Needed for password hashing

class UserController extends Controller
{
    
    public function index()
    {
        // Get all users from the database
        $users = User::all();
        // Send them to the view
        return view('users.index', compact('users'));
    }

    // 2. SHOW ABOUT PAGE (Your custom page)
    public function about()
    {
        return view('about');
    }

    // 3. SHOW CREATE FORM
    public function create()
    {
        return view('users.create');
    }

    // 4. STORE NEW USER (Handle Form Submit)
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Create User
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        // Redirect
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    // 5. SHOW EDIT FORM
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // 6. UPDATE USER (Handle Edit Submit)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            // Ignore current user's email during unique check
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        // Update Logic
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // Only update password if a new one was typed
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    // 7. DELETE USER
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}