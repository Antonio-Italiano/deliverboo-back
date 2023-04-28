@extends('layouts.app')

@section('title', 'Crea un nuovo Ristorante')

@section('content')
<div class="container-fluid">
  <header class="m-5">
    <h1 class="text-center">Crea Ristorante</h1>
  </header>
    @include('includes.restaurants.form')
</div>
    
@endsection