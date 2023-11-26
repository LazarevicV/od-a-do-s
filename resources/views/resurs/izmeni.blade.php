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
            
            <input type="hidden" name="objavljen" value="{{ $resurs->objavljen }}">

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button class="col-3 mx-1 btn btn-primary">
                        Сачувај
                    </button>
                    <a href="{{route('resurs.list')}}" class="col-3 mx-1 btn btn-link" style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </form>
    </div>
@endsection