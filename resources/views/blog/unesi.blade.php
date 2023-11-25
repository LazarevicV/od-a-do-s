@extends('layouts.public')
@section('content')

    <div class="container my-5 col-4">
        <form action="{{ route('blog.unesiSubmit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Наслов:</label>
                <input type="text" class="form-control" name="naslov" required>
            </div>

            <div class="mb-3">
                <label for="sadrzaj" class="form-label">Садржај:</label>
                <textarea class="form-control" name="sadrzaj" required></textarea>
            </div>

            <div class="mb-3">
                <label for="kategorija" class="form-label">Категорија:</label>
                <input type="text" class="form-control" name="kategorija" required>
            </div>

            <div class="mb-3">
                <label for="slika" class="form-label">Слика:</label>
                <input type="text" class="form-control" name="slika" required>
            </div>

            <div class="mb-3">
                <label for="objavljen" class="form-label">Објављен:</label>
                <select class="form-select" name="objavljen">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="istaknut" class="form-label">Истакнути:</label>
                <select class="form-select" name="istaknut">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Unesi</button>
            <button class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">
                <a href="{{route('blog.list')}}">Откажи</a>
            </button>
        </form>
    </div>


@endsection