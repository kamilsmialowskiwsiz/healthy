@extends('layouts.layout')

@section('title','kalkulator 1RM')

@section('additional')
<script>     
    function maxrep()
    {
        var weight = document.getElementById("weight").value;
        var reps = document.getElementById("reps").value;
        
        var oneRepMax = Math.round((weight * (36 / (37 - reps)))*10)/10;

        @if (!Auth::guest()) 
            $saveToDB = document.getElementById("value").value = oneRepMax;
            $showButtonToSave = document.getElementById('buttonToSave').style.display = "inline-block";
        @endif
        
        document.getElementById("result").innerHTML = "Twoje maksymalnie jedno powtórzenie to: " + oneRepMax + " kg";
    }                         
</script>
@endsection

@section('content')
<section id="calculators" class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-12">
                <h2 class="display-4 lh-1 mb-4 text-center">Kalkulator ciężaru maksymalnego</h2>
                    <div class="col-8 col-lg-4 mx-auto d-block">
                        <img class="img-fluid rounded" src="../img/benchpress.png" alt="..." />
                    </div>
                <p align="justify" class="lead fw-normal text-muted mb-2 mb-lg-2">Maksymalne pojedyncze powtórzenie (w skrócie 1RM) jest jednym ze sposobów oceny twojej siły i reprezentuje najcięższy ciężar, jaki możesz podnieść. W praktyce można przetestować maks. jedno powtórzenie, zwiększając obciążenie sztangi. Jednak ta metoda nie jest zalecana dla wszystkich, zwłaszcza dla nowicjuszy z niewielkim doświadczeniem ze względu na ryzyko kontuzji. Na szczęście, jeśli możesz wykonać określoną liczbę powtórzeń z lżejszym ciężarem, możliwe jest przewidzenie maksymalnego ciężaru.</p>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                      <label for="weight" class="form-label">Waga (kg)</label>
                      <input type="number" class="form-control" id="weight">
                    </div>
                    <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                      <label for="reps" class="form-label">Powtórzenia</label>
                      <input type="text" class="form-control" id="reps">
                    </div>
                    <button type="submit" onclick="maxrep()" class="btn btn-danger">Oblicz</button>
                    <p class="lead fw-normal text-muted mb-2 mb-lg-2" id="result"></p>
                    @if (!Auth::guest())
                    <form  action="{{ route('calculator.maxrepSavetoDB', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="value" name="maxrep">
                        <button id="buttonToSave" style="display:none;" type="submit" class="btn btn-primary">Zapisz wynik</button>
                    </form>
                    @endif
            </div>
        </div>
    </div>
</section>
@endsection