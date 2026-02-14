<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        // return view('home3');
        return to_route('abt'); // used for named routes.
    }

    function user2() {
        return to_route('user2', ['name'=>'kapil']);
    }
}
