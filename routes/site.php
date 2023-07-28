<?php

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

use App\Http\Controllers\Site\Main\IndexController;
use App\Http\Controllers\Site\Main\CategoryController;
use App\Http\Controllers\Site\Main\PostDetailController;
use App\Http\Controllers\Site\Main\PostListController;
use App\Http\Controllers\Site\Main\ProfileController;

Route::group(['name' => 'site', 'as' => 'site.'], function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/categories', CategoryController::class)->name('categories');
    Route::get('/post/{slug}', PostDetailController::class)->name('post');
    Route::get('/posts', PostListController::class)->name('posts');
    Route::get('/profile/{slug}', ProfileController::class)->name('profile');
});
