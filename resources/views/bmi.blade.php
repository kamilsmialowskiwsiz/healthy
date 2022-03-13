@extends('layouts.layout')

@section('title', 'kalkulator BMI')

@section('additional')
    <script>     
        function bmi()
        {
            var x = document.getElementById("weight").value;
            var y = document.getElementById("height").value;
            
            var BMI = Math.round((x/(y*y)*10000));

            @if (!Auth::guest()) 
                $saveToDB = document.getElementById("value").value = BMI;
                $showButtonToSave = document.getElementById('buttonToSave').style.display = "inline-block";
            @endif

            if (BMI<18.5){
                        document.getElementById("result").innerHTML = "wartość BMI: " + BMI + " - niedowaga";
                    }

                    else if ((18.5<=BMI) && (BMI<=24.9)){
                        document.getElementById("result").innerHTML = "wartość BMI: " + BMI + " - prawidłowa waga";
                    }

                    else if ((25<=BMI) && (BMI<=29.9)){ 
                        document.getElementById("result").innerHTML = "wartość BMI: " + BMI + " - nadwaga";
                    }

                    else if (BMI>30){
                        document.getElementById("result").innerHTML = "wartość BMI: " + BMI + " - otyłość";
                    }                    
        }                        
    </script>
@endsection

@section('content')
    <section id="calculators" class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-12">
                    <h2 class="display-4 lh-1 mb-4 text-center">Kalkulator BMI</h2>
                        <div class="col-8 col-lg-4 mx-auto d-block">
                            <img class="img-fluid rounded" src="../img/bmicalc.png" alt="..." />
                        </div>
                    <p align="justify" class="lead fw-normal text-muted mb-2 mb-lg-2">Wskaźnik masy ciała. Miara, która wiąże masę ciała z wzrostem. BMI jest czasami używany do pomiaru całkowitej tkanki tłuszczowej i sprawdzenia, czy dana osoba ma prawidłową wagę. Nadmiar tkanki tłuszczowej wiąże się ze zwiększonym ryzykiem niektórych chorób, w tym chorób serca i niektórych nowotworów.</p>
                        <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                            <label for="weight" class="form-label">Waga (kg)</label>
                            <input type="number" class="form-control" id="weight">
                        </div>
                        <div class="lead fw-normal text-muted mb-2 mb-lg-2">
                            <label for="height" class="form-label">Wzrost (cm)</label>
                            <input type="text" class="form-control" id="height">
                        </div>
                        <button onclick="bmi()" class="btn btn-primary">Oblicz</button>
                        <p class="lead fw-normal text-muted mb-2 mb-lg-2" id="result"></p>
                        @if (!Auth::guest())
                        <form  action="{{ route('calculator.bmiSavetoDB', Auth::user()->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="value" name="bmi">
                            <button id="buttonToSave" style="display:none;" type="submit" class="btn btn-primary">Zapisz wynik</button>
                        </form>
                        @endif 
                </div>
            </div>
        </div>
    </section>
@endsection
