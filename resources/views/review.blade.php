@extends('layouts.app')

@section('content')
  @php
    $review = App\Article::where('user_id', Auth::id())->get();
  @endphp

  <p>
    REVIEW GOES HERE
  </p>
@endsection
