@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-4">
            <a href="/posts/{{ $posts[0]->slug }}">
                <div class="bg-cover">
                    <div style="max-height: 400px; overflow:hidden;">
                        @if ($posts[0]->image)
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid mt-3"
                                alt="{{ $posts[0]->category->name }}">
                            <div class="cover bg-dark"></div>
                        @else
                            <img src="https://source.unsplash.com/1920x1080?{{ $posts[0]->category->name }}"
                                class="card-img-top w-100" alt="{{ $posts[0]->category->name }}">
                            <div class="cover bg-dark"></div>
                        @endif
                    </div>
                </div>
            </a>
            {{-- <a href="/posts/{{ $posts[0]->slug }}">
                <div class="bg-cover">
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                        class="card-img-top w-100" alt="{{ $posts[0]->category->name }}">
                    <div class="cover bg-dark"></div>
                </div>
            </a> --}}
            <div class="position-absolute p-3">

                @include('partials.category-badge', ['category' => $posts[0]->category])

            </div>
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-body-secondary fst-italic">
                        <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none text-dark fw-medium">{{ $posts[0]->author->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">

            @foreach ($posts->skip(1) as $post)
                <div class="col">
                    <div class="card h-100">
                        <div class="bg-cover">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                                <div class="cover bg-dark"></div>
                            </a>
                        </div>
                        <div class="position-absolute p-3">

                            @include('partials.category-badge', ['category' => $post->category])

                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-body-secondary fst-italic">
                                    <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none text-dark fw-medium">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="pagination-around">
        {{ $posts->links() }}
    </div>

@endsection
