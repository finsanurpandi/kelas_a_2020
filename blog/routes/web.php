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
        Route::get('/{id}/edit', [LectureController::class, 'edit'])->name('edit');
        Route::put('/{id}', [LectureController::class, 'update'])->name('update');
        Route::delete('/{id}', [LectureController::class, 'destroy'])->name('destroy');

        // Trash
        Route::get('/recycle_bin', [LectureController::class, 'recycle_bin'])->name('recycle.bin');
        Route::post('/{id}/restore', [LectureController::class, 'restore'])->name('restore');
        Route::post('/restore/all', [LectureController::class, 'restore_all'])->name('restore.all');
        Route::post('/{id}/delete', [LectureController::class, 'delete'])->name('delete');
        Route::post('/empty', [LectureController::class, 'empty'])->name('empty');
    });

    Route::group([
        'middleware' => 'role:student',
        'prefix' => 'student',
        'as' => 'student.'
    ], function(){
        Route::get('/', [HomeController::class, 'student'])->name('show');
    });
});
