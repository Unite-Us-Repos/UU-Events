<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>
<style>
body, html, #app {
  height: 100%;
}
#main {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

  <main id="main" class="main flex justify-center items-center h-full">
    @yield('content')
  </main>

