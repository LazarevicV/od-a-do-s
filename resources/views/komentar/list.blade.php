@extends('layouts.public')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="">
            <div class="d-flex flex-column align-items-center align-items-md-start">
                <h1 class="text-center text-md-start">{{ $title }}</h1>
            </div>
            <div class="table-responsive">
                <table id="tabela" class="table table-striped table-hover mt-4">
                    <thead>
                        <tr>
                            <th>Име и презиме</th>
                            <th>Садржај</th>
                            <th>Наслов блога</th>
                            <th>Објави</th>
                            <th>Обриши</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komentari as $komentar)
                        <tr>
                            <td class="align-middle" style="width:160px">
                                {{ $komentar->user->ime_prezime }}
                            </td>
                            <td class="align-middle">
                                {{ $komentar->sadrzaj }}
                            </td>
                            <td class="align-middle" style="width:200px">
                                {{ $komentar->blog->naslov }}
                            </td>
                            @if ($komentar->objavljen)
                            <td style="width: 40px; height: 40px;" class="align-middle">
                                <a href="{{ route('komentar.unpublish', $komentar->id) }}"
                                    class="btn btn-success btn-sm py-1">
                                    <span class="bi bi-check-lg" style="font-size: 1.2em;"></span>
                                </a>
                            </td>
                            @else
                            <td style="width: 40px; height: 40px;" class="align-middle">
                                <a href="{{ route('komentar.publish', $komentar->id) }}"
                                    class="btn btn-danger btn-sm py-1">
                                    <span class="bi bi-x-lg" style="font-size: 1.2em;"></span>
                                </a>
                            </td>
                            @endif
                            <td style="width: 40px; height: 40px;" class="align-middle">
                                <a href="{{ route('komentar.obrisi', $komentar->id) }}"
                                    class="btn btn-danger btn-sm py-1">
                                    <span class="bi bi-trash" style="font-size: 1.2em;"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
