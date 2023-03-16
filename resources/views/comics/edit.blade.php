@extends('layouts.app')

@section('page-title', 'Modifica Comics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h1>
                Modifica Fumetto
            </h1>

            <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Titolo *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $comics->title }}" placeholder="Nome fumetto" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Genere *</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $comics->type }}" placeholder="Genere" required>
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Pubblicazione</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comics->sale_date }}" placeholder="Data Pubblicazione">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie *</label>
                    <input type="number" class="form-control" name="series" id="series" value="{{ $comics->series }}" placeholder="Serie"  required>
                </div>

                <div>
                    <button class="btn btn-warning" type="submit">
                        Aggiorna
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection