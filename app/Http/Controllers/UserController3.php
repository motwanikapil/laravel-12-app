<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController3 extends Controller
{
    function getUsers() {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/1");
        $response = $response->body();
        return view('user3', ['data'=>json_decode($response)]);
    }
}
