@extends('layout.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        @foreach ($data as $article)
            <h1>{{$article->}}</h1>
        @endforeach
    </div>   
@endsection



   

