@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card m-5" style="max-width: 80%;">
        <div class="row g-0">
            <div class="col-md-4 p-3 text-center">
                <img src="{{ asset('storage/' . $restaurant->logo) }}" class="img-fluid rounded-3" alt="{{$restaurant->name}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$restaurant->name}}</h5>
                    <address class="card-text"> {{$restaurant->address}} </address>
                    <p class="card-text">{{$restaurant->description}}</p>
                    <p class="card-text">Tipo di cucina: 
                        @forelse ($restaurant->typologies as $typology)
                        <small class="text-body-secondary"> {{$typology->name}}@if(!$loop->last),@else. @endif  </small>
                        @empty
                        <small class="text-body-secondary"> nessuna tipologia </small>
                        @endforelse
                    </p>
                    <div class="d-flex d-lg-block justify-content-between">
                        <p class="card-text"><small class="text-body-secondary">Ordine Minimo: {{$restaurant->min_order}}€</small></p>
                        <p class="card-text mb-3"><small class="text-body-secondary">Costi di consegna: {{$restaurant->shipment_price}}€</small></p>
                    </div>
                    <a href="{{ route('admin.foods.index')}}"> <i class="fa-solid fa-utensils me-1" style="color: #0561ff;"></i> Visualizza Menu</a>
                </div>
            </div>

        </div>
        <div class="d-flex align-items-center justify-content-center justify-content-md-end px-3 gap-2">
            <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-warning ms-md-2 my-2 text-white">
                <i class="fas fa-pencil me-1"></i>Modifica
            </a>
            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ><i class="fa-solid fa-trash"></i> Elimina</button>
            <a href="{{ route('admin.restaurants.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Indietro</a>
        </div>
    </div>
</div>
@endsection
{{-- modale --}}
@extends('includes.modal')
@section('form-delete')
<form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST" class="delete-form text-center my-3">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Elimina</button>
</form>
@endsection