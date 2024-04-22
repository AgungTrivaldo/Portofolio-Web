<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\CardController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\skillcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\halamancontroller;
use App\Http\Controllers\skillcardscontroller;


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
    return view('master');
});

Route::redirect('home', 'dashboard');

Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

Route::get('/auth', [authcontroller::class,"index"])->name('login')->middleware('guest');

Route::get('/auth/redirect', [authcontroller::class,"redirect"])->middleware('guest');

Route::get('/auth/callback', [authcontroller::class,"callback"])->middleware('guest');

Route::get('master', [skillcardscontroller::class, 'index']);


Route::get('auth/logout', [authcontroller::class, 'logout']);

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view ('dashboard.layout');
    });
    Route::resource('/halaman', halamancontroller::class);
    Route::resource('/skill', skillcardscontroller::class);



})->middleware('auth');

Route::get('/', function () {
    $skillCards = App\Models\SkillCard::all();
    return view('master', compact('skillCards'));
});



