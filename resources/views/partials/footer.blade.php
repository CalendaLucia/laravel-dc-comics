@php
    $navbar = config('navbar_footer');
@endphp

<footer>
    <div id="credits">
        <section class="DC-logo">
            <img class="DC-logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}">
        </section>
        <section class="column">
            @foreach($navbar as $lists)
            <ul class="{{ $loop->first || $loop->last ? 'menu-second' : 'menu' }}">
                @foreach($lists as $item)
                    <li>
                        <a href="#" class="{{ $loop->first ? 'title' : 'item-credits' }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
            @endforeach
        </section>
    </div>
    <div id="info">
        <div class="sign-up">
            <button>SIGN-UP NOW!</button>
        </div>
        <div class="follow-us">
            <div>
                <h6>FOLLOW US</h6>
            </div>
            <div class="icon">
                <ul class="menu-icons">
                    @foreach($navbar[4] as $icon)
                        <li class="icons">
                            <img src="{{ Vite::asset($icon) }}" class="img">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
