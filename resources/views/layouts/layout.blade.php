<!DOCTYPE html>
<html lang="en">

  @include('partials/header')

  <body class="lg:max-w-6xl mx-auto h-screen">
    <div class="flex flex-col h-full">

      @include('partials/nav')

      <main class="flex-1">
        @yield('content')
      </main>

      @include('partials/footer')

    </div>
    @include('partials/scripts')
  </body>
</html>
