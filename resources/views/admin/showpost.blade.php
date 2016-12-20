@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/admin/posts" class="btn btn-primary btn-sm pull-right" >Back</a>
        <h1>{{ $post->title }}</h1>
        <h2>Published: {{ date( "d. M. Y", strtotime($post->created_at))}}</h2>

    <p>{{ $post->body }}</p>

    <blockquote>
        Author: {{$post->author->name}}
    </blockquote>
    </div>
@endsection