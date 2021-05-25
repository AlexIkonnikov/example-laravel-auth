<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () { return view('welcome'); })->name('home');

Route::post('/registration', [RegisterController::class, 'store']);
Route::post('/authenticate', [RegisterController::class, 'authenticate']);

Route::get('/logout', [RegisterController::class, 'logout'])
    ->name('logout');

Route::get('/cabinet', [CabinetController::class, 'show'])
    ->name('cabinet')
    ->middleware('auth');

Route::post('/post/store', [PostController::class, 'store']);

Route::prefix('post')->group(function () {
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/{id}', [PostController::class, 'show'])->name('show');
});

Route::get('/posts', [PostController::class, 'showAll'])->name('posts');