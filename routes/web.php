<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MTAWADAController;
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
    return view('pages.home');
});

Route::prefix('mtawada')->group(function () {
    Route::get('/home', [App\Http\Controllers\MTAWADAController::class, 'home'])->name('mtawada.home');
    Route::get('/about', [App\Http\Controllers\MTAWADAController::class, 'about'])->name('mtawada.about');
    Route::get('/mission', [App\Http\Controllers\MTAWADAController::class, 'mission'])->name('mtawada.mission');
    Route::get('/history', [App\Http\Controllers\MTAWADAController::class, 'history'])->name('mtawada.history');
    Route::get('/coreValues', [App\Http\Controllers\MTAWADAController::class, 'coreValues'])->name('mtawada.coreValues');
    Route::get('/impact', [App\Http\Controllers\MTAWADAController::class, 'impact'])->name('mtawada.impact');
    Route::get('/news', [App\Http\Controllers\MTAWADAController::class, 'news'])->name('mtawada.news');
    Route::get('/gallery', [App\Http\Controllers\MTAWADAController::class, 'gallery'])->name('mtawada.gallery');
    Route::get('/contact', [App\Http\Controllers\MTAWADAController::class, 'contact'])->name('mtawada.contact');
});
