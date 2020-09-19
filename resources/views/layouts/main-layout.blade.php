<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    </head>
    <body>
      {{-- <img style="width: 500px;" src="{{ asset('img/q.png')}}" alt=""> --}}

      <h1>hello world</h1>
      @yield('section1')
    </body>
</html>
