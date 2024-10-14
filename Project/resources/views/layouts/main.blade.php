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
  <!-- <link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}"> -->

  <!-- Google Fonts -->
  <link rel="stylesheet" href="">

  <!-- Boot strap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body id="body" data-bs-theme="white">

  @yield('topnav')
  <header>


    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
      <div class="bg-dark p-4">
        <nav class="navbar navbar-expand-lg bg-dark">
          <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
          <div class="container-fluid">
            @auth
          <form method="POST" action="http://127.0.0.1:8000/logout">
            @csrf
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
        this.closest('form').submit();">Log Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/profile">
              <div>{{ Auth::user()->name }}</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            </ul>
          </form>

      @endauth
            <!-- Login e registro -->
            @guest
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          @if (Route::has('login'))
        <a class="nav-link" href="{{ route('login') }}"> Login</a>
      @endif
          </li>
          @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Cadastra-se</a>
        </li>
      @endif
        </ul>

      @endguest
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li>
                <!-- layout black and white -->
                <input type="checkbox" class="theme-checkbox" id="toggle-theme" style="width: 60px;height: 30px;">
                <script src="js/themeMode.js"></script>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
      </div>
      </nav>

    </div>
    </div>




    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>



  @yield('content')



  @yield('footer')<div class="footer">
    <footer>



      <br>
      <p> Pinguin Hotel &copy; 2024</p>


    </footer>
  </div>
</body>

</html>