@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Cerca</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo...">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <select class="form-select" name="type" id="type" required>
                            <option selected>Seleziona un tipo</option>
                            <option value="horror">Horror</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="manga">Manga</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cooking_time" class="form-label">Autore</label>
                        <input type="number" class="form-control" name="cooking_time" id="cooking_time" required min="1" placeholder="Inserisci l' Autore...">
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label">Data Pubblicazione</label>
                        <input type="number" class="form-control" name="weight" id="weight" required min="1" placeholder="Inserisci la data di pubblicazione...">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione..."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">
                            Invia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection