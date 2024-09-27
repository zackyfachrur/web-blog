<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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
// Front End
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/product', [PageController::class, 'product']);
Route::get('/contact', [PageController::class, 'contact']);

// Authentication
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

// Blog
Route::get('blog', [PostController::class, 'index']);
Route::get('blog/create', [PostController::class, 'create']);
Route::get('blog/{id}', [PostController::class, 'show']);
Route::post('blog', [PostController::class, 'store']);
Route::get('blog/{id}/edit', [PostController::class, 'edit']);
Route::patch('blog/{id}', [PostController::class, 'update']);
Route::delete('blog/{id}', [PostController::class, 'destroy']);