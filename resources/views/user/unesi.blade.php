@extends('layouts.public')
@section('content')
<div class="container pt-4 pb-4">
    <h1>{{$title}}</h1>
    <form action="{{ route('korisnici.unesiSubmit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ime_prezime" class="form-label">Име и презиме:</label>
            <input type="text" class="form-control" name="ime_prezime" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Е-маил:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="sifra" class="form-label">Шифра:</label>
            <input type="password" class="form-control" name="sifra" required>
        </div>

        <div class="mb-3">
            <label for="embed_video" class="form-label">Улога:</label>
            <select class="form-select" name="access_level">
                <option value="user" selected>Усер</option>
                <option value="admin">Админ</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary prosiri_dugme">Унеси</button>
        <a href="{{route('korisnici.list')}}" class="col-3 mx-1 btn btn-link prosiri_dugme"
            style="border: 1px solid #214252;">Откажи</a>
    </form>
</div>

<style>
    @media only screen and (max-width: 750px) {
        .prosiri_dugme {
            width: 45%;
            margin: 0 auto;
        }
    }
</style>
@endsection
