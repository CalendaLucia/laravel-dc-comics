@extends('layouts.app')

@section('content')
<div class="container-fluid bg-black">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 w-50 m-auto align-items-center">
    @foreach ($comics as $comic)
    <div class="col mt-5">
      <div class="card h-100">
        <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
      </div>
      <div class="card-text p-2">
        <h6 class="card-title text-info">{{ $comic->title }}</h6>
      </div>
      <div class="d-grid gap-2">
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary m-3">Dettagli</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning m-2">Aggiorna</a>
      </div>
      <form onsubmit="return confirm('Sei sicuro di voler eliminare questo Pkmn?');" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-4">Elimina</button>
      </form>
    </div>
    @endforeach
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
    <button class="btn btn-primary" type="button">Carica altri</button>
    <a href="{{ route('comics.create') }}" class="btn btn-warning ms-md-2">Aggiungi</a>
  </div>
</div>
@endsection
