<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Healthy - aplikacja żywieniowa" />
        <meta name="author" content="Kamil Śmiałowski" />
        <title>Healthy - @yield('title')</title>
        <link rel="icon" type="image/x-icon" href="https://bit.ly/3zN9k0J" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <link href="{{ asset('styles.css') }}" rel="stylesheet" />
        @yield('additional')
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">Healthy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#calculators" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                              Kalkulatory
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item" href="{{ route('homepage') }}#calculators">Kalkulatory</a></li>
                              <li><a class="dropdown-item" href="{{ route('calculator.bmi') }}">Kalkulator BMI</a></li>
                              <li><a class="dropdown-item" href="{{ route('calculator.bmr') }}">Kalkulator BMR</a></li>
                              <li><a class="dropdown-item" href="{{ route('calculator.maxrep') }}">Kalkulator Maks. Powtórzenie</a></li>
                            </ul>
                          </div>
                        <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#calculators" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Produkty
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('homepage') }}#products">Produkty</a></li>
                            <li><a class="dropdown-item" href="{{ route('products.list') }}">Licznik kalorii</a></li>
                        </ul>
                        </div>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('homepage') }}#dietplan">Plan dietetyczny</a></li>
                        @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('login')}} ">Zaloguj</a></li>
                        @elseif (Auth::user()->is_admin === 1)
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('admin.home') }}">Witaj, {{ Auth::user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @else
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('user.home') }}">Witaj, {{ Auth::user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Healthy 2022. Wszelkie prawa zastrzeżone.</div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="scripts.js"></script>
        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    </body>
</html>
