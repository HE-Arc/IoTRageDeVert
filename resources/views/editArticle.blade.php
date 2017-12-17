@extends('layouts.app')
@section('content')
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script type="text/javascript">
    tinymce.init({
    selector: '#content',
    theme: 'modern',
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat'
  });
</script>
@php
Use App\Article;
$article = $c_article;
//$article = App\Article::where('id', $id)->get()->First();
@endphp
<div class="container">
  <h1>{{$article->getTitle()}}</h1>
  {!!$article->getContent()!!}
  <div class="row">
    <div class="col-sm-12">
      @if (Auth::check() && Auth::id() == $article->user_id)
        <form class="form-horizontal" method="POST" action="{{URL::to('/article_update')}}">
          <h2>Edit article</h2>
          <label for="title" class="control-label">Title</label>
          <input id="title" type="text" class="form-control" name="title" value="{{{$article->title}}}" required autofocus>

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="id" value="{{$article->id}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <textarea class="form-control" id="content" rows="5" name="content">
            {{{$article->content}}}
          </textarea>
          </br>
          <button type="submit" class="btn btn-primary">
              Send Article
          </button>
        </form>
      @endif
    </div>
  </div>
</div>
@endsection
