@extends('layouts.layout')

@section('title','produkty')

@section('additional')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('content')
<section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="mx-auto pull-right">
                <div class="mb-2">
                    <div>
                        <a class="btn btn-dark mb-3" href="{{ route('admin.home') }}" type="button" title="Wstecz">
                            <span class="fas fa-angle-left"> Wstecz</span>
                        </a>
                    </div>
                    <form action="{{ route('admin.productsList') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Szukaj">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control mr-2" name="term" placeholder="Szukaj" id="term">
                            <a href="{{ route('admin.productsList') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Odśwież">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
                <a class="btn btn-success" href="{{ route('admin.createProducts') }}" title="Stwórz produkt"> <i class="fas fa-plus-circle"></i> Dodaj produkt
                </a>
            </div>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nazwa</th>
                        <th class="text-center">Opis</th>
                        <th class="text-center">Zdjęcie</th>
                        <th class="text-center">Kalorie</th>
                        <th class="text-center">Edycja</th>
                        <th class="text-center">Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{$product->id}}</td>
                            <td class="text-center">{{$product->name}}</td>
                            <td class="text-center">{{$product->description}}</td>
                            <td class="text-center"><img class="img-fluid" src="../../{{$product->image}}" alt="{{$product->name}}"></td>
                            <td class="text-center">{{$product->calorie}} kcal</td>
                            <td class="text-center">
                                <form action="{{ route('admin.destroyProduct', $product->id) }}" method="POST">
                                    <a href="{{ route('admin.editProduct', $product->id) }}">
                                        <i class="fas fa-edit  fa-lg"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                            <td class="text-center">       
                                    <button type="submit" onclick="return confirm('Jesteś pewien?')" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection