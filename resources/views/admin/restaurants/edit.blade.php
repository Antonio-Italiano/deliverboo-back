@extends('layouts.app')

@section('title', 'Modifica il tuo ristorante')

@section('content')
<div class="container-fluid">
  <header class="m-5">
    <h1 class="text-center">Modifica Ristorante</h1>
  </header>
    @include('includes.restaurants.form')
</div>
    
@endsection