<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DB_Work;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerFifteenTB;
use App\Http\Controllers\ControllerThirtyTB;
use App\Http\Controllers\ControllerSixtyTB;
use App\Http\Controllers\UserLogin;

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
    return view('login');
});

    Route::get('welcome', [HomeController::class, 'index'])->middleware('CustomeAuth');
    Route::get('GetTableDetails/{id}', [HomeController::class, 'GetTableDetails']);
    Route::post("/calculate", [HomeController::class, 'calculate']);

    Route::post("/store", [UserLogin::class, 'store']);
    Route::post("/logs", [UserLogin::class, 'logs']);
    Route::get("/logout", [UserLogin::class, 'logout']);

    Route::view('register', "register");
    Route::view('result', "result")->middleware('CustomeAuth');
    Route::view('login', "login");

