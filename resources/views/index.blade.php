@extends('layouts.layout')

@section('title', 'strona główna')

@section('additional')
    <style>
    .verticaltext {
        width: 1px;
        word-wrap: break-word;
        white-space: pre-wrap;
        text-transform: uppercase;
    }

    .overflowproducts {
        overflow: auto;
        height: 675px;
    }
    </style>
@endsection

@section('content')
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Zadbaj o swoje zdrowie.</h1>
                            <p class="lead fw-normal text-muted mb-5"><i>Człowiek jest tym, co je. - Ludwig Feuerbach</i></p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="img/soongplay.png" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="img/soonappstore.png" alt="..." /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="masthead-device-mockup">
                            <img src="img/exercises.gif" class="img-fluid rounded-pill" />
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"Jest siedem dni w tygodniu i „kiedyś” nie jest jednym z nich."</div>
                        <img src="img/quote.png" alt="..." style="height: 3rem" />
                    </div>
                </div>
            </div>
        </aside>
        <section id="calculators" class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Kalkulator BMI</h2>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3">Współczynnik BMI służy do określenia stanu masy ciała. Skrajne wartości oznaczają niedowagę lub nadwagę i mogą być niebezpieczne dla zdrowia. Wysoki poziom BMI to zwiększone ryzyko wystąpienia m.in. cukrzycy, miażdżycy, choroby niedokrwiennej serca, udaru mózgu. W przypadku kobiet w ciąży, dzieci w fazie wzrostu, sportowców, kulturystów wartość współczynnika nie będzie miarodajna.</p>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3"><a class="btn btn-outline-dark py-3 px-4 rounded-pill" href="{{ route('calculator.bmi') }}">Przejdź</a></p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded" src="img/bmicalc.png" alt="..." /></div>
                    </div>
                </div>
            </div>
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Zapotrzebowania kaloryczne (BMR)</h2>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3">Podstawowa przemiana materii PPM umożliwia obliczenie minimalnego zużycia energii dla podtrzymania podstawowych funkcji życiowych takich jak krążenie, oddech, metabolizm. Oblicz poziom dziennego zapotrzebowania kalorycznego na podstawie wzrostu, wagi, wieku.</p>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3"><a class="btn btn-outline-dark py-3 px-4 rounded-pill" href="{{ route('calculator.bmr') }}">Przejdź</a></p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded" src="img/foodcalc.png" alt="..." /></div>
                    </div>
                </div>
            </div>
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Kalkulator ciężaru maksymalnego</h2>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3">Ciężar maksymalny to nic innego jak obciążenie, z którym jesteś w stanie wykonać jedno poprawne technicznie powtórzenie (1PM). Świetnie sprawdzi się w obliczaniu maksa w wyciskaniu sztangi, unoszeniu sztangielek. Do obliczeń będziesz potrzebować ciężar jakim ćwiczyłeś oraz liczbę powtórzeń.</p>
                        <p class="lead fw-normal text-muted mb-3 mb-lg-3"><a class="btn btn-outline-dark py-3 px-4 rounded-pill" href="{{ route('calculator.maxrep') }}">Przejdź</a></p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded" src="img/benchpress.png" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="products">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4 order-lg-0">
                        <div class="features-device-mockup">
                            <h2 class="display-4 lh-1 mb-4 verticaltext">Produkty</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 overflowproducts">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                @foreach($products as $product)
                                <div class="col-md-6 mb-5">
                                    <div class="text-center">
                                        <img class="img-fluid" src="{{ url($product->image) }}" alt="{{ $product->name }}"/>
                                        <h3 class="font-alt">{{ $product->name }}</h3>
                                        <p class="text-muted mb-0">{{ $product->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section id="dietplan" class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">Plan dietetyczny</h2>
                        @if (Auth::guest())
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ route('login')}}">Aby zobaczyć plan, zaloguj się</a>
                        @elseif (((Auth::user()->bmi == null) || (Auth::user()->bmi == 0)))
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ route('calculator.bmi')}}">Wypełnij kalkulator BMI</a>
                        @elseif(Auth::user()->bmi < 18.5)
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ $gainweight }}" target="_blank">Pobierz za darmo</a>
                        @elseif(((18.5 <= Auth::user()->bmi) && (Auth::user()->bmi <= 24.9)))
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ $keepweight }}" target="_blank">Pobierz za darmo</a>
                        @elseif(Auth::user()->bmi >= 25)
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ $loseweight }}" target="_blank">Pobierz za darmo</a>
                        @endif
                </div>
            </div>
        </section>
@endsection
