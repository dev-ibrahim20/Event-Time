<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Gallery Page
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Quote Request Page
Route::get('/quote', function () {
    return view('quote');
})->name('quote');

// Language Switcher
Route::get('/language/{lang}', function ($lang) {
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return redirect()->back();
})->name('language.switch');

// Sitemap
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
    Route::get('/projects/create', [AdminController::class, 'createProject'])->name('projects.create');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('projects.store');
    Route::get('/projects/{project}/edit', [AdminController::class, 'editProject'])->name('projects.edit');
    Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'deleteProject'])->name('projects.delete');
    
    Route::get('/quotes', [AdminController::class, 'quotes'])->name('quotes');
    Route::get('/quotes/{quote}', [AdminController::class, 'showQuote'])->name('quotes.show');
    Route::put('/quotes/{quote}/status', [AdminController::class, 'updateQuoteStatus'])->name('quotes.update-status');
});
