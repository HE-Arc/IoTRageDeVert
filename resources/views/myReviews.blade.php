@extends('layouts.app')

@section('content')
  <h1>Your reviews</h1>
  @php
    Use App\Review;
    $review = App\Review::where('user_id', Auth::id())->get();
  @endphp
  @if($review->isEmpty())
    <p>You have no reviews... Feel free to make one. ;-)</p>
  @endif
  @foreach($review as $r)
    <div class="rounded">
      <div class="article-container row">
        <div class="col-xs-12">
          <div class="col-md-9 col-xs-12 bg-dark text-light rounded">
            <h3><a class="text-light" href = "{{$r->id}}/review">{{$r->title}}</a></h3>
            <div class="author-line">
              <p> {{ __('articles.by') }} <a href="#">{{$r->user()->first()->getName()}}</a></p>
            </div>
          </div>
          <div class="col-md-3 col-xs-12 bg-light">
            @if (Auth::check() && Auth::id() == $r->user_id)
              <a href="editReview/{{$r->id}}"> Edit review</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
