<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController2;
use App\Http\Controllers\UserController3;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserEloController;
use App\Http\Controllers\UserRoutesController;
use App\Http\Controllers\UserLoginController;
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

// db connection and showing the mysql data
Route::get('users-db', [UserController::class, 'getUsers']);

// eloquent model in laravel - crud operations with db becomes easier with this model.
// it is an orm
// db related work is done mostly in model
/*
CREATE TABLE students (
	id INT(30) auto_increment PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    batch VARCHAR(100)
);
*/


// get data from sql database by creating Student model which will automatically connect to students table
Route::get('students',[StudentController2::class,'getStudents']);

// getting data using httpclient
Route::get('get-users',[UserController3::class, 'getUsers']);

// using query builder with database
Route::get('user-queries',[UsersController::class, 'queries']);

// using eloquent query builder
Route::get('user-elo', [UserEloController::class, 'queries']);

// route handler methods
Route::get('user-route',[UserRoutesController::class, 'get']);
Route::post('user-route', [UserRoutesController::class, 'post']);
Route::put('user-route', [UserRoutesController::class, 'put']);
Route::delete('user-route', [UserRoutesController::class, 'delete']);

// any - for all the request methods same callback will be called.
// Route::any('user-route',[UserRoutesController::class, 'any']);

// Route::match(['get','post'],'/user',[UserController::class, 'group2'])
// Route::match(['put','delete'],'/user',[UserController::class, 'group2'])

Route::view('form','user-route');

Route::view('login','login');
Route::post('login',[UserLoginController::class, 'login']);
Route::view('profile','profile');
Route::get('logout',[UserLoginController::class, 'logout']);