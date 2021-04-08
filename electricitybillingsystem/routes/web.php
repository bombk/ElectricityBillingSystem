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
Route::group(['middleware' => ['web']], function () {

        Route::get("home",[DB_Work::class,'select']);
        Route::post("/calculate",[DB_Work::class,'calculate']);
        
        Route::get("fifteentable",[ControllerFifteenTB::class,'select']);
        Route::post("/calculate1",[ControllerFifteenTB::class,'calculate']);
        
        Route::get("thirtytable",[ControllerThirtyTB::class,'select']);
        Route::post("/calculate2/{id}",[ControllerThirtyTB::class,'calculate']);
        
        Route::get("sixtytable",[ControllerSixtyTB::class,'select']);
        Route::post("/calculate3",[ControllerSixtyTB::class,'calculate']);
        
        Route::post("/store",[UserLogin::class,'store']);
        Route::post("/logs",[UserLogin::class,'logs']);
        Route::get("/logout",[UserLogin::class,'logout']);
        Route::view('register',"register");
        Route::view('result',"result");
        Route::view('login',"login");
        
});
Route::get('welcome', [HomeController::class,'index']);
Route::get('GetSubCatAgainstMainCatEdit/{id}',[HomeController::class,'GetSubCatAgainstMainCatEdit']);
