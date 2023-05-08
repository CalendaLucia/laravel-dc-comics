@extends('layouts.app')

@section('content')
    <div class="container mybg">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Nuovo Fumetto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col  col-lg-10">
                <form action="{{ route('comics.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="mb-3 mycol">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" required maxlength="255" placeholder="Inserisci il titolo...">
                        @error('title')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                       {{-- IMMAGINE --}}
                    <div class="mb-3 mycol">
                        <label for="thumb" class="form-label">Inserisci Copertina *</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"  maxlength="255" value="{{ old('thumb')}}" placeholder="Inserisci l'URL dell'immagine" required>
                        @error('thumb')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                         {{-- GENERE --}}
                    <div class="mb-3 mycol">
                        <label for="type" class="form-label">Genere</label>
                        <select class="form-select" name="type" id="type" required>
                            <option selected>Seleziona un genere</option>
                            <option value="comic book">Comic book</option>
                            <option value="graphic novel">Graphic novel</option>
                            <option value="horror">Horror</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="manga">Manga</option>
                        </select>
                    </div>

                       {{-- date --}}
                    <div class="mb-3 mycol">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date" required>
                    </div>

                    {{-- DESCRIZIONE --}}
                    <div class="mb-3 mycol">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" placeholder="Inserisci una descrizione...">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PREZZO --}}
                    <div class="mb-3 mycol">
                        <label for="price" class="form-label">Prezzo</label>
                        <textarea class="form-control" name="price" id="price" rows="3" placeholder="Inserisci prezzo"></textarea>
                    </div>   

                    <div class="footer-form">
                            {{-- SERIES --}}
                        <select name="series">
                            <option value="valore_predefinito" selected>Indica la serie</option>
                            <option value="opzione_2">Opzione 2</option>
                            <option value="opzione_3">Opzione 3</option>
                        </select>


                        <div>
                             <button class="btn" type="submit">
                                 Aggiungi
                             </button>
                             <button type="submit" class="mybtn">
                                <a href="{{ route('comics.index') }}" class="btn">Torna alla home</a>
                            </button>
                        </div>
                    </div>
                
                </form>
                
            </div>
        </div>
    </div>
@endsection