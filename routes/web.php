<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books',BookController::class)->middleware('auth');

Route::get('/search',[UserController::class,"search"]);
Route::get('/search',[BookController::class,"search"]);
Route::get('/search',[BookController::class,"search1"]);
Route::get('/borrowed_books',[BookController::class,"index2"]);
Route::get('/add-to-cart/{id}',[BookController::class,"addToCart"]);
Route::get('/back-to-shelf/{id}',[BookController::class,"backToShelf"]);
Route::get('/account/{id}',[UserController::class,'show'])->where('id','[0-9]+');


Route::resource('users',UserController::class)->middleware('auth');

Route::get('admins',[AdminController::class,"index"]);
Route::get('admins/create',[AdminController::class,"create"]);
Route::get('admins/{id}',[AdminController::class,"show"])->where('id','[0-9]+');
Route::post('admins',[AdminController::class,"store"]);
Route::get('admins/{id}/edit',[AdminController::class,"edit"])->where('id','[0-9]+');
Route::put('admins/{id}',[AdminController::class,"update"])->where('id','[0-9]+');
Route::delete('admins/{id}',[AdminController::class,"destroy"])->where('id','[0-9]+');
Auth::routes();
Route::get('students',[BookController::class,"index1"]);
Route::get('students/create',[BookController::class,"create1"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
