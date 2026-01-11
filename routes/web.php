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
    $seo = App\Helpers\SEOHelper::generateMetaTags('home');
    $breadcrumb = [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://mtawada.or.tz"
        ]
    ];
    return view('Pages.home', compact('seo', 'breadcrumb'));
});

// Sitemap
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);

Route::prefix('mtawada')->group(function () {
    Route::get('/home', [App\Http\Controllers\MTAWADAController::class, 'home'])->name('mtawada.home');
    Route::get('/about', [App\Http\Controllers\MTAWADAController::class, 'about'])->name('mtawada.about');
    Route::get('/mission', [App\Http\Controllers\MTAWADAController::class, 'mission'])->name('mtawada.mission');
    Route::get('/history', [App\Http\Controllers\MTAWADAController::class, 'history'])->name('mtawada.history');
    Route::get('/coreValues', [App\Http\Controllers\MTAWADAController::class, 'coreValues'])->name('mtawada.coreValues');
    Route::get('/impact', [App\Http\Controllers\MTAWADAController::class, 'impact'])->name('mtawada.impact');
    Route::get('/donate', [App\Http\Controllers\MTAWADAController::class, 'donate'])->name('mtawada.donate');
    Route::get('/gallery', [App\Http\Controllers\MTAWADAController::class, 'gallery'])->name('mtawada.gallery');
    Route::get('/contact', [App\Http\Controllers\MTAWADAController::class, 'contact'])->name('mtawada.contact');
    Route::get('/programs', [App\Http\Controllers\MTAWADAController::class, 'programs'])->name('mtawada.programs');
});
