@extends('main')

@section('title', '| {{ $post->title}}')

@section('content')

<div class="row">
    <div class="com-md-8 col-md-offset-2">
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body}}</p>
    
    </div>
</div>

@endection