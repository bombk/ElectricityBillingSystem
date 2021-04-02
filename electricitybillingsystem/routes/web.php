<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DB_Work;
use App\Http\Controllers\ControllerFifteenTB;
use App\Http\Controllers\ControllerThirtyTB;
use App\Http\Controllers\ControllerSixtyTB;
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
Route::get("home",[DB_Work::class,'select']);
Route::post("/calculate",[DB_Work::class,'calculate']);

Route::get("fifteentable",[ControllerFifteenTB::class,'select']);
Route::post("/calculate1",[ControllerFifteenTB::class,'calculate']);

Route::get("thirtytable",[ControllerThirtyTB::class,'select']);
Route::post("/calculate2",[ControllerThirtyTB::class,'calculate']);

Route::get("sixtytable",[ControllerSixtyTB::class,'select']);
Route::post("/calculate3",[ControllerSixtyTB::class,'calculate']);

Route::view('register',"register");
Route::post("/store",[DB_Work::class,'store']);
Route::post("/logs",[DB_Work::class,'logs']);


//Route::post('index',"index");
