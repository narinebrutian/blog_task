<?php

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
    return view('welcome');
});

//custom routes//

Route::get('/index', function () {
    return view('blog.index');
});

Route::get('/about', function () {
    return view('blog.about');
});


Route::get('/contact', function () {
    return view('blog.contact');
});

Route::get('/blog/login', function () {
    return view('blog.login');
});

Route::get('/signUp', function () {
    return view('blog.signUp');
});



//default routes//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
