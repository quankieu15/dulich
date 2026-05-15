<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
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
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user && password_verify($request->password, $user->password)) {

            session([
                'isLogin' => true,
                'user_id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'role' => $user->role
            ]);

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            }

            return redirect('/');
        }

        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}