<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () {
    $users = [
        ['name' => 'Mario', 'surname' => 'Moccia', 'Ruolo' => 'Direttore'],
        ['name' => 'Marika', 'surname' => 'Iodice', 'Ruolo' => 'Giornalista'],
        ['name' => 'Nicola', 'surname' => 'Moccia', 'Ruolo' => 'Giornalista'],
    ];

    return view('about-us', ['users' => $users]);
})->name('aboutUs');

Route::get('chi-siamo/detail/{name}', function ($name) {
    $users = [
        ['name' => 'Mario', 'surname' => 'Moccia', 'Ruolo' => 'Direttore'],
        ['name' => 'Marika', 'surname' => 'Iodice', 'Ruolo' => 'Giornalista'],
        ['name' => 'Nicola', 'surname' => 'Moccia', 'Ruolo' => 'Giornalista'],
    ];
    foreach ($users as $user) {
        if ($name == $user['name']) {
            return view('about-us-detail', ['user' => $user]);
        }
    }
})->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/articles', function () {
    $articles = [
        ['id' => '1', 'titolo' => 'Trasferimenti Juventus', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/juventus.png'],
        ['id' => '2', 'titolo' => 'Trasferimenti Milan', 'autore' => 'Nicola Moccia', 'img' => '/media/loghi/milan.png'],
        ['id' => '3', 'titolo' => 'Trasferimenti Roma', 'autore' => 'Marika Iodice', 'img' => '/media/loghi/roma.png'],
        ['id' => '4', 'titolo' => 'Trasferimenti Napoli', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/napoli.png'],
    ];
    return view('articles.articles', ['articles' => $articles]);
})->name('articles.list');

Route::get('/articles/detail/{id}', function ($id) {
    $articles = [
        ['id' => '1', 'titolo' => 'Trasferimenti Juventus', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/juventus.png'],
        ['id' => '2', 'titolo' => 'Trasferimenti Milan', 'autore' => 'Nicola Moccia', 'img' => '/media/loghi/milan.png'],
        ['id' => '3', 'titolo' => 'Trasferimenti Roma', 'autore' => 'Marika Iodice', 'img' => '/media/loghi/roma.png'],
        ['id' => '4', 'titolo' => 'Trasferimenti Napoli', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/napoli.png'],
    ];
    foreach ($articles as $articles) {
        if ($id == $articles['id']) {
            return view('articles.articles-detail', ['articles' => $articles]);
        }
    }
})->name('articles.detail');
