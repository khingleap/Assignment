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

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/property', [App\Http\Controllers\PageController::class, 'property'])->name('property');
Route::get('/blog', [App\Http\Controllers\PageController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('/property-single', [App\Http\Controllers\pagesController::class, 'propertysingle'])->name('property-single');
Route::get('/blog-single', [App\Http\Controllers\pagesController::class, 'blogsingle'])->name('blog-single');
Route::get('/agent-grid', [App\Http\Controllers\pagesController::class, 'agentgrid'])->name('agent-grid');
Route::get('/agent-single', [App\Http\Controllers\pagesController::class, 'agentsingle'])->name('agent-single');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
