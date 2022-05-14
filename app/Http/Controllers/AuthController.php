<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function registerIndex()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:6',
            'utusanSekolah' => 'required'
        ]);

        $username = $validated['username'];
        $pass = bcrypt($validated['password']);
        $utusan_sekolah = $request->input('utusanSekolah');

        $user = new User();
        $user->username = $username;
        $user->password = $pass;
        $user->utusan_sekolah = $utusan_sekolah;
        $user->level = 'user';
        $user->save();

        $inputan = $request->validate([
            'password' => ['required'],
        ]);

        auth()->login($user);
        
        return redirect()->intended('/admin');

    }
}
