@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-lg-8">
                <article>
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="btn btn-dark btn-sm rounded-0 text-decoration-none text-uppercase"
                        style="font-size: 9px">{{ $post->category->name }}</a>

                    <h1 class="mb-3">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-dark"><i class="bi bi-arrow-left fs-6"></i> Back</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning"><i
                            class="bi bi-pencil-square fs-6"></i>
                        Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                class="bi bi-trash fs-6"></i> Delete</button>
                    </form>

                    <div class="bg-cover">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3"
                                alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/1920x1080?{{ $post->category->name }}"
                                class="img-fluid mt-3" alt="{{ $post->category->name }}">
                        @endif
                    </div>


                    <main class="my-3">
                        {!! $post->body !!}
                    </main>
                </article>
            </div>
        </div>
    </div>
@endsection
