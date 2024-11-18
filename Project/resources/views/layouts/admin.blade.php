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

@can ('admin')

<body  id="body" data-bs-theme="white">
  <!-- tela carregamento -->
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-logo"><img src="images/pinguem_logo_2.png" alt="" width="151" height="44" srcset="images/pinguem_logo_2.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>

  @yield('topnav')
  <header>

  <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="white">
    <div class="card " style="
    border-left-width: 0px;
    border-bottom-width: 0px;
    border-right-width: 0px;
    border-radius: 0px;">
      <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <div class="container-fluid" style=" padding-left: 0px;">

          <ul class=" navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
              aria-controls="offcanvasWithBothOptions">
                <img src="images/pinguem_logo_2.png" alt="icon-logo" class="w-20 h-20 click" style="width:70px;">
              </a>
            </li>
          </ul>

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
          @can ('admin')
        <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
      @endcan
        </ul>
        </form>

      @endauth
          <!-- Login e registro -->
          @guest

        <ul class="navbar-nav  mb-2 mb-lg-0">
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
  <nav class="navbar navbar-dark card" style="
    border-left-width: 0px;
    border-right-width: 0px;
    border-top-width: 0px;
    border-radius: 0px;">

    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation" >
        <span class="icon">
          <svg viewBox="0 0 175 80" width="40" height="40">
            <rect id="myRect" width="80" height="15" fill="#333" rx="10"></rect>
            <rect id="myRect2" y="30" width="80" height="15" fill="#333" rx="10"></rect>
            <rect id="myRect3" y="60" width="80" height="15" fill="#333" rx="10"></rect>
          </svg>
        </span>
        <span class="text"></span>
    </div>

  </nav>
  </header>


  
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">User: <div>{{ Auth::user()->name }}</div></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroQuarto'>Cadastrar Quarto</a></p>
      <p><a class="brutalist-card__button brutalist-card__button--mark" href='/cadastroIndex'>Gerenciar Quartos</a></p>
    </div>
  </div>
  <div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    @yield('content')

    @yield('footer')<div class="footer">
    <footer>



      <br>
      <p> Pinguin Hotel &copy; 2024</p>


    </footer>
  </div>
  @elsecan('user')

<h1>Usuario Sem Permissão</h1>


</body>

</html>
@endcan