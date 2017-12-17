@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{!! $review->first()->getTitle() !!}</h1>
    <em>Submitted by {{$review->first()->user->getName()}}</br></br>
    <p>{!! $review->first()->getContent() !!}</p>
  </div>
@endsection
