<?php

use App\Http\Controllers\ProductController;
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
Route::get('/home', [ProductController::class, 'index'])->name('product.list');
Route::get('/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/add', [ProductController::class, 'store'])->name('product.store');
