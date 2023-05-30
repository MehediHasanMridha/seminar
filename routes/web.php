<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Auth::routes();
Route::post('/search', [UserController::class, 'search'])->name('search');
Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'home'])->name('home-page');
    Route::get('/signup-page', [UserController::class, 'signup'])->name('signup-page');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('show-page');
    Route::get('/login-page', [UserController::class, 'login'])->name('login-page');
    Route::post('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/doLogin', [UserController::class, 'doLogin'])->name('user.doLogin');
    });
Route::middleware(['auth:student'])->group(function () {
    Route::get('/user_dashboard', [UserController::class, 'user_dashboard'])->name('user.dashboard');
    Route::get('/student_logout', [UserController::class, 'logout']);
    Route::get('/user_show_page/{id}', [UserController::class, 'show'])->name('user_page');

    });
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin_dashboard', [UserController::class, 'admin_dashboard'])->name('admin.dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/post_page', [UserController::class, 'post_page'])->name('post-page');
    Route::get('/admin_show_page/{id}', [UserController::class, 'show'])->name('admin_page');
    Route::post('/post_create', [UserController::class, 'post_create'])->name('post.create');
    Route::get('/delete/{id}', [UserController::class, 'delete_item']);
    Route::get('/hot_image', [UserController::class, 'hot_image'])->name('hot-image-page');
    Route::post('/hot_image_create', [UserController::class, 'hot_image_create'])->name('hot.image.create');
    Route::get('/delete_hot_image/{id}', [UserController::class, 'delete_hot_image']);
    });
