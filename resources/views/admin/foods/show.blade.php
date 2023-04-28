@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card m-5">
        <div class="row g-0 align-items-center">
            <div class="col-md-4 p-3">
                <img src="{{ $food->image ? asset('storage/' . $food->image) : 'https://marcolanci.it/utils/placeholder.jpg' }}" class="img-fluid rounded-3" alt="{{$food->name}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title ">{{$food->name}}</h5>
                    <address class="card-text"> {{$food->address}} </address>
                    <p class="card-text mb-0"><b>Ingredienti:</b> {{$food->description}}</p>
                    <div class="d-flex d-lg-block justify-content-between">
                        <p class="card-text"><b> Prezzo: </b><small class="text-body-secondary">{{$food->price}}€</small></p>
                    </div>
                    <p class="card-text"><b>Stato: </b><small class="text-body-secondary">{{$food->is_public ? 'pubblicato' : 'bozza'}}</small></p>
                </div>
            </div>

        </div>
        <div class="d-flex align-items-center justify-content-center justify-content-md-end  me-3 mb-3 gap-2">
            <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-warning ms-2  text-white">
                <i class="fas fa-pencil me-1"></i>Modifica
            </a>
                
            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-trash"></i> Elimina</button>
            
            <a href="{{ route('admin.foods.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Indietro</a>
        </div>

    </div>
</div>
@endsection

{{-- modale --}}
@extends('includes.modal')
@section('form-delete')
<form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" class="delete-form text-center my-3">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Elimina</button>
</form>
@endsection