<!-- Stored in resources/views/child.blade.php -->
@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

@php
Use App\User;
Use App\Article;
$articles = App\Article::all();
$users = App\User::all();
@endphp

<p>List of articles</p>
@foreach($articles as $a)
  <div class="">
    <h3><a href = "articles/{{$a->id}}">{{$a->title}}</a></h3>
    @foreach ($users as $u)
      @if ($u->id == $a->userid)
        <p> By {{$u->name}} </p>
      @endif
    @endforeach
  </div>
@endforeach

@endsection
