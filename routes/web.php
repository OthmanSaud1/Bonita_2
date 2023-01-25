<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SurveyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
Route::get('/', function () {
    return view('HomePage');
});
Route::get('/', [HomePageController::class, 'showHomePage']);



// sign up
Route::get('/register', [UsersController::class, "create"]);

Route::post('/users', [UsersController::class, "storeUser"]);
// logout
Route::post('/logout', [UsersController::class, "logout"]);

// login
Route::get('/login', [UsersController::class, "login"]);
Route::post('users/login', [UsersController::class, 'loginUser']);


Route::get('/survey', [SurveyController::class, "showSurveyPage"]);
Route::post('/survey', [SurveyController::class, "submitSurvey"]);