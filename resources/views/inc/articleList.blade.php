@foreach($articles as $a)
  @php
    $reviews = $a->reviews;
  @endphp
  <div class="rounded">
    <div class="article-container row">
      <div class="col-xs-12">
        <div class="col-md-9 col-xs-12 bg-dark text-light rounded">
          <h3><a class="text-light" href = "articles/{{$a->id}}">{{$a->title}}</a></h3>
          <div class="author-line">
            <p> {{ __('articles.by') }} <a href="#">{{$a->user()->first()->getName()}}</a></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 bg-light">
            <a href="articles/{{$a->id}}/reviews"> {{ __('articles.reviews')}} ({{ sizeof($reviews)}})</a></br> <a href="#"> {{ __('articles.submit_review')}}</a>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="col-md">
    </div>
  </div>
@endforeach
