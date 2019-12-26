<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
class HomeController extends Controller
{
    public function index()
    {
        $data = Article::get();
        return view('home',compact('data'));
    }
}
