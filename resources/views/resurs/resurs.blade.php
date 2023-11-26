@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-8">
        <h1>{{$title}}</h1>
        @if (!empty($resurs->fontovi[0]))
            @foreach ($resurs->fontovi as $font)
                <h4>{{$font->naziv}}</h4>
                <p>{{$font->opis}}</p>
                @if (!empty($font->link_detaljno))
                    <a href="{{$font->link_detaljno}}">Детаљније о фонту.</a>
                @endif
                @foreach ($font->fajlovi as $file)
                    @if ($loop->first)
                        <p>Преузми фонт:</p>
                    @endif
                    <a href="/fonts/cirilica/{{$file->naziv}}">{{$file->naziv}}</a><br>
                @endforeach
            @endforeach
        @endif
    </div>
@endsection
