@extends('layouts.app')

@section('title', 'Page Title')
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')

<div class="container">
  <div class="row">

    <div class="col-{{Auth::check() ? 9 : 12}}">
      @php
      Use App\Article;
      $articles = App\Article::where('id', $test)->get();
      $reviews = $articles->first()->reviews;
      @endphp
      @foreach($articles as $a)

        <h1>{{$a->title}}</h2>
        <em>Submitted by {{$a->user()->first()->getName()}}</em></br>
        <p>{!!$a->content!!}</p>
      @endforeach

    </div>
    <div class="col-{{Auth::check() ? 3 : 0}}">
      <a href="{{$a->id}}/reviews"> {{ __('articles.reviews')}} ({{ sizeof($reviews)}})</a></br>
      @if (Auth::check())
        <a href="articles/{{$a->id}}/newreview"> {{ __('articles.submit_review')}}</a>
      @endif
    </div>
  </div>
</div>
@endsection
