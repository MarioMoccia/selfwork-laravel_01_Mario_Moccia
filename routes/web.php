<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/articles', [ArticleController::class, 'articleslist'])->name('articles.list');

Route::get('/articles/detail/{id}', [ArticleController::class, 'articlesDetail'])->name('articles.detail');

// invio email
Route::get('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');

Route::post('/contact-us', [PublicController::class, 'contactSubmit'])->name('contactSubmit');


// Inserimento annunci
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/articles/submit', [ArticleController::class, 'store'])->name('articles.submit');
