@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ secure_asset('js/highlight.js') }}"></script>

@section('content')

  @php
  //$tinymcepath = base_path('vendor\tinymce\tinymce\tinymce.js'); // marche pas wth
  @endphp
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

  @php
  $article = App\Article::where('id', $article_id)->get();

  @endphp

  <div class="container">
    <h1>{{{ $article->first()->getTitle() }}} </h1>
    <p>{!! $article->first()->getContent() !!} </p>

    <form class="form-horizontal" method="POST" action="{{URL::to('/review_submit')}}">
      <input type="hidden" name="article_id" value="{{$article_id}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} mx-2">
        <label for="title" class="control-label">Title</label>
        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
        @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} mx-2">
        <label for="review">Review</label>
        <textarea class="form-control" id="content" rows="5" name="content">{{$article->first()->getContent()}}</textarea>
          @if ($errors->has('content'))
            <span class="help-block">
              <strong>{{ $errors->first('content') }}</strong>
            </span>
          @endif
      </div>

      <button type="submit" class="btn btn-primary">
          Send Review
      </button>

    </form>
    <button onclick="quote()" class="btn btn-primary">
      Quote
    </button>
  </div>


@endsection
