<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $titre = 'Tous les articles de DevBlog';
        $nombre = 23455;
        $articles = [
           /* ['titre' => 'Débuter avec Laravel', 'auteur' => 'Vianney'],
            ['titre' => 'Comprendre la notion de route', 'auteur' => 'Jason'],
            ['titre' => 'Blade pour les nuls', 'auteur' => 'Soraya'],
            ['titre' => 'Bootstrap, le framework css de base', 'auteur' => 'Aylé']*/
        ];
        return view('articles.index',
            compact('titre','nombre', 'articles')
        );
    }
    public function show($id)
    {
        return "Vous êtes au niveau de l'article " . $id;
    }
}
