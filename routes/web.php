<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PostController;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();

Route::middleware(['user'])->group(function(){
    
    Route::get('/add-post', [PostController::class, 'addPost']);
    Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');
    Route::get('/posts', [PostController::class, 'getPost'])->name('posts');
    Route::get('posts/{id}',[PostController::class, 'getPostById']);
    Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);
    Route::get('/edit-post/{id}', [PostController::class, 'editPost']);
    Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');
    Route::get('/search', [PostController::class, 'postSearch']);

});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
