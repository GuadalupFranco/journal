<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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
/* Auth::routes(); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/', [ViewsController::class, 'showWelcome']);
Route::get('/house', [ViewsController::class, 'showHome'])->name('house');
Route::get('/register', [ViewsController::class, 'showRegister'])->name('register');
Route::get('/memory', [ViewsController::class, 'showMemory'])->name('memory'); */

Route::controller(ViewsController::class)->group(
    function(){
        Route::get('/', 'showWelcome');
        Route::get('/house', 'showHome')->name('house');
        Route::get('/register', 'showRegister')->name('register');
        Route::post('/saveMemory', 'saveMemory')->name('saveMemory');
        Route::get('/memories', 'showMemories')->name('memories');
    }
);
