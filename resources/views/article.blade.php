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
      $reviews = $c_article->first()->reviews;
      @endphp
      @foreach($c_article as $a)

        <h1>{{$a->title}}</h2>
        <em>Submitted by {{$a->user()->first()->getName()}}</em></br>
        <p>{!!$a->content!!}</p>
    </div>
    @if (Auth::check())
      <div class="col-3">
        <div class="submit-review-button">
          <input type="button" value="Submit review">
          <a href="articles/{{$a->id}}/reviews"> {{ __('articles.reviews')}} ({{ sizeof($reviews)}})</a></br>
        </div>
      </div>
    @endif
    @endforeach
  </div>
</div>
@endsection
