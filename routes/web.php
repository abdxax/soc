<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('register',[\App\Http\Controllers\AccountControler::class,'register'])->name('register');
Route::post('register',[\App\Http\Controllers\AccountControler::class,'register']);

Route::get('login',[\App\Http\Controllers\AccountControler::class,'login'])->name('login');
Route::post('login',[\App\Http\Controllers\AccountControler::class,'login']);

Route::prefix('user')->middleware('auth')->group(function (){
   Route::get('index',[\App\Http\Controllers\user\HomeController::class,'index'])->name('user.index');
   Route::get('notice',[\App\Http\Controllers\user\ReportController::class,'index'])->name('user.notice');
    Route::post('notice',[\App\Http\Controllers\user\ReportController::class,'index']);
    Route::get('report/{id}',[\App\Http\Controllers\user\ReportController::class,'showReport'])->name('user.showReport');

});
