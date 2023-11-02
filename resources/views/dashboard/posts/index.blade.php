@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        {{-- @elseif (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create</a>
        <table id="data" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="badge bg-info"><i
                                    class="bi bi-eye fs-6"></i></a>
                            {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i
                                    class="bi bi-eye fs-6"></i></a> --}}
                            <a href="{{ route('posts.edit', $post) }}" class="badge bg-warning"><i
                                    class="bi bi-pencil-square fs-6"></i></a>
                            {{-- <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil-square fs-6"></i></a> --}}
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                {{-- <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline"> --}}
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                        class="bi bi-trash fs-6"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
