<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Belequent extends Controller
{
    public function index()
    {
        $Article = new Article;
        $article->title = "Third Article";
    }
}
