@extends('layouts.app')

@section('title', 'Page Title')
@section('sidebar')
    @parent
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-{{Auth::check() ? 9 : 12}}">
      @php
      $reviews = $c_article->first()->reviews;
      @endphp
      @foreach($c_article as $a)


        <div class="alert alert-info">
        <em>Submitted by {{$a->user()->first()->getName()}}</em></br>
        <p>Uploaded : {{$a->date_c()}}</p>
        <p>Last modification : {{$a->date_u()}}</p>
        </div>
        <h1>{{$a->title}}</h1>
        <p>{!!$a->content!!}</p>
    </div>
    @if (Auth::check())
      <div class="col-3">
        <div class="submit-review-button">
          <a href={{URL::to('articles/' . $a->id . '/newreview')}}>
            <button class="btn btn-primary">
              {{ __('articles.submit_review')}}
            </button>
          </a></br>
          <a href={{URL::to('articles/' . $a->id . '/reviews')}}>
            {{ __('articles.reviews')}} ({{ sizeof($reviews)}})
          </a></br>
          @if (Auth::id() == $a->user_id)
            <a href={{URL::to('editArticle/' . $a->id)}}>
              Edit article
            </a></br>
          @endif
        </div>
      </div>
    @endif
    @endforeach
  </div>
</div>
@endsection
