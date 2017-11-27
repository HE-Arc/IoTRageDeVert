@extends('layouts.app')

@section('title', 'Page Title')
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')

@php
Use App\Article;
$articles = App\Article::where('id', $test)->get();
@endphp
@foreach($articles as $a)
  <h1>{{$a->title}}</h2>
  <p>{{$a->content}}</p>
@endforeach
@endsection
