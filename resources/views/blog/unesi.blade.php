@extends('layouts.public')
@section('content')

<div class="container my-5 col-4">
    <form action="{{ route('blog.unesiSubmit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="naslov" class="form-label">Naslov:</label>
            <input type="text" class="form-control" name="naslov" required>
        </div>

        <div class="mb-3">
            <label for="sadrzaj" class="form-label">Sadržaj:</label>
            <textarea class="form-control" name="sadrzaj" required></textarea>
        </div>

        <div class="mb-3">
            <label for="kategorija" class="form-label">Kategorija:</label>
            <input type="text" class="form-control" name="kategorija" required>
        </div>

        <div class="mb-3">
            <label for="slika" class="form-label">Slika:</label>
            <input type="text" class="form-control" name="slika" required>
        </div>

        <div class="mb-3">
            <label for="objavljen" class="form-label">Objavljen:</label>
            <select class="form-select" name="objavljen">
                <option value="0">Ne</option>
                <option value="1">Da</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="istaknut" class="form-label">Istaknut:</label>
            <select class="form-select" name="istaknut">
                <option value="0">Ne</option>
                <option value="1">Da</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Unesi</button>
    </form>
</div>


@endsection