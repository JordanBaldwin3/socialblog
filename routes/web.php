<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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


//Route::get('/index', [PostController::class, 'index'])->name('index');
//show post create form
Route::get('create-post', [PostController::class, 'create'])->name('create');
//save new post
Route::post('create-post', [PostController::class, 'store'])->name('store');
//show post
Route::get('posts/{posts}', [PostController::class, 'show'])->name('show');
//edit post
Route::get('posts/{posts}/edit', [PostController::class, 'edit'])->name('edit');
//update post
Route::post('posts/{posts}', [PostController::class, 'update'])->name('update');
//delete post
Route::post('posts/{posts}/destroy', [PostController::class, 'destroy'])->name('destroy');
// add new comment
Route::get('comments/{comments}', [CommentController::class, 'store'])->name('comment.store');
// show profile create form
Route::get('profiles', [ProfileController::class, 'create'])->name('profile.create');
//save new profle
Route::post('profiles', [ProfileController::class, 'store'])->name('profile.store');
//show profile
Route::get('profiles/{profiles}', [ProfileController::class, 'show'])->name('profile.show');