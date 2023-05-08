@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna indietro
                </a>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12 col-lg-6 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                </div>
                <div class="descriptions">
                    <h4>Trama</h4>
                   <p>{{ $comic->description }}</p>
                </div>  
            </div>
        </div>
    </div>
@endsection