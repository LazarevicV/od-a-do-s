@extends('layouts.public')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center text-md-start mb-4">{{$title}}</h1>

    @if (!empty($alati[0]))
    @foreach ($alati as $alat)
    @if ($alat->objavljen)
    <div class="mb-4">
        <hr>
        <h4 class="text-lg font-semibold mb-2">{{$alat->naziv}}</h4>
        <p class="text-sm mb-2">{{$alat->opis}}</p>
        <a href="{{$alat->url}}" class="btn btn-primary px-4 py-2 text-sm">Линк ка алату</a>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection
