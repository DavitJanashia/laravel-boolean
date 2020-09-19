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
      <header>
        <div class="container">
          <a class="logo-link" href="#">
            <img id="header-logo" src="{{ asset('img/marchio-sito-test.png')}}" alt="Image not found">
          </a>
        </div>
      </header>

      <div id="navbar">
        <div class="container">
          <ul>
            <li>
              <a href="#">
                Home
              </a>
            </li>

            <li>
              <a href="#">
                Prodotti
              </a>
            </li>

            <li>
              <a href="#">
                News
              </a>
            </li>
          </ul>
        </div>

      </div>

      <main>
        <div class="container">
          @yield('section1')
          @yield('section2')
          @yield('section3')
        </div>
      </main>

      <footer>
        <div class="container">
          <div class="foot-column">
            <a class="logo-link" href="#">
              <img id="footer-logo" src="{{ asset('img/marchio-sito-test.png')}}" alt="Image not found">
            </a>
          </div>

          <div class="foot-column">
            <h3>PASTIFICIO</h3>
            <ul>
              <li><a href="#">Il Pasti cio</a></li>
              <li><a href="#">Grano</a></li>
              <li><a href="#">decorticato a</a></li>
              <li><a href="#">pietra</a></li>
              <li><a href="#">Il Molise c’è</a></li>
              <li><a href="#">Filiera Integrata</a></li>
              <li><a href="#">100 anni di pasta</a></li>
              <li><a href="#">Sartoria della</a></li>
              <li><a href="#">pasta</a></li>
              <li><a href="#">Spaghetto</a></li>
              <li><a href="#">Quadrato</a></li>
              <li><a href="#">Le Persone</a></li>
            </ul>
          </div>

          <div class="foot-column">
            <h3>PRODOTTI</h3>
            <ul>
              <li><a href="#">Le Classiche</a></li>
              <li><a href="#">Le Integrali</a></li>
              <li><a href="#">Le Speciali</a></li>
              <li><a href="#">Le Biologiche</a></li>
              <li><a href="#">Le Gluten-Free</a></li>
              <li><a href="#">Le Semole</a></li>
            </ul>
          </div>

          <div class="foot-column">
            <h3>COLLEZIONE DA CHEF</h3>
            <ul>
              <li><a href="#">Collezione da</a></li>
              <li><a href="#">Chef</a></li>
              <li><a href="#">Grandi Cucine</a></li>
              <li><a href="#">Biologiche</a></li>
              <li><a href="#">Quadrate</a></li>
            </ul>
          </div>



        </div>
      </footer>

    </body>
</html>
