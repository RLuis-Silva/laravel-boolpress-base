@extends('layouts/main')
@section('main-content')
    <div class="container mb-5">
        <h1>Blog Archive</h1>
        
        {{-- se dato presente in DB --}}
        @forelse ($posts as $post)
            <article class="mb-5">
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->created_at -> format('d/m/Y') }}</h5>
                <p>{{ $post->body }}</p>
                <a href="#"> Read more</a>
            </article>
        {{-- se nessun dato presente in DB --}}
        @empty
            <p>No post found. Go and <a href="{{ route('posts.create') }}">create a new one</a> </p>
        @endforelse

    </div>
@endsection