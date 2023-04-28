@if ($restaurant->exists)
<form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data" novalidate>
    @method('PUT')
    @else
    <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @endif

        @csrf

        <div class="row p-0 m-0">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del ristorante</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $restaurant->name) }}" required minlength="5" maxlength="40">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <small class=" text-muted">Inserisci il nome</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="address" class="form-label">Via del ristorante</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $restaurant->address) }}" required minlength="5" maxlength="40">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <small class=" text-muted">Inserisci l'indirizzo</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Numero di telefono</label>
                    <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number) }}" minlength="12" maxlength="13">
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <small class=" text-muted">Inserisci il numero</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="min_order" class="form-label">ordine minimo</label>
                    <input type="number" class="form-control @error('min_order') is-invalid @enderror" id="min_order" name="min_order" value="{{ old('min_order', $restaurant->min_order) }}" min="0" max="100">
                    @error('min_order')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <small class=" text-muted">Inserisci il numero</small>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="shipment_price" class="form-label">spedizione</label>
                    <input type="number" class="form-control @error('shipment_price') is-invalid @enderror" id="shipment_price" name="shipment_price" value="{{ old('shipment_price', $restaurant->shipment_price) }}" min="5" max="50">
                    @error('shipment_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <small class=" text-muted">Inserisci il numero</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <label for="logo" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <div class="col-2 col-md-4">
                    <img class="img-fluid ms-3" id="img-preview" src="{{$restaurant->logo ? asset('storage/' . $restaurant->logo) : 'https://marcolanci.it/utils/placeholder.jpg'}}" alt="">
                </div>
            </div>
            <!-- CHECKBOX TYPOLOGIES -->
            <div class="row p-0 m-0">
                <div class="col-5 col-md-6">
                    <label for="description" class="form-label">Tipologia Ristorante</label>
                    <div class="mb-3 d-md-flex justify-content-around flex-wrap">
                        @foreach($typologies as $type)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="type-{{ $type->id }}" value="{{ $type->id }}" name="typologies[]" @if (in_array($type->id, old('typologies', $restaurants_typologies ?? []))) checked @endif>
                            <label class="form-check-label">
                                {{$type->name}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description', $restaurant->description) }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end py-3">
                        <a href="{{ route('admin.restaurants.index') }}" class="btn btn-secondary me-2"></i>Indietro</a>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>

            </div>





    </form>


    @section('scripts')

    {{-- IMAGE  --}}
    <script>
        const placeholder = 'https://marcolanci.it/utils/placeholder.jpg';

        const imageInput = document.getElementById('logo');
        const imagePreview = document.getElementById('img-preview');

        imageInput.addEventListener('change', () => {
            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.readAsDataURL(imageInput.files[0]);

                reader.onload = e => {
                    imagePreview.src = e.target.result;
                }

            } else imagePreview.src = placeholder;
        });
    </script>
    @endsection