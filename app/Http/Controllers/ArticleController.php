<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public $articles = [
        ['id' => '1', 'titolo' => 'Trasferimenti Juventus', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/juventus.png'],
        ['id' => '2', 'titolo' => 'Trasferimenti Milan', 'autore' => 'Nicola Moccia', 'img' => '/media/loghi/milan.png'],
        ['id' => '3', 'titolo' => 'Trasferimenti Roma', 'autore' => 'Marika Iodice', 'img' => '/media/loghi/roma.png'],
        ['id' => '4', 'titolo' => 'Trasferimenti Napoli', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/napoli.png'],
    ];
    public function  articlesList()
    {
        return view('articles.articles', ['articles' => $this->articles]);
    }
    public function articlesDetail($id)
    {
        foreach ($this->articles as $articles) {
            if ($id == $articles['id']) {
                return view('articles.articles-detail', ['articles' => $articles]);
            }
        }
    }
}
