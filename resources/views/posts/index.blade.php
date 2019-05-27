@extends('layouts.layout')

@section('title', 'Laravel Press')

@section('content')

@foreach($posts as $post)
    <p><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></p>
@endforeach

@endsection