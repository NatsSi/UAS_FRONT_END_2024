<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\MentorsController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/recipes', function () {
    return view('');
});

Route::get('/detail-recipe', function () {
    return view('');
});

Route::get('/events', function () {
    return view('');
});

Route::get('/detail-event', function () {
    return view('');
});

Route::get('/blog', function () {
    return view('');
});

Route::get('/detail-blog', function () {
    return view('');
});

Route::get('/register', function () {
    return view('');
});

Route::get('/register-step-1', function () {
    return view('');
});

Route::get('/register-step-2', function () {
    return view('');
});

Route::get('/register-step-3', function () {
    return view('');
});

Route::get('/login', function () {
    return view('');
});

Route::post('/comment', [ArticleController::class, 'comment']);

Route::get('/profile', function() {
    return view('profile');
});
Route::get('/update-profile', function() {
    return view('updateProfile');
});
Route::put('/update-profile', [UpdateController::class, 'updateProfile'])->name('update-profile')->middleware('auth');

Route::get('/edit-recipe/{recipe}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/update-recipe/{recipe}', [ArticleController::class, 'update'])->name('articles.update');
Route::get('/delete-recipe', [ArticleController::class, 'delete']);

Route::get('/edit-event/{event}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/update-event/{event}', [ArticleController::class, 'update'])->name('articles.update');
Route::get('/delete-event', [ArticleController::class, 'delete']);

Route::get('/edit-blog/{blog}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/update-blog/{blog}', [ArticleController::class, 'update'])->name('articles.update');
Route::get('/delete-blog', [ArticleController::class, 'delete']);

Route::get('/change-password', function() {
    return view('changePassword');
});
Route::patch('/change-password', [EditorController::class, 'changePassword']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Auth::routes();

//Route untuk AngularJS
Route::get('/home', function () {
    return view('home');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');