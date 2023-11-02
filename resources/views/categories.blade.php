@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category</h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-white text-white">
                        <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center text-center bg-dark bg-opacity-50">
                            <h2 class="card-title flex-fill">{{ $category->name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
