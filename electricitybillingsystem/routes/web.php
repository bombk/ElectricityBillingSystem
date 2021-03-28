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
Route::get("select",[DB_Work::class,'select']);
Route::view('register',"register");
Route::view('login','login');
Route::post("/store",[DB_Work::class,'store']);
Route::post("/logs",[DB_Work::class,'logs']);
