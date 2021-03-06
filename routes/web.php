<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessagesController;
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

Route::get('/messages', [MessagesController::class, 'viewMessagesForUser']);

Route::get('/admin/messages/{id}', [
    MessagesController::class,
    'viewMessagesForAdmin',
]);

Route::get('/home/{id?}', [CoursesController::class, 'viewCourses']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/notifications', [OrdersController::class, 'viewAcceptedOrders']);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', [UserController::class, 'viewProfile']);

Route::get('/editProfile', [UserController::class, 'viewEditProfile']);

Route::get('/orders', [OrdersController::class, 'viewMyOrders']);

Route::get('/collection', [OrdersController::class, 'viewMyAcceptedOrders']);

Route::get('/addCourses', function () {
    return view('addCourses');
});

Route::get('/admin', [MessagesController::class, 'getMessagesSenderForAdmin']);

Route::get('/admin/login', function () {
    return view('adminLogin');
});

Route::get('/logout', [UserController::class, 'logout']);

//POST Routes
Route::post('/signup', [UserController::class, 'signup']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/editProfile', [UserController::class, 'editProfile']);

Route::post('/addCourses', [CoursesController::class, 'createCourse']);

Route::post('/home/{id?}', [OrdersController::class, 'createOrder']);

Route::post('/orders', [OrdersController::class, 'acceptOrder']);

Route::post('/admin/login', [AdminController::class, 'auth']);

Route::post('/messages', [MessagesController::class, 'sendMessageToAdmin']);

Route::post('/admin/messages/{id}', [
    MessagesController::class,
    'sendMessageToUser',
]);
