<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light" class="wide wow-animation">


<head>
  <meta charset=" UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<link rel="icon" href="{{ asset('images/pinguem_logo.png') }}">
<!-- Theme Mode PHP-->
<!-- <link rel="stylesheet" href="{{ asset('php/ThemeMode.php') }}"> -->

<!-- css Local -->
<!-- <link rel="stylesheet" href="{{ asset('css/style_css_index.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}">

<!-- Google Fonts -->
<link rel="stylesheet" href="">

<!-- Boot strap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>


<body id="body" data-bs-theme="white">

  @yield('topnav')

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
              <a href="/">
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
      <li class="nav-item">
          <a class="nav-link " href="/mapa">
           Localização
          </a>
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



  @yield('content')


 </div>
  @yield('footer')<div class="footer"><div class="footer">
  <footer class="section novi-background footer-advanced bg-gray-700">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Sobre nós</h5>
                <p class="footer-advanced-text">Bem-vindo ao Hotel Pinguem, um oásis de tranquilidade e conforto no coração da cidade. Nosso hotel boutique oferece uma experiência única e personalizada, com acomodações luxuosas, serviços impecáveis e uma atmosfera acolhedora.</p>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Postagens recentes do blog</h5>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Guia Hotelario: 7 dicas importantes para alugar um Hotel</a></p>
                  <ul class="post-inline-meta">
                    <li>by Cacique</li>
                    <li><a href="#">2 dias atrás</a></li>
                  </ul>
                </article>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Casas Unifamiliares como Opção de Habitação para Famílias Jovens</a></p>
                  <ul class="post-inline-meta"> 
                    <li>by Cacique</li>
                    <li><a href="#">2 dias atrás</a></li>
                  </ul>
                </article>
              </div>
              <div class="col-sm-5 col-md-7 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Galeria</h5>
                <div class="row row-x-10" data-lightgallery="group">
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-1.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-1-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-2.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-2-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-3.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-3-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-4.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-4-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-5.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-5-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-6.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-6-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"> </div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-7.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-7-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-original-8.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-8-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
              <div>
                <ul class="list-nav"> 
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="about-us.html">Sobre</a></li>
                  <li><a href="#">Proprietario</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="contacts.html">Contato</a></li>
                </ul>
              </div>
              <div>
                <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="images/pinguem_logo.png" alt="" width="115" height="34" srcset="images/pinguem_logo.png 2x"/></a>
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="#">Penguim</a></p>
            </div>
          </div>
        </div>
      </footer>
</body>

</html>