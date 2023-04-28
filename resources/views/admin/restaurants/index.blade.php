@extends('layouts.app')

@section('content')
<section>
    <div class="text-center mt-5 @if(count($restaurants) == 1) d-none @endif">
        <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i> Aggiungi il tuo ristorante
        </a>
    </div>

    <div class="text-center mt-5">
        <h1 class="bg-white p-2 px-5 rounded d-inline">Il tuo ristorante</h1>
    </div>
    <div class="row p-5 d-flex flex-wrap justify-content-center">
        @foreach ($restaurants as $restaurant)
        <div class="col-6 h-100" style="height: 350px; min-width:350px">
            <a href="{{ route('admin.restaurants.show', $restaurant['id']) }}" style="text-decoration: none; color:black;">
                <div class="card p-4 rounded-3">
                    <div class="info text-center py-3">
                        <h1>{{$restaurant->name}}</h1>
                    </div>
                    <figure class="mx-auto">
                        <img src="{{ asset('storage/' . $restaurant->logo) }}" alt="{{$restaurant->name}}" class="img-fluid rounded-1">
                    </figure>
                </div>
            </a>
            <div class="mt-3 d-flex justify-content-center align-items-center gap-3">
                <a href="{{ route('admin.restaurants.show', $restaurant->id) }}" class="btn btn-primary text-white"><i class="fa-solid fa-eye"></i> Visualizza</a>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-warning text-white"><i class="fa-solid fa-pen"></i> Modifica</a>

            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection