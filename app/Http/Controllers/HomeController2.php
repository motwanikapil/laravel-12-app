<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    //

    function show() {
        return "student list";
    }

    function add() {
        return "add new student";
    }
}
