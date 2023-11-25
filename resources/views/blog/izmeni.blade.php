@extends('layouts.public')
@section('content')

    <div class="container mt-5 col-4">
        <form method="POST" action="{{ route('blog.izmeniSubmit', $blog->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Наслов (*)</label>
                <input type="text" required name="naslov" class="form-control" value="{{ $blog->naslov }}">
            </div>

            <div class="mb-3">
                <label for="sadrzaj" class="form-label">Садржај (*)</label>
                <textarea required name="sadrzaj" class="form-control">{{ $blog->sadrzaj }}</textarea>
            </div>

            <div class="mb-3">
                <label for="kategorija" class="form-label">Категорија (*)</label>
                <input type="text" required name="kategorija" class="form-control" value="{{ $blog->kategorija }}">
            </div>

            <div class="mb-3">
                <label for="slika" class="form-label">Слика:</label>
                <input type="text" class="form-control" name="slika" value="{{ $blog->slika }}">
            </div>

            <input type="hidden" name="objavljen" value="{{ $blog->objavljen }}">
            <input type="hidden" name="istaknut" value="{{ $blog->istaknut }}">

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <button class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">
                        <a href="{{route('blog.list')}}">Откажи</a>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
