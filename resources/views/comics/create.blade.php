@extends('layouts.app')
@section('content')
<div class="p-4">
    <div class="container">
        <div class="row">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Titolo</label>
                            <input type="text" name="title" id=""
                                class="form-control @error('title')is-invalid @enderror" value="{{ old('titolo') }}"
                                placeholder="Titolo">
                        </div>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control" value="{{ old('thumb') }}"
                                placeholder="Immagine">
                        </div>
                        {{-- <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Serie</label>
                            <input type="text" name="series" id="" class="form-control" value="{{ old('') }}"
                                placeholder="Serie">
                        </div> --}}
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control" value="{{ old('price') }}"
                                placeholder="Prezzo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Data di uscita</label>
                            <input type="text" name="sale_date" id="" class="form-control"
                                value="{{ old('sale_date') }}" placeholder="Data di uscita">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Tipologia</label>
                            <input type="text" name="type" id="" class="form-control" value="{{ old('type') }}"
                                placeholder="Tipologia">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Descrizione</label>
                            <textarea name="description" id="" class="form-control" value="{{ old('description') }}"
                                placeholder="Descrizione"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Artisti</label>
                            <textarea name="artists" id="" class="form-control" value="{{ old('artists') }}"
                                placeholder="Artisti"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="" class="control-label">Scrittori</label>
                            <textarea name="writers" id="" class="form-control" value="{{ old('writers') }}"
                                placeholder="Scrittori"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection