@extends('layouts.app')

@section('content')
<div class="container-fluid bg-black">
  <div class="row w-50 flex-wrap g-3 mx-auto p-4">
    @foreach ($comics as $comic)
    <div class="col-12 col-md-4 col-lg-2">
      <div class="card h-70">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h6 class="card-title">{{ $comic->title }}</h6>
        </div>
      </div>
      <div class="d-grid gap-2">
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Aggiorna</a>
      </div>
      <form onsubmit="return confirm('Sei sicuro di voler eliminare questo Pkmn?');" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Elimina</button>
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
