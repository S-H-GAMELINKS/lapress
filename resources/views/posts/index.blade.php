@extends('layouts.layout')

@section('title', 'Laravel Press')

@section('content')

@foreach($posts as $post)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{!! str_limit($post->content, 20) !!}}</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-primary">記事を読む</a>
        </div>
    </div>
@endforeach

@endsection