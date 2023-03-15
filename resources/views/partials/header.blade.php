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