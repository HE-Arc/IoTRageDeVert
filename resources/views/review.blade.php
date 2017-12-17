@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{!! $review->first()->getTitle() !!}</h1>
    <p>{!! $review->first()->getContent() !!}</p>
  </div>

@endsection
