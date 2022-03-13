@extends('layouts.layout')

@section('title', 'kalkulator BMR')

@section('additional')
<script>     
    function bmr() {
    var bmr;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var height = document.getElementById("height").value;
    var weigth = document.getElementById("weight").value;

    

        if (gender == "male") {
            bmr = Math.round(66.5 + ( 13.75 * weigth ) + ( 5.003 * height ) - ( 6.755 * age ));
            @if (!Auth::guest()) 
                $saveToDB = document.getElementById("value").value = bmr;
                $showButtonToSave = document.getElementById('buttonToSave').style.display = "inline-block";
            @endif
            document.getElementById("result").innerHTML = bmr + " kcal";
        }
        else {
            bmr = Math.round(655.1 + ( 9.563 * weigth ) + ( 1.850 * height ) - ( 4.676 * age ));
            @if (!Auth::guest()) 
                $saveToDB = document.getElementById("value").value = bmr;
                $showButtonToSave = document.getElementById('buttonToSave').style.display = "inline-block";
            @endif
            document.getElementById("result").innerHTML = bmr + " kcal";
        } 
    }                         
</script>
@endsection

@section('content')
<section id="calculators" class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-12">
                <h2 class="display-4 lh-1 mb-4 text-center">Kalkulator BMR</h2>
                    <div class="col-8 col-lg-4 mx-auto d-block">
                        <img class="img-fluid rounded" src="../img/foodcalc.png" alt="..." />
                    </div>
                <p align="justify" class="lead fw-normal text-muted mb-2 mb-lg-2">Podstawowa przemiana materii, znana również jako BMR, to ilość energii spalanej przez organizm w stanie spoczynku każdego dnia. Innymi słowy: jest to liczba kalorii potrzebna do utrzymania funkcji organizmu, gdy nie wykonujesz żadnej aktywności fizycznej.</p>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                        <input type="radio" class="form-check-input" id="gender" value="male">
                        <label for="gender" class="form-check-label">Mężczyzna</label>
                    </div>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                        <input type="radio" class="form-check-input" id="gender" value="female">
                        <label for="gender" class="form-check-label">Kobieta</label>
                    </div>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                        <label for="age" class="form-label">Wiek</label>
                        <input type="number" class="form-control" id="age">
                      </div>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                        <label for="height" class="form-label">Wzrost (cm)</label>
                    <input type="number" class="form-control" id="height">
                      </div>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                        <label for="weight" class="form-label">Waga (kg)</label>
                        <input type="number" class="form-control" id="weight">
                    </div>
                    <button type="submit" onclick="bmr()" class="btn btn-warning">Oblicz</button>
                    <p class="lead fw-normal text-muted mb-2 mb-lg-2" id="result"></p>
                    @if (!Auth::guest())
                    <form  action="{{ route('calculator.bmrSavetoDB', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="value" name="bmr">
                        <button id="buttonToSave" style="display:none;" type="submit" class="btn btn-primary">Zapisz wynik</button>
                    </form>
                    @endif 
            </div>
        </div>
    </div>
</section>
@endsection