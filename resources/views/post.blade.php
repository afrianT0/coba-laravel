@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="btn btn-dark btn-sm rounded-0 text-decoration-none text-uppercase"
                        style="font-size: 9px">{{ $post->category->name }}</a>
                    <h1>{{ $post->title }}</h1>

                    <small>
                        <p class="fst-italic">
                            <a href="/posts?author={{ $post->author->username }}"
                                class="text-decoration-none text-dark  fw-medium">{{ $post->author->name }}</a> -
                            {{ $post->created_at->format('F d, Y') }}
                        </p>
                    </small>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3"
                            alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/1920x1080?{{ $post->category->name }}" class="img-fluid mt-3"
                            alt="{{ $post->category->name }}">
                    @endif

                    <main class="my-3">
                        {!! $post->body !!}
                    </main>

                    <a href="/posts" class="d-block mt-3">Back to Posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
