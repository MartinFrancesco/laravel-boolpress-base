@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>BLOG</h1>

        @forelse ($posts as $post)
            <article class="mb-5">
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->created_at->format('d/m/Y') }}</h5>

                <p>{{ $post->body }}</p>
                <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
            </article>
            
        @empty
            <p>No posts found. Go and <a href="{{ route('posts.create')}}">create a new one</a></p>
            
        @endforelse
    </div>
@endsection