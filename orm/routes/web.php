<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DataExampleController;

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
    return view('welcome');
});

Route::get('/admin/dashboard/', [DashboardController::class, 'index']);
Route::get('/admin/dashboard/table', [DashboardController::class, 'table']);

Route::prefix('/dataexample')->group(function(){
    Route::get('/onetooneinsert', [DataExampleController::class, 'OneToOneInsert'])->name('onetooneinsert');
    Route::get('/associate', [DataExampleController::class, 'OneToOneAssociate'])->name('onetooneassociate');
    Route::get('/dissociate', [DataExampleController::class, 'OneToOneDissociate'])->name('onetoonedissociate');
    Route::get('/delete', [DataExampleController::class, 'OneToOneDelete'])->name('onetoonedelete');
    Route::get('/threelevel', [DataExampleController::class, 'OneToOneThreeLevel'])->name('onetoonethreelevel');
    Route::get('/hasonethrough', [DataExampleController::class, 'hasOneThrough'])->name('hasonethrough');
});