@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>{{ $post->title }}</h1>
        <div>Last update: {{ $post->updated_at->diffForHumans() }}</div>
        <div class="actions mb-5">
            <a class="btn btn-primary" href="">Edit</a>
        </div>

        <section class="tags">
            <h4>Tags:</h4>
            @forelse ($post->tags as $tag)
                <span class="badge badge-primary">{{ $tag->name }}</span>
            @empty
                <h6>No actual tags here.</h6>
            @endforelse
        </section>

        @if (!empty($post->path_img))
        <img src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
        @endif

        <div class="text mb-5 mt-5">{{ $post->body }}</div>

    </div>
@endsection