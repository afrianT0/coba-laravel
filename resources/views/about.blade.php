@extends('layouts.main')

@section('container')
    <div class="text-center">
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <p>{{ $alamat }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    </div>
@endsection

