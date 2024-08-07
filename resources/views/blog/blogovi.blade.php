@extends('layouts.public')
@section('content')

<div class="container mt-5">
    <h1 class="text-center text-md-start">{{ $title }}</h1>
    <hr>
    <form method="GET" action="{{ route('blog.blogovi') }}">
        @if ($title != 'Упутства')
        <div class="row mb-4">
            <div class="col-md-4">
                <select name="kategorija" class="form-select">
                    <option value="">Све категорије</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->naziv }}" {{ request('kategorija')==$category->naziv ? 'selected' : ''
                        }}>
                        {{ $category->naziv }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 centriraj_search_dugme">
                <button type="submit" class="btn btn-primary custom-margin">Претражи</button>
            </div>
        </div>
        @endif

    </form>
    <div class="row">
        @foreach ($blogovi as $blog)

        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card d-flex flex-column p-1 dodaj_pozadinsku_boju_sivu">
                <img src="{{ asset('img/' . $blog->slika) }}" class="card-img-top" alt="{{ $blog->naslov }}">
                <div class="card-body d-flex flex-column justify-content-between" style="min-height: 200px;">
                    <h5 class="card-title">{{ mb_substr($blog->naslov, 0, 50) }}{{ mb_strlen($blog->naslov) > 50 ? '...'
                        : '' }}</h5>
                    <p class="card-text">
                        {!! mb_substr(strip_tags($blog->sadrzaj), 0, 90) !!}
                        {!! mb_strlen(strip_tags($blog->sadrzaj)) > 90 ? '...' : '' !!}
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $blog->blogCategory->naziv }}</small></p>
                    <a href="{{ route('blog.blog', $blog->id) }}" class="btn btn-primary p-2">Прочитај више</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<style>
    .card-img-top {
        object-fit: cover;
        height: 200px;
        /* Set your desired fixed height */
        width: 100%;
        /* Adjust this if needed based on your design */
    }

    .custom-margin {
        /* Default margin for large screens */
        margin-top: 0;
    }

    @media (max-width: 576px) {
        .custom-margin {
            margin-top: 1rem;
            /* Adjust this value as needed */
        }

        .dodaj_pozadinsku_boju_sivu {
            background-color: rgb(237, 234, 234);
        }

        .centriraj_search_dugme {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (max-width: 768px) and (min-width: 577px) {
        .custom-margin {
            margin-top: 2rem;
            /* Adjust this value as needed */
        }

    }
</style>

@endsection
