@extends('layouts.public')
@section('content')
<div class="container mt-5 col-8 mb-5 prosiri_na_90">

    <h1 class="text-center text-md-start">{{$title}}
        @if($resurs->alias == 'база-фонтова')
        <a href="{{route('fontovi')}}" class="btn btn-primary p-2">Приказ свих фонтова</a>
        @endif
    </h1>

    @if (!empty($resurs->fontovi[0]))
    @foreach ($resurs->fontovi as $font)
    @if ($font->objavljen)
    <hr>
    <h4>{{$font->naziv}} </h4>
    <p>{{$font->opis}}</p>
    @if (!empty($font->link_detaljno))
    <a href="{{$font->link_detaljno}}" target="_blank">Детаљније о фонту.</a>
    @endif
    @foreach ($font->fajlovi as $file)
    @if ($loop->first)
    <p>Преузми фонт:</p>
    @endif
    <a class="btn btn-primary p-2 mb-2" href=" /fonts/cirilica/{{$file->naziv}}" download>{{$file->naziv}}</a><br>
    @endforeach
    @endif
    @endforeach
    @endif

    @if (!empty($resurs->video_tutorijali[0]))
    @foreach ($resurs->video_tutorijali as $vt)
    {{-- @if ($vt->objavljen) --}}
    <hr>
    <br>
    <h4>{{$vt->naziv}}</h4>
    <p>{{$vt->opis}}</p>
    <div class="video-container m-auto">
        {!! $vt->embed_video !!}
    </div>
    <br>
    {{-- @endif --}}
    @endforeach
    @endif
</div>

<style>
    /* Style for video container */
    .video-container {
        position: relative;
        padding-bottom: 30%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        max-width: 50%;
        margin-bottom: 1rem;
        text-align: center;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Make video fit 90% width on small screens */
    @media (max-width: 767.98px) {
        .video-container {
            max-width: 90%;
            margin: 0 auto;
            padding-bottom: 50%;
        }

        .prosiri_na_90 {
            width: 90%;
            margin: 0 auto;
        }
    }

    @media (max-width: 1090px) {
        .video-container {
            max-width: 90%;
            margin: 0 auto;
            padding-bottom: 50%;
        }
    }
</style>
@endsection
