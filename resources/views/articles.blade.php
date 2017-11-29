<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
@php
Use App\Article;
$articles = App\Article::all();
@endphp
<div class="container-fluid">
  <h2>{{__('articles.header')}}</h2>
  @include('inc/articleList')
</div>
@endsection
