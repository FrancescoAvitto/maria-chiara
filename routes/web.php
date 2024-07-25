<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/articoli/{article:slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/lavori/{work}', [HomeController::class, 'workShow'])->name('work.show');
Route::get('/contatti', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/lavori', [HomeController::class, 'workIndex'])->name('works.index');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/soloperisuoiocchi', [HomeController::class, 'soloperisuoiocchi']);
