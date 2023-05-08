@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4">
  <div class="row">
    @foreach ($comic as $comics)
    <div class="col-8 col-md-4 col-lg-2">
      <div class="card">
        <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
      </div>
      <div class="card-body">
        <h6 class="card-subtitle mb-3 text-muted">{{ $comics->title }}</h6>
        <a href="{{ route('comics.show', $comics->id) }}" class="btn">Dettagli</a>
        <a href="{{ route('comics.edit', $comics->id) }}" class="btn">Aggiorna</a>
      </div>
      <form onsubmit="return confirm('Sei sicuro di voler eliminare questo Pkmn?');" action="{{ route('comics.destroy', $comics->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn deleted">Elimina</button>
      </form>
    </div>
    @endforeach
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
    <button class="btn btn-primary m-3" type="button">Carica altri</button>
    <a href="{{ route('comics.create') }}" class="btn btn-warning ms-md-2 m-3">Aggiungi</a>
  </div>
</div>
@endsection


    
