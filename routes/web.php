<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/home', 'home');

// route::redirect('/home', '/');

// Route::get("/about/{name}", function ($name) {
//     echo $name;
//     return view('about', ['name'=>$name]);
// });

Route::get('user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'aboutUser']);
Route::get('user/{name}', [UserController::class, 'getUsername']);
Route::get('admin', [UserController::class, 'adminLogin']);
Route::get('user-home',[UserController::class, 'userHome']);
Route::get('user-about',[UserController::class, 'userAbout']);
Route::get('user-form', [UserController::class,  'userForm']);
Route::post('add-user',[UserController::class, 'addUser']);
Route::view('home2','home2');
Route::view('about2/{name}','about2');
Route::view('about2','about2');

// named routes tutorial

// Route::view('home/profile/user', 'home2')->name('hm');
Route::view('about/user','about2')->name('abt');
Route::view('home3','home3');
Route::get('show',[HomeController::class, 'show']);
Route::view('this/is/some/big/path/{name}', 'user2')->name('user2');

Route::get('user2',[HomeController::class, 'user2']);

// group routes practice

Route::prefix('student')->group(function() {
	Route::view('/home4','home4');
	Route::get('/show',[HomeController2::class, 'show']);
	Route::get('/add',[HomeController2::class, 'add']);
});


// grouping routes using controller ( this feature came from laravel 9, also after laravel 5 then laravel 7 came)

Route::controller(StudentController::class)->group(function() {
	Route::get('stu/show','show');
	Route::get('stu/add','add');
	Route::get('stu/delete','delete');
	Route::get('about3/{name}','about');
});

// middleware practice

/*
it is a layer between user and application
here we can check conditions or filter user requests
if condition pass request will reach to middleware
*/

// Route::middleware('check1')->group(function() {
// 	Route::view('home5','home3')->middleware('check1');
// 	Route::view('about5','about2');
// });

Route::view('home5','home3')->middleware([AgeCheck::class, CountryCheck::class]);
Route::view('about5','about2');