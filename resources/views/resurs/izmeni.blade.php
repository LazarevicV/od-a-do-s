@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-4">
        <h1>{{$title}}</h1>
        <form method="POST" action="{{ route('resurs.izmeniSubmit', $resurs->id) }}">
            @csrf
            <div class="mb-3">
                <label for="naslov" class="form-label">Назив (*)</label>
                <input type="text" required name="naziv" class="form-control" value="{{ $resurs->naziv }}">
            </div>
            
            <div class="mb-3">
                <label for="opis" class="form-label">Опис (*)</label>
                <input type="text" required name="opis" class="form-control" value="{{ $resurs->opis }}">
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Линк ка ресурсу (*)</label>
                <input type="text" required name="link" class="form-control" value="{{ $resurs->link }}">
            </div>
            <input type="hidden" name="objavljen" value="{{ $resurs->objavljen }}">

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <button class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">
                        <a href="{{route('resurs.list')}}">Откажи</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection