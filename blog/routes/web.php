<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::get('/hello', [TestController::class, 'hello']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::group([
        'middleware' => 'role:lecture',
        'prefix' => 'lecture',
        'as' => 'lecture.'
    ], function(){
        Route::get('/', [HomeController::class, 'lecture'])->name('show');
    });

    Route::group([
        'middleware' => 'role:student',
        'prefix' => 'student',
        'as' => 'student.'
    ], function(){
        Route::get('/', [HomeController::class, 'student'])->name('show');
    });
});
