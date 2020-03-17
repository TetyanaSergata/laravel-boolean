@include('layouts._header')

{{-- Il nostro Body --}}
<header>
  @yield('header')
</header>

<main>
  @yield('main')
</main>

<footer>
  @yield('footer')
</footer>

@include('layouts._footer')
