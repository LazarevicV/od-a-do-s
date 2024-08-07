@extends('layouts.public')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center text-md-start">{{$title}}</h1>
    @foreach ($resursi as $resurs)
    <div class="resource-item mb-4">
        <a href="{{ route('resurs.resurs', $resurs->alias) }}" class="">
            <h4 class="mb-2">{{ $resurs->naziv }}</h4>
        </a>
        <p class="description">{!! $resurs->opis !!}</p>
        <hr>
    </div>
    @endforeach
</div>
@endsection

<style>
    /* Custom styles for responsiveness */
    .resource-item {
        border: 1px solid #ddd;
        /* Optional: border around each resource item */
        padding: 15px;
        border-radius: 5px;
    }

    @media (max-width: 767.98px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    /* Optional: Adjusting heading size for smaller screens */
    @media (max-width: 767.98px) {
        .resource-item h4 {
            font-size: 1.25rem;
            /* Adjust as needed */
        }

        .resource-item .description {
            font-size: 0.875rem;
            /* Adjust as needed */
        }
    }
</style>
