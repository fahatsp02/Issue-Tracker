<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Auth\Events\Login;
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

Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/',[CustomAuthController::class, 'welcome'])->name('welcome');
Route::get('/login',[CustomAuthController::class, 'index'])->name('Login');
Route::post('/custom-login',[CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration',[CustomAuthController::class, 'registration'])->name('Register-user');
Route::post('/custom-registration',[CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout',[CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/users',[CustomAuthController::class, 'showusers'])->name('users');