<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PostController;
Use App\Http\Controllers\UserController;

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

Route::group(['middleware'=>"web"], function(){
    Route::get('/add-post', [PostController::class, 'addPost']);
    Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');
    Route::get('/posts', [PostController::class, 'getPost']);
    Route::get('posts/{id}',[PostController::class, 'getPostById']);
    Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);
    Route::get('/edit-post/{id}', [PostController::class, 'editPost']);
    Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');
    Route::get('/search', [PostController::class, 'postSearch']);
    Auth::routes();
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
