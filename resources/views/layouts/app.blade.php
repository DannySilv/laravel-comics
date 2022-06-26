<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <div id="app">
    @include('partials.header')

    <main>
      @if ($utility['selected'] == false)

        @include('partials.content')
          
      @else
          
      @include('partials.this-comic')

      @endif
    </main>

    @include('partials.footer')

  </div>

</body>
</html>