<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TipsController;
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

Route::get('/', [Controller::class, 'getLandingPage'])->name('getLandingPage');


Auth::routes();
Route::get('/register', [Controller::class, 'getRegisterPage'])->name('getRegisterPage');

Route::get('/login', [Controller::class, 'getLoginPage'])->name('getLoginPage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/create/business', [BusinessController::class, 'getCreateBusiness'])->name('getCreateBusiness');
Route::post('/create/business', [BusinessController::class, 'createBusiness'])->name('createBusiness');

Route::get('/create/tips', [TipsController::class, 'getCreateTips'])->name('getCreateTips');
Route::post('/create/tips', [TipsController::class, 'createTips'])->name('createTips');

// Social Logins
Route::get('redirect/{driver}', [LoginController::class, 'redirectToProvider']);
Route::get('{driver}/callback', [LoginController::class, 'handleProviderCallback']);
