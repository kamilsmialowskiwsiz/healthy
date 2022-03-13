@extends('layouts.layout')

@section('title','twoje wyniki')

@section('additional')
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
@endsection

@section('content')
<section>
    <div class="container py-5">
        <div class="row text-center text-black">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Twoje wyniki</h1>
                <p class="lead mb-0">BMI/BMR/Maksymalne powtórzenie</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12 col-sm-12 mb-12">
                <div class="bg-white rounded shadow-sm py-5 px-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">BMI</th>
                                    <th class="text-center">BMR</th>
                                    <th class="text-center">Maks. powtórzenie</th>
                                    <th class="text-center">Pomiar wykonany w</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{Auth::user()->bmi}}</td>
                                    <td class="text-center">{{Auth::user()->bmr}}</td>
                                    <td class="text-center">{{Auth::user()->maxrep}}</td>
                                    <td class="text-center">{{Auth::user()->updated_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection