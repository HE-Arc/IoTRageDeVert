@extends('layouts.app')
@section('content')
  @php
  $article = App\Article::where('id', $article_id)->get();
  @endphp
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1> List of reviews concerning "{{ $article->first()->getTitle()}}" : </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <ul class="list-group">
      @foreach ($article->first()->reviews as $r)
          <li class="list-group-item list-group-item-success">
            <em>{{$r->getTitle()}}</br></em> by <a href="#">{{$r->user->getName()}}</a>
          </li>
      @endforeach
        </ul>
      </div>
      <div class="col-4">
        <img src="https://cdn3.opnminded.com/wp-content/uploads/2013/10/pubs-internet.jpg">
        <img src="https://cdn1.opnminded.com/wp-content/uploads/2013/10/pub-internet-rides.jpg">
        <img src="https://cdn1.opnminded.com/wp-content/uploads/2013/10/regime-avant-apres.jpg">
      </div>
  </div>
</div>
@endsection
