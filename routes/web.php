<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
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

Route::get('/admin/posts', function () {
    return view('admin/posts');
});

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/login', function () {
    return view('login/admin');
});

Route::get('/blog', function () {
    return view('blog/index');
});
Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/about', function () {
    return view('blog/about');
});

Route::get('/forgot', function () {
    return view('admin/forgot');
});

Route::get('/register', function () {
    return view('admin/register');
});

Route::get('/post', function () {
    return view('blog/post');
});

Route::get('/contact', function () {
    return view('blog/contact');
});
Route::resource('/admin/posts', PostController::class);
Route::resource('/blog', BlogController::class);