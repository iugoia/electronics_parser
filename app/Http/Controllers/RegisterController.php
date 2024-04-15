<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(RegisterRequest $request)
    {
        $user = User::create([
                'password' => bcrypt($request->password)
            ] + $request->except('password_confirmation'));

        Auth::login($user);

        return redirect()->back();
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials, true)) {
            return redirect()->back()->with('error', 'Пользователь не найден');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
