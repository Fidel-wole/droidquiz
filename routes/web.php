<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [SignupController::class, "register"]);
Route::post('/login', [SignupController::class, "check"]);
Route::get('/userdashboard', function(){
    return view('userdashboard');
});
Route::get('/userdashboard', [SignupController::class, "dashboard"]);
Route::get('/navbar', function(){
    return view('navbar');
});
Route::get('/header', function(){
    return view('header');
});
?>