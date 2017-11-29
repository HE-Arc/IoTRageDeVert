@extends('layouts.app')

@section('content')
  <h1>Your reviews</h1>
  @php
    Use App\Article;
    $articles = App\Article::where('user_id', Auth::id())->get();
  @endphp
  @if($articles == "[]")
    <p>You have no reviews... Feel free to make one. ;-)</p>
  @endif
  @include('inc/articleList')
@endsection
