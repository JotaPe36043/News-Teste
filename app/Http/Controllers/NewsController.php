<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {

        $listaDeNoticias = News::all();

        return view('News.index', compact('listaDeNoticias'));
    }

    public function show($id){
        $noticia = News::findOrFail($id);
        return view('News.show', compact('noticia'));
    }
}
