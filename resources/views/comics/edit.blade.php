@extends('layouts.app')

@section('page-title', 'Modifica Comics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h2>
                Modifica Fumetto
            </h2>

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf

                @method('PUT')

                {{-- TITOLO --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" placeholder="Nome fumetto" required>
                </div>

                {{-- COPERTINA --}}
                 <div class="mb-3">
                    <label for="thumb" class="form-label">Inserisci Copertina</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}" placeholder="Inserisci l'URL dell'immagine" required>
                </div>

                 {{-- GENERE --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Genere</label>
                    <select class="form-select" name="type" id="type" value="{{ $comic->type }}" required>
                        <option selected>Seleziona un genere</option>
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                        <option value="horror">Horror</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="manga">Manga</option>
                    </select>
                </div>

                    {{-- SERIE --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <select class="form-select" name="series" id="series" value="{{ $comic->series }}" required>
                      <option value="valore_predefinito" selected>Indica la serie</option>
                      <option value="opzione_2" value="{{ $comic->series }}">Opzione 2</option>
                      <option value="opzione_3" value="{{ $comic->series }}">Opzione 3</option>
                   </select>
               </div>

                {{-- DESCRIZIONE --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description"  value="{{ $comic->description }}" rows="3" placeholder="Inserisci una descrizione..." required></textarea>
                </div>

             
                 {{-- PREZZO --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <textarea class="form-control" name="price" id="price"  value="{{ $comic->price }}" rows="3" placeholder="Inserisci prezzo" required></textarea>
                </div>  


               <div class="footer-form">
                {{-- DATA PUBBLICAZIONE --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data Pubblicazione</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date"  value="{{ $comic->sale_date }}" required>
                    </div>

                    <div>
                        <button class="btn btn-warning" type="submit">
                            Aggiorna
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