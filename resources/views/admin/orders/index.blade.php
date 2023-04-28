@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h3>Riepilogo Ordini</h3>
</div>
<div class="container bg-light rounded-3 py-2 mt-5">
    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col">Numero Ordine</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Numero telefonico</th>
                <th scope="col">Stato</th>
                <th scope="col">Data</th>
                <th scope="col">Importo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->address}}</td>
                <td>{{$order->phone_number}}</td>
                <td>eseguito con successo</td>
                <td>{{$order->updated_at}}</td>
                <td>€ {{$order->total_order}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection