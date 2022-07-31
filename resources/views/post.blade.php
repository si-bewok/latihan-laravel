@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>
        <h6>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Blog</a>
@endsection