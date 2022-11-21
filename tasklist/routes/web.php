<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\taskcontroller::class,'showdata']);
Route::get('/add-data',[\App\Http\Controllers\taskcontroller::class,'addData']);
Route::post('/store-data',[\App\Http\Controllers\taskcontroller::class,'storeData']);
Route::get('/edit-data/{id}',[\App\Http\Controllers\taskcontroller::class,'editData']);
Route::post('/update-data/{id}',[\App\Http\Controllers\taskcontroller::class,'updateData']);
Route::get('/delete-data/{id}',[\App\Http\Controllers\taskcontroller::class,'deleteData']);


