<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public $articles = [
    //     ['id' => '1', 'titolo' => 'Trasferimenti Juventus', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/juventus.png'],
    //     ['id' => '2', 'titolo' => 'Trasferimenti Milan', 'autore' => 'Nicola Moccia', 'img' => '/media/loghi/milan.png'],
    //     ['id' => '3', 'titolo' => 'Trasferimenti Roma', 'autore' => 'Marika Iodice', 'img' => '/media/loghi/roma.png'],
    //     ['id' => '4', 'titolo' => 'Trasferimenti Napoli', 'autore' => 'Mario Moccia', 'img' => '/media/loghi/napoli.png'],
    // ];
    public function articlesList()
    {
        $articles = Articles::all();
        return view('articles.articles', ['articles' => $articles]);
    }
    // public function articlesDetail($id)
    // {
    //     foreach ($this->articles as $articles) {
    //         if ($id == $articles['id']) {
    //             return view('articles.articles-detail', ['articles' => $articles]);
    //         }
    //     }
    // }

    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        // metodo più sicuro

        $article = Articles::create([
            'titolo' => $request->titolo,
            'articolo' => $request->articolo,
            'autore' => $request->autore,
            'data' => $request->data,
        ]);


        // $article = new Articles();
        // $article->titolo = $request->titolo;
        // $article->articolo = $request->articolo;
        // $article->autore = $request->autore;
        // $article->data = $request->data;
        // $article->save();

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo articolo');
    }
}
