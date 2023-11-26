@extends('layouts.public')
@section('content')
    <div class="container mt-5 col-8">
        <h1>{{$title}}</h1>
        @if (!empty($resurs->fontovi[0]))
            @foreach ($resurs->fontovi as $font)
                @if ($font->objavljen)
                    <hr>
                    <h4>{{$font->naziv}}</h4>
                    <p>{{$font->opis}}</p>
                    @if (!empty($font->link_detaljno))
                        <a href="{{$font->link_detaljno}}" target="_blank">Детаљније о фонту.</a>
                    @endif
                    @foreach ($font->fajlovi as $file)
                        @if ($loop->first)
                            <p>Преузми фонт:</p>
                        @endif
                        <a href="/fonts/cirilica/{{$file->naziv}}" download>{{$file->naziv}}</a><br>
                    @endforeach
                @endif
            @endforeach
        @endif
        @if (!empty($resurs->video_tutorijali[0]))
            @foreach ($resurs->video_tutorijali as $vt)
                {{-- @if ($vt->objavljen) --}}
                <hr> 
                <h4>{{$vt->naziv}}</h4>
                <p>{{$vt->opis}}</p>
                <div>{!! $vt->embed_video !!}</div>
                {{-- @endif --}}
            @endforeach
        @endif
    </div>
@endsection
