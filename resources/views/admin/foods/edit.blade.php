@extends('layouts.app')

@section('title', 'Modifica cibo')


@section('content')
<div class="container-fluid">
  <header class="m-5">
    <h1 class="text-center">Modifica Cibo</h1>
  </header>
    @include('includes.foods.form')
</div>

@endsection
