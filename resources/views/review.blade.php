@extends('layouts.app')

@section('content')
  @php
    Use App\Review;
    $review = App\Review::where('id', $review_id)->get();
  @endphp

  <div class="container">
    <h1>{{ $review->first()->getTitle() }}</h1>
    <p>{{ $review->first()->getContent() }}</p>
  </div>

@endsection
