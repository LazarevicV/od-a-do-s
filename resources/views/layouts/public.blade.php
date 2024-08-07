<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- <script
        src="https://cdn.tiny.cloud/1/nm7d9yzl5cww8btcie73ml75ggzmk3b8mq4ux593831qmegk/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


    <title>{{$title}}</title>
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">

    <!-- Hamburger Menu Toggle Button -->
    <nav class="navbar navbar-dark d-lg-none d-block" style="background-color: #0D1B2A">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Collapsible Menu -->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="text-white p-5" style="background-color: #0D1B2A">
            <ul class="navbar-nav">
                @if (Auth::check() and Auth::user()->hasRole('admin'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="adminMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Админ мени</a>
                    <ul class="dropdown-menu" aria-labelledby="adminMenu">
                        <li><a class="dropdown-item text-dark" href="{{route('blog.list')}}">Блогови</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('komentar.list')}}">Коментари</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('alat.list')}}">Алати</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('resurs.list')}}">Ресурси</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('font.list')}}">Фонтови</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('videoTutorijal.list')}}">Видео
                                туторијали</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('korisnici.list')}}">Корисници</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('kontakt.list')}}">Контакт</a></li>
                    </ul>
                </li>
                @endif
                <li class="nav-item"><a class="nav-link text-white" href="{{route('pocetna')}}">Почетна</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="developmentMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Развој</a>
                    <ul class="dropdown-menu" aria-labelledby="developmentMenu">
                        <li><a class="dropdown-item text-dark" href="{{route('alat.alati')}}">Алати</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('uputstva')}}">Упутства</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="resourcesMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Ресурси</a>
                    <ul class="dropdown-menu" aria-labelledby="resourcesMenu">
                        <li><a class="dropdown-item text-dark" href="{{route('resurs.resurs', 'база-фонтова')}}">База
                                фонтова</a></li>
                        <li><a class="dropdown-item text-dark"
                                href="{{route('resurs.resurs', 'видео-туторијали')}}">Видео туторијали</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="{{route('blog.blogovi')}}">Блог</a></li>
                @if (Auth::check())
                <li class="nav-item"><a class="nav-link text-white" href="{{route('profile.edit')}}">Профил</a></li>
                <li class="nav-item" style="margin-left: -20px">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link text-white">Одјави се</button>
                    </form>
                </li>
                @else
                <li class="nav-item"><a class="nav-link text-white" href="{{route('login')}}">Улогуј се</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{route('register')}}">Региструј се</a></li>
                @endif
            </ul>
        </div>
    </div>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav d-none d-lg-block">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-3 d-flex align-items-center">
                            <a href="{{route('pocetna')}}">
                                <img src="{{ asset('img/logo1.png') }}" alt="" class="img-fluid"
                                    style="margin-top: -3%">
                            </a>
                        </div>

                        <div class="col-9">


                            <ul class="col-8 js-clone-nav text-start site-menu d-flex justify-content-between"
                                style="margin-left:150px!important;">
                                @if (Auth::check() and Auth::user()->hasRole('admin'))
                                <li class="has-children">
                                    <a>Админ мени</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('blog.list')}}" class="dropdaun">Блогови</a></li>
                                        <li><a href="{{route('komentar.list')}}" class="dropdaun">Коментари</a></li>
                                        <li><a href="{{route('alat.list')}}" class="dropdaun">Алати</a></li>
                                        <li><a href="{{route('resurs.list')}}" class="dropdaun">Ресурси</a></li>
                                        <li><a href="{{route('font.list')}}" class="dropdaun">Фонтови</a></li>
                                        <li><a href="{{route('videoTutorijal.list')}}" class="dropdaun">Видео
                                                туторијали</a></li>
                                        <li><a href="{{route('korisnici.list')}}" class="dropdaun">Корисници</a>
                                        </li>
                                        <li><a href="{{route('kontakt.list')}}" class="dropdaun">Контакт</a></li>
                                    </ul>
                                </li>
                                @endif
                                <li><a href="{{route('pocetna')}}">Почетна</a></li>
                                <li class="has-children">
                                    <a>Развој</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('alat.alati')}}" class="dropdaun">Алати</a></li>
                                        <li><a href="{{route('uputstva')}}" class="dropdaun">Упутства</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{route('resurs.resursi')}}">Ресурси</a>
                                    <ul class="dropdown">

                                        <li><a href="{{route('resurs.resurs', 'база-фонтова')}}" class="dropdaun">База
                                                фонтова</a></li>
                                        <li><a href="{{route('resurs.resurs', 'видео-туторијали')}}"
                                                class="dropdaun">Видео
                                                туторијали</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{route('blog.blogovi')}}">Блог</a></li>

                                @if (Auth::check())
                                <li><a href="{{route('profile.edit')}}">Профил</a></li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button style="background-color: transparent;
											border: none;
											cursor: pointer;
											padding-top: 0.6em;
											font-family: inherit;
											font-size: 18px;
											width: 98px;
											color: #b7bbbf;">
                                        Одјави се
                                    </button>
                                </form>
                                {{-- </li> --}}
                                @else
                                <li><a href="{{route('login')}}">Улогуј се</a></li>
                                <li><a href="{{route('register')}}">Региструј се</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="col-2 mx-auto make_bigger_when_small">
        @include('flash-message')
    </div>
    @yield('content')


    <footer class="site-footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-2">
                    <div class="widget">
                        <p>Добродошли на наш веб портал, где се заступамо за коришћење ћирилице на интернету.
                            Пружамо
                            платформу за креативно и инклузивно дељење информација и искустава на ћириличном писму.
                        </p>
                    </div>
                    <div class="widget">
                        <h3>Друштвене мреже</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-5">
                    <div class="widget">
                        <div style="text-align: center;">
                            <h3>Контакт форма</h3>
                        </div>
                        <form action="{{route('kontakt.dodaj')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Е-пошта:</label>
                                <input type="email" class="form-control border border-white text-white" name="email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Порука:</label>
                                <textarea class="form-control border border-white text-white" name="sadrzaj" rows="4"
                                    required></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary bg-light text-primary">Пошаљи</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 text-center">
                    <p class="m-0">Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>. Три прасета.</p>
                </div>
            </div>
        </div>
    </footer>



    <style>
        #sticky-nav {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .dropdaun {
            font-size: 16px !important;
        }



        @media only screen and (max-width: 1300px) {
            .make_bigger_when_small {
                width: 25%;
                margin: 0 auto;
            }
        }

        @media only screen and (max-width: 750px) {
            .make_bigger_when_small {
                width: 90%;
                margin: 0 auto;
            }
        }
    </style>

</body>

</html>
