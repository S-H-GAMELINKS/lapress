@extends('layouts.layout')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>

<div class="container">
    {!! $post->content !!}
</div>

@component('components.comments', ['comments' => $comments])
@endcomponent

@component('components.comment')
    @slot('id')
        {{ $post->id }}
    @endslot
@endcomponent

@endsection
