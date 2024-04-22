<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/style_css_index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  
    <header>
      <!--Top-Nav-->
    <div id="top-nav">
        <div class="topnav" style="height: 50px; width: 100%;">
          <div class="img-logo" id="logo-id">
            <img src="{{ url('/logo-pinguem') }}"  alt="icon-logo">
          </div>
          
            <div class="topnav-right">
              @if (Route::has('login'))
                <a href="{{ route('login') }}">Login</a>
              @endif
              @if (Route::has('register'))
                <a href="{{ route('register') }}">Cadastra-se</a>
              @endif
            </div>
         
        </div>
    </div>
      <!-- mudar abaixo -->
        <!-- <img src="logo-pinguim.png"> -->
    </header>
    
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('/carrousel-image-1') }}" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="{{ url('/carrousel-image-2') }}" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="{{ url('/carrousel-image-3') }}" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="{{ url('/carrousel-image-4') }}" class="d-block w-100" alt="..."> 
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
