<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Get Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/order', function () {
    return view('orders');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/add_courses', function () {
    return view('addCourses');
});

Route::get('/admin', function () {
    return view('adminDashboard');
});

Route::get('/admin/login', function () {
    return view('adminLogin');
});


//POST Routes
Route::post('/signup', [UserController::class,'signup']);