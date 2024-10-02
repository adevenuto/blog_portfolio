<!DOCTYPE html>
<html lang="en">

  @include('partials/portfolio/header')

  <body class="h-screen mx-auto lg:max-w-6xl">
    <div class="flex flex-col h-full">

      @include('partials/portfolio/nav')

      <main class="flex-1">
        @yield('content')
      </main>

      @include('partials/portfolio/footer')

    </div>
    @include('partials/portfolio/scripts')
  </body>
</html>