@extends('layouts.layout')

@section('title','panel admina')

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
                <h1 class="display-4">Panel administracyjny</h1>
                <p class="lead mb-0">Wybierz jedną z dwóch opcji.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-6 col-sm-6 mb-6">
                <div class="bg-white rounded shadow-sm py-5 px-4">
                    <a href="{{ route('admin.productsList') }}">
                        <div>
                            <img src="https://bit.ly/3HSanz5" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Zarządzaj</h5><span class="small text-uppercase text-muted">produktami żywieniowymi</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-6">
                <div class="bg-white rounded shadow-sm py-5 px-4">
                    <a href="{{ route('admin.dietList') }}">
                    <div>
                        <img src="https://bit.ly/3nFkbFi" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Zarządzaj</h5><span class="small text-uppercase text-muted">planami dietetycznymi</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

