@extends('layouts.public')
@section('content')

<!-- Add this to your Blade view file -->
<div class="container mt-5">
    <div class="row">
        @foreach ($blogovi as $blog)
            <div class="col-4 mb-4">
                <div class="card d-flex flex-column p-1">
                    <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 200px;"> <!-- Set your desired minimum height -->
                        <h5 class="card-title">{{ $blog->naslov }}</h5>
                        <p class="card-text">{{ substr($blog->sadrzaj, 0, 95) }}{{ strlen($blog->sadrzaj) > 95 ? '...' : '' }}</p>
                        <p class="card-text"><small class="text-muted">{{ $blog->kategorija }}</small></p>
                        <a href="{{ route('blog.blog', $blog->id) }}" class="btn btn-primary p-2">Прочитај више</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
    .card-img-top {
        object-fit: cover;
        height: 200px; /* Set your desired fixed height */
        width: 100%; /* Adjust this if needed based on your design */
    }
</style>

@endsection
