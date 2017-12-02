@extends('layouts.app')

@section('content')
  @php
  $article = App\Article::where('id', $article_id)->get();
  @endphp
  
  <div class="container">

    <div class="row">
      <div class="col-sm-6">
        <h1>{{ $article->first()->getTitle() }} </h1>
        <p>{{ $article->first()->getContent() }} </p>
      </div>
      <div class="col-sm-6">
        <p>REVIEW AREA</p>
      </div>
    </div>

    <form class="form-horizontal" method="GET" action="">
      <button type="submit" class="btn btn-primary">
          Send Review
      </button>
    </form>
  </div>


@endsection
