<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

      <head>
            <meta charset="utf-8">
            <meta name="viewport"
                  content="width=device-width, initial-scale=1">
            <title>Siaga Covid-19 | Arya Noble</title>
            <meta meta
                  property="og:title"
                  content="Siaga Covid-19 | Arya Noble" />
            <meta meta
                  property="og:image"
                  content="{{asset('images/logo_siaga_300px.png')}}" />
            <meta property="og:description"
                  content="#AryanersSiagaCOVID19" />
            <link rel="stylesheet"
                  href="{{asset('css/loader.css')}}">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"
                  rel="stylesheet">

            <link rel="icon"
                  href="{{asset('/images/logotitle2.ico')}}" />

            <script src="{{ asset('js/app.js') }}"
                    defer></script>
            <link href="{{ mix('css/app.css') }}"
                  rel="stylesheet">

            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
                  crossorigin="anonymous">
      </head>


      <body>
            <div id="app">
                  <div class="h-screen w-auto">
                        @yield('content')
                  </div>
            </div>
      </body>

</html>