<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoutesController extends Controller
{
    function get() {
        return 'get route method';
    }

    function post(Request $request) {
        return 'post route method';
    }

    function put(Request $request) {
        return 'put route method';
    }

    function delete() {
        return 'delete route method';
    }

    function login(Request $request) {
        echo "Request method is ".$request->method();
        echo "<br>";
        echo "Request path is ".$request->path();
        echo "<br>";
        echo "Request url is ".$request->url();
        echo "<br>";
        echo "name is ".$request->input('name');
        echo "<br>";
        echo "name is ".$request->name;
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->collect());
        echo "<br>";

        if ($request->isMethod('post')) {
            echo 'execute code for post request';
        } else {
            echo 'execute code for other request';
        }

        if ($request->is('user')) {
            echo 'execute code for user path';
        } else {
            echo 'execute code for other path';
        }

        echo 'name is '.$request->ip();
        echo '<br>';
    }
}
