<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// this thing is known as database query builder
// if this thing is used with model then it is known as eloquent: query builder.

class UsersController extends Controller
{
    function queries() {
        // select * from users;
        $result = DB::table('users')->find(1);
        $result = [$result];
        // $result = DB::table('users')->where('name','kapil')->get();

        // $result = DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tony@test.com',
        //     'password'=>'12345'
        // ]);

        // if ($result) {
        //     return 'data inserted';
        // } else {
        //     return 'data not inserted';
        // }

        // $result = DB::table('users')->where('name','tony')->update([
        //     'password'=>'some_random_password'
        // ]);

        // if ($result) {
        //     return 'data updated';
        // } else {
        //     return 'data not updated';
        // }

        // $result = DB::table('users')->where('name','tony')->delete();

        // if ($result) {
        //     return 'data deleted';
        // } else {
        //     return 'data not deleted';
        // }


        return view('users',['users'=>$result]);
    }
}
