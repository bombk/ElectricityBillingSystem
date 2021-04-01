<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DB_Work;
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
Route::view('register',"register");
Route::post("/store",[DB_Work::class,'store']);
Route::post("/logs",[DB_Work::class,'logs']);
Route::post("/calculate",[DB_Work::class,'calculate']);
//Route::post('index',"index");
