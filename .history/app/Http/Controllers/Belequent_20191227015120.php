<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Belequent extends Controller
{
    public function index()
    {
        # code...
    }
    public function create()
    {
        $article = new Article;
        $article->title= "Third Article";
        $article->content= "lorem";
        $article->save();
        dd(Article::all());
    }

    public function all()
    {
        echo(Article::all());
    }
}
