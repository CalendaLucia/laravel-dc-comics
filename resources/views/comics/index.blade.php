@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Comics</h2>
    <div class="card-box">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h4>{{ $comic->title }}</h4>
                <p>{{ $comic->price }}</p>
                <p>{{ $comic->type }}</p>
                <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
            </div>
        @endforeach

    </div>
@endsection