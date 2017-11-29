@extends('layouts.app')

@section('content')
  <h1>Your Reviews</h1>
  @php
    Use App\Article;
    $articles = App\Article::where('id', Auth::id())->get();
  @endphp
  @foreach($articles as $a)
    <h1>{{$a->title}}</h2>
    <p>{{$a->content}}</p>
  @endforeach
@endsection
