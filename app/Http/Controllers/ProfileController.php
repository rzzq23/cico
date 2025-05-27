<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('pages.edit_profile', compact('user')); // Sesuai struktur kamu
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $user = User::find(Auth::id());
        $user->name  = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated!');
    }
}
