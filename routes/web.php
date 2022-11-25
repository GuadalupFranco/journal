<?php

use App\Http\Controllers\MemoryController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

/* Auth::routes(); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Main views routes */
Route::controller(ViewsController::class)->group(
    function(){
        Route::get('/', 'showWelcome');
        Route::get('/house', 'showHome')->name('house');
    }
);

/* Memories' actions routes */
Route::resource('memory', MemoryController::class);
Route::get('/memory/{id}/delete', [MemoryController::class, 'delete'])->name('memory.delete');