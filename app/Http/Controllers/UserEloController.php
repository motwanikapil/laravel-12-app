<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserElo;

class UserEloController extends Controller
{
    function queries() {
        $response = UserElo::all();
        // $response = UserElo::get();
        // $response = UserElo::where('name','kapil')->get();
        // $response = UserElo::where('name','kapil')->first();
        // $response = UserElo::find(1);
        // $response = [$response];

        // $response = UserElo::insert([
        //     'name'=>'kay',
        //     'email'=>'kay@kay.com',
        //     'password'=>'somepassword'
        // ]);

        // if ($response) {
        //     return 'new record added';
        // } else {
        //     return 'new record not added';
        // }

        // $response = UserElo::where('name','kay')->update(['password'=>'reallyrandompassword']);

        // if ($response) {
        //     return 'new record updated';
        // } else {
        //     return 'new record not updated';
        // }

        // $response = UserElo::where('name','kay')->delete();

        // if ($response) {
        //     return 'new record deleted';
        // } else {
        //     return 'new record not deleted';
        // }

        return view('user-elo',['users'=>$response]);
    }
}
