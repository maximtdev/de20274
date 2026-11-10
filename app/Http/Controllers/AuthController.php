<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    function index()
    {
        return view('welcome');
    }
    function login(Request $request)
    {

    }
    function logout(Request $request)
    {

    }
}
