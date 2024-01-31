<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\FormateurControllerOld;

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
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/sessions', function () {
    return view('sessions');
})->name('sessions')->middleware('auth');

Route::get('/formateurs', function () {
    return view('formateurs');
})->name('formateurs')->middleware('auth');

Route::get('/domaines', function () {
    return view('domaines');
})->name('domaines')->middleware('auth');

Route::get('/sujet-formation', function () {
    return view('sujet-formation');
})->name('sujet-formation')->middleware('auth');

/*Route::get('/liste-formateurs', function () {
    return view('liste-formateur');
})->name('liste-formateurs')->middleware('auth');*/
//Route::resource('formateur', 'ProfileController');
//Route::get('/liste-formateurs', 'ProfilController@index')->name('liste-formateur');
Route::get('/liste-formateurs', [\App\Http\Controllers\FormateurController::class, 'index'])->name('liste-formateurs')->middleware('auth');

Route::get('/liste-formations', function () {
    return view('liste-formations');
})->name('liste-formations')->middleware('auth');


Route::get('/liste-domaines', function () {
    return view('liste-domaines');
})->name('liste-domaines')->middleware('guest');

Route::get('liste-sessions', function () {
    return view('liste-sessions');
})->name('liste-sessions')->middleware('guest');


Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');





Route::resource('liste-formateur', FormateurControllerOld::class);
