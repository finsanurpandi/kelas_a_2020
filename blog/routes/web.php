<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;

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
        Route::get('/', [LectureController::class, 'index'])->name('index');
        Route::get('/create', [LectureController::class, 'create'])->name('create');
        Route::post('/store', [LectureController::class, 'store'])->name('store');
    });

    Route::group([
        'middleware' => 'role:student',
        'prefix' => 'student',
        'as' => 'student.'
    ], function(){
        Route::get('/', [HomeController::class, 'student'])->name('show');
    });
});
