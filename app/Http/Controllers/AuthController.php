<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    function index()
    {
        return view('welcome');
    }
    function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = User::where('login', $request->login)->first();

            if ($user) {
                Auth::login($user);
                return redirect('product');
            }
            return back()->withErrors(['login' => 'Пользователь с таким логином не найден.']);
        }
        return view('login');
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
