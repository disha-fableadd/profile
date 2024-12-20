<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
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
    return view('welcome');
});
Route::get('login', [profileController::class, 'showLoginForm'])->name('login');
Route::post('login', [profileController::class, 'login']);
Route::get('signup', [profileController::class, 'showSignupForm'])->name('signup');
Route::post('signup', [profileController::class, 'signup']);

Route::get('profile', [profileController::class, 'showProfile'])->name('profile');
Route::get('profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::get('logout', [profileController::class, 'logout'])->name('logout');