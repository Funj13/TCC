<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="icon" href="{{ asset('images/pinguem_logo.png') }}">
  <!-- Theme Mode PHP-->
  <!-- <link rel="stylesheet" href="{{ asset('php/ThemeMode.php') }}"> -->

  <!-- css Local -->
  <link rel="stylesheet" href="{{ asset('css/style_css_index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="">

  <!-- Boot strap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  @yield('topnav')
  <header>
    <!--Top-Nav-->
    <div id="top-nav">
      <div class="topnav" style="height: 50px; width: 100%;">

        <!-- Img Logo -->
        <div class="img-logo" id="logo-id">
          <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions"><img src="images/pinguem_logo.png" alt="icon-logo" class="click"></a>

        </div>

        <div class="topnav-right">

          <!-- Opcões Autenticado -->
          @auth

        <!-- Authentication -->
        <form method="POST" action="http://127.0.0.1:8000/logout">
        @csrf
        <a class="btn btn-outline-light" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                this.closest('form').submit();">Log Out</a>


        <a class="btn btn-outline-light" href="/dashboard">Dashboard</a>

        <!-- Nome usuario -->
        <a class="btn btn-outline-light" href="/profile">
          <div>{{ Auth::user()->name }}</div>
        </a>


        </form>
      @endauth
          <!-- Login e registro -->
          @guest
          @if (Route::has('login'))
        <a class="btn" href="{{ route('login') }}"> Login</a>
      @endif

          @if (Route::has('register'))
        <a class="btn" href="{{ route('register') }}">Cadastra-se</a>
      @endif


        </div>
        </div>
      </div>

      <!--Título-->
      <div>
        <h1 style="text-align: center; font-size: 400%; font-style: oblique; "> Pinguim</h1>
      </div>
    @endguest
    <!--  -->
  </header>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">User: <div>{{ Auth::user()->name }}</div></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p><a class="btn btn-dark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>
      <p><a class="btn btn-dark" href='/cadastroIndex'>Gerenciar Quartos</a></p>
    </div>
  </div>
  <div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    @yield('content')
    <footer>

      <div class="footer">

        <br>
        <p> Pinguin Hotel &copy; 2024</p>
      </div>

    </footer>
</body>

</html>