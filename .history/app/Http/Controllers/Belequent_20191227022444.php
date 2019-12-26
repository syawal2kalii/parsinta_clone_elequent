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

    public function find($id)
    {
        echo(Article::select('id','title','content')
        ->where('id',$id)->orWhere("title","secosnd article")
        ->get()
    );
    }

    public function delete()
    {

    }
}
