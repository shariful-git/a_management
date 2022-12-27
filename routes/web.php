<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);

// contact
Route::post('/submitContact', [ContactController::class, 'submit'])->name('contact');

// Profile
Route::post('/update_profile_informations', [ContactController::class, 'updateProfileInfo']);

//post
Route::post('/add/article/post', [ArticleController::class, 'store'])->name('add-article-post');




