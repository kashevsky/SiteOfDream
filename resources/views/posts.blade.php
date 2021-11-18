@extends('layouts.main')
@section('content')
<div class="content">
<h1>Добрые посты</h1>
<div class="posts">
@foreach ($posts as $post)
<div class="post">
<img src = "{{$post->image}}">
<h2>{{$post->title}}</h2>
<p>{{$post->description}}</p>
</div>    
@endforeach
@endsection
