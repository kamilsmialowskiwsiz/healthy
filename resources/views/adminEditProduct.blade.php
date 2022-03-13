@extends('layouts.layout')

@section('title','edycja produktu')

@section('additional')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <div>
            <a class="btn btn-dark mb-3" href="{{ route('admin.productsList') }}" type="button" title="Wstecz">
                <span class="fas fa-angle-left"> Wstecz</span>
            </a>
        </div>
        <div class="row text-center text-black">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Edytor produktu</h1>
                <p class="lead mb-0">Uzupełnij formularz, aby zmodyfikować produkt dodany na stronę.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12 col-sm-12 mb-12">
                <form action="{{ route('admin.updateProduct', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label for="name" class="form-label">Nazwa:</label>
                    <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Opis:</label>
                        <input type="text" class="form-control" id="description" value="{{$product->description}}" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Link do zdjęcia:</label>
                        <input type="text" class="form-control" id="image" value="{{$product->image}}" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="calorie" class="form-label">Kalorie (100g):</label>
                        <input type="text" class="form-control" id="calorie" value="{{$product->calorie}}" name="calorie">
                    </div>
                    <button type="submit" class="btn btn-primary">Zatwierdź</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection