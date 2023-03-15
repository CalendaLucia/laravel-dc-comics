@extends('layouts.app')

@section('content')
      <div id="content" class="container-fluid">
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="comics col-2">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="series">
                    <h4>{{ $comic->title }}</h4>
                </div>
                <a class="link" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
            </div>
            @endforeach
        </div>
        <div class="more">
            <button >
              LOAD MORE
            </button>
        </div>
@endsection