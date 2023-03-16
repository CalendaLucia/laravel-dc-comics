@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Nuovo Fumetto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo...">
                    </div>
                    {{-- DESCRIZIONE --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione..."></textarea>
                    </div>
                           
                    {{-- IMMAGINE --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Inserisci Copertina</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci l'URL dell'immagine">
                    </div>

                    {{-- PREZZO --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <textarea class="form-control" name="price" id="price" rows="3" placeholder="Inserisci prezzo"></textarea>
                    </div>   

                    {{-- SERIES --}}
                    <select name="series">
                        <option value="valore_predefinito" selected>Indica la serie</option>
                        <option value="opzione_2">Opzione 2</option>
                        <option value="opzione_3">Opzione 3</option>
                      </select>

                    {{-- date --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date" required>
                    </div>

                       {{-- GENERE --}}
                    <div class="mb-3">
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
                    <div>
                        <button type="submit" class="btn btn-success">
                            <a href="{{ route('comics.create') }}" class="btn btn-warning ms-md-2">Aggiungi</a>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection