@extends('layouts.layout')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>

<div class="container">
    {!! $post->content !!}
</div>
@endsection