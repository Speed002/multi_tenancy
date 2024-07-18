<?php

use App\Actions\CreateUser;
use App\Actions\SendMagicLink;
use App\Http\Controllers\LoginController;
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

Route::middleware(['web'])->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        })->name('dashboard');
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', function () {
            return view('auth.login');
        })->name('login');
        Route::post('/login', SendMagicLink::class)->name('login');
        Route::get('/register', function () {
            return view('auth.register');
        })->name('register');
        Route::post('/register', CreateUser::class)->name('register');
    });

    Route::get('/auth/session/{user:email}', LoginController::class)
        ->name('auth.session')
        ->middleware(['signed', 'guest']);
});
