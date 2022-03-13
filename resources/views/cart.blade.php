@extends('layouts.layout')

@section('title','podsumowanie')

@section('additional')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Produkt</th>
                                <th scope="col" width="120">Ilość</th>
                                <th scope="col" width="120">Kcal</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="../{{ $item->attributes->image }}" class="img-fluid w-50"></div>
                                        <figcaption class="info"> 
                                          <span class="title text-dark" data-abc="true">{{ $item->name }}</span>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td> 
                                  <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input class="w-50" type="number" name="quantity" value="{{ $item->quantity }}">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i></button>
                                  </form>
                                </td>
                                <td>
                                    <div class="price-wrap"> <var class="calorie">{{ $item->calorie }} kcal</var> <small class="text-muted"> / 100g </small> </div>
                                </td>
                                <td class="text-right d-none d-md-block">
                                  <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Usuń</button>
                                </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
        <aside class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Zapotrzebowanie dla mężczyzny:</dt>
                        <dd class="text-right ml-3">2500 kcal</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Zapotrzebowanie dla kobiety:</dt>
                        <dd class="text-right ml-3">2000 kcal</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Razem:</dt>
                        <dd class="text-right text-dark b ml-3"><strong>{{ Cart::getTotal() }} kcal</strong></dd>
                    </dl>
                    <hr>
                    <form action="{{ route('cart.clear') }}" method="POST">
                      @csrf
                      <button class="btn btn-out btn-primary btn-square btn-main">Usuń wszystko</button>
                    </form> 
                    <a href="{{ route('products.list') }}" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Dalej wybieraj produkty</a>
                </div>
            </div>
        </aside>
    </div>
  </div>
@endsection

          {{-- <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Twoje produkty do obliczenia kalorii: </h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Nazwa</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">100g</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> Kalorie</th>
                              <th class="hidden text-right md:table-cell"> Usuń </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">zatwierdź</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    {{ $item->price }} kcal
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div>
                         Razem: {{ Cart::getTotal() }} kcal
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Usuń wszystko</button>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection --}}