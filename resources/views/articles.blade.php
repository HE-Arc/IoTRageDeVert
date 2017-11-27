<!-- Stored in resources/views/child.blade.php -->
@extends('app')

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

<p>List of articles</p>
@foreach($articles as $a)
  <div class="">
    <h3><a href = "articles/{{$a->id}}">{{$a->title}}</a></h3>
    <p> By {{$a->user()->first()->getName()}}
  </div>
@endforeach

@endsection
