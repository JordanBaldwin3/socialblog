<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/index', [PostController::class, 'index'])->name('index');
//show post create form
Route::get('create-post', [PostController::class, 'create'])->name('create');
//save new post
Route::post('create-post', [PostController::class, 'store'])->name('store');
//show post
Route::get('posts/{posts', [PostController::class, 'show'])->name('show');