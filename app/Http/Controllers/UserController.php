<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getUser() {
        // return "Kapil Motwani";
        return view('user');
    }

    function aboutUser() {
        return "I am a full stack developer";
    }

    function getUsername($name) {
        // return "this is " . $name;
        return view('getuser',['name'=>$name]);
    }

    function adminLogin() {
        if(View::exists('admin.login')) {
            return view('admin.login');
        } else {
            echo 'No view found';
        }
    }

    function userHome() {
        $name='kapil';
        $users=['kapil','coder','motwani'];
        return view('home',['name'=>$name, 'users'=>$users]);
    }

    function userAbout() {
        $name='kapil';
        $users=['kapil','coder','motwani'];
        return view('about');
    }

    function userForm() {
        return view('user-form');
    }

    function addUser(Request $request) {
        // echo "add new user function called";
        // return request;
        // echo "Username is $request->username"
        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | max:20 | uppercase',
            'skills'=>'required'
        ], [
            'username.required'=>'username cannot be empty',
            'username.min'=>'username should be atleast 3 characters',
            'username.max'=>'username should be below 10 characters',
            'email.email'=>'not a valid email',
            'city.uppercase'=>'city should be uppercase'
        ]);

        return $request;
    }

    function getUsers() {
        return DB::select('select * from users');
    }
}
