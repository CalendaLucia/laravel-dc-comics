@php
    $navbar = config('navbar'); 
@endphp
<header>
    <div id="container">
      <div class="logo">
         <div class="img">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
         </div>
      </div>
      <div class="nav-bar">
        <ul class="menu">
            @foreach($navbar as $key => $item)
            <li class="item">
              <a href="#">{{$item}}</a>
            </li>
            @endforeach
        </ul>
        <div class="search">
            <form class="d-flex" action="{{ route('comics.create') }}">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            
        </div>
      </div>
    </div>
    <div id="jumbotron">
        <div id="jumbotron">
            <div class="img-jumbo">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
            </div>
        </div>
    </div>
</header>