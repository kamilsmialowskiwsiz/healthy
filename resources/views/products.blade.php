@extends('layouts.layout')

@section('title','wybierz produkty')

@section('content')
    <section class="header pb-1 text-center">
        <div class="container">
            <header>
                <h1 class="display-4">Licznik kalorii</h1>
                <p class="font-italic text-muted mb-4">Wybierz produkty, które zjadłeś, a następnie przejdź do podsumowania.</p>
                <a href="{{ route('cart.list') }}" class="font-italic mb-1 btn btn-warning">Dodane: {{ Cart::getTotalQuantity()}} produkty/ów</a>
            </header>
        </div>
    </section>
    <section class="pt-1">
        <div class="container text-center">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-4 pt-4">
                        <img class="img-fluid mb-3 img-thumbnail" src="{{ url($product->image) }}" alt="">
                        <h3 class="h3">{{ $product->name }}</h3>
                        <p class="font-italic text-muted mb-1">{{ $product->calorie }} kcal / 100g</p>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->calorie }}" name="calorie">
                            <input type="hidden" value="{{ $product->image }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-warning">Dodaj produkt</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection