<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Belequent extends Controller
{
    public function index()
    {

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

    public function find()
    {
        // echo(Article::all()->where('id',1));
        echo(Article::all()->where('id',1));
    
    }

    public function delete()
    {

    }
}
