<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemTransController;
use Illuminate\Support\Facades\Route;

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
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/item',[ItemController::class,'index'] );
Route::get('/keluar-masuk-barang',[ItemTransController::class,'index']);