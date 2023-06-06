<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ForumController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Create Business Page
Route::get('/create/business', [BusinessController::class, 'getCreateBusiness'])->name('getCreateBusiness');
Route::post('/create/business', [BusinessController::class, 'createBusiness'])->name('createBusiness');

// Create Tips Page
Route::get('/create/tips', [TipsController::class, 'getCreateTips'])->name('getCreateTips');
Route::post('/create/tips', [TipsController::class, 'createTips'])->name('createTips');

// Forum Page
Route::get('/forum', [ForumController::class, 'getForumPage'])->name('getForumPage');
Route::post('/forum', [ForumController::class, 'createForum'])->name('createForum');

// Explore
Route::get('/explore', [BusinessController::class, 'getBusinesses'])->name('getBusinesses');
Route::get('/explore/{id}', [BusinessController::class, 'getBusinessById'])->name('getBusinessById');
Route::get('/search-business', [BusinessController::class, 'searchBusinesses'])->name('searchBusinesses');
Route::get('/download-attachment/{id}', [BusinessController::class, 'downloadAttachmentById'])->name('downloadAttachmentById');

// Tips
Route::get('/tips', [TipsController::class, 'getTips'])->name('getTips');
Route::get('/search-tips', [TipsController::class, 'searchTips'])->name('searchTips');

// Social Logins
Route::get('redirect/{driver}', [LoginController::class, 'redirectToProvider']);
Route::get('{driver}/callback', [LoginController::class, 'handleProviderCallback']);
