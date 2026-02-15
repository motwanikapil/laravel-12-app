<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    function login(Request $request) {
        $request->session()->put('user',$request->input('user'));
        return redirect('profile');
    }

    function logout() {
        session()->pull('user');
        return redirect('login');
    }
}