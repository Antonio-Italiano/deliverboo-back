@extends('layouts.app')

@section('title', 'Foods')

@section('content')
  <header class="d-flex align-items-center justify-content-between">
    <h1 class="my-5 bg-white p-2 px-3 rounded">Menù</h1>
    <div class="d-flex flex-grow-1 align-items-center justify-content-center">
      
    </div>
    <a href="{{ route('admin.foods.create') }}" class="btn btn-success ms-3">
      <i class="fas fa-plus me-2"></i> Crea nuovo
    </a>
  </header>


  <div class="table-container">
    <table class="table table-light table-striped mb-0">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Price</th>
          <th scope="col" class=" d-none d-md-table-cell">Description</th>
          <th class="d-none d-md-table-cell" scope="col">Stato</th>
          <th class=" d-none d-lg-table-cell" scope="col">Created</th>
          <th class=" d-none d-lg-table-cell" scope="col">Updated</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($foods as $food)
          <tr>
            <th scope="row">
              {{ $food->id }}</th>
            <td>
              <a href="{{ route('admin.foods.show', $food->id) }}">
                {{ $food->name }}</a>
              </td>
              
            <td>
              <figure>
                <a href="{{ route('admin.foods.show', $food->id) }}">
                  <img src="{{ $food->image ? asset('storage/' . $food->image) : 'https://marcolanci.it/utils/placeholder.jpg' }}" alt="" width="150"> 
                </a>
              </figure>
            </td>
            <td>€{{ $food->price }}</td>
            <td class=" d-none d-md-table-cell">{{ $food->description }}</td>
            <td class=" d-none d-md-table-cell">
                <form action="{{ route('admin.foods.toggle', $food->id) }}" method="POST">
                  @method('PATCH')
                  @csrf
  
                  <button type="submit" class="btn btn-outline">
                    <i class="fas fa-2x fa-toggle-{{ $food->is_public ? 'on' : 'off' }}   {{ $food->is_public ? 'text-success' : 'text-danger' }}"></i>
                  </button>
                </form>
                {{-- <i class="fas fa-2x fa-{{ $food->is_public ? 'check' : 'x' }} text-{{ $food->is_public ? 'success' : 'danger' }}"></i> --}}
            </td>
            <td class=" d-none d-lg-table-cell">{{ $food->getDateDiff('created_at') }}</td>
            <td class=" d-none d-lg-table-cell">{{ $food->getDate('updated_at', 'd-m-Y H:i:s') }}</td>
            <td>
              <div class="d-flex justify-md-content-end flex-column flex-md-row align-items-center">
  
                  <a href="{{ route('admin.foods.show', $food->id) }}" class="btn btn-sm btn-primary p-1">
                      <i class="fas fa-eye"></i>
                  </a>
  
                  <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-sm btn-warning ms-md-2 p-1 text-white">
                    <i class="fas fa-pencil"></i>
                  </a>
  
                  <button class="ms-md-2 btn btn-sm btn-danger p-1" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
          {{-- modale --}}
          @extends('includes.modal')
          @section('form-delete')
            <form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" class="delete-form text-center my-3">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
          @endsection
        @empty
          <tr>
            <th scope="row" colspan="9" class="text-center">Non ci sono Cibi</th>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

@endsection
