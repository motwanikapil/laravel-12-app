<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show() {
        return 'this is the show function';
    }

    function add() {
        return 'this is the show function';
    }

    function delete() {
        return 'this is the show function';
    }

    function about($name) {
        return $name;
    }
}
