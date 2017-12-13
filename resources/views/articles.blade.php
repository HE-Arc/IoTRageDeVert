<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  @php
  Use App\Article;
  $articles = App\Article::all();
  @endphp

  <div class="container-fluid">
    <h2>{{__('articles.header')}}</h2>
    @foreach($articles as $a)
      @php
        $reviews = $a->reviews;
      @endphp
      <div class="rounded">
        <div class="article-container row">
          <div class="col-xs-12">
            <div class="col-md-9 col-xs-12 bg-dark text-light rounded">
              <h3><a class="text-light" href = "articles/{{$a->id}}">{{$a->title}}</a></h3>
              <div class="author-line">
                <p> {{ __('articles.by') }} <a href="#">{{$a->user()->first()->getName()}}</a></p>
              </div>
            </div>
            <div class="col-md-3 col-xs-12 bg-light">
                <a href="articles/{{$a->id}}/reviews"> {{ __('articles.reviews')}} ({{ sizeof($reviews)}})</a></br>
                <a href="articles/{{$a->id}}/newreview"> {{ __('articles.submit_review')}}</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
