@extends('layouts.layout')

@section('title','plany dietetyczne')

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
                </div>
            </div>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Plan</th>
                        <th class="text-center">Ścieżka do pliku</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diets as $diet)
                        <tr>
                            <td class="text-center">{{$diet->id}}</td>
                            <td class="text-center">{{$diet->name}}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.changeFilePath', $diet->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input class="form-control" type="text" value="{{$diet->filepath}}" name="filepath">
                            </td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-primary">Zmień</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection