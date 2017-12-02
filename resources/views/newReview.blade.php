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
        <form class="form-horizontal" method="GET" action="">

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
            <textarea class="form-control" id="content" rows="5" name="content" required></textarea>
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
      </div>
    </div>
  </div>


@endsection
