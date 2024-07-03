<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="icon" href="{{ url('/icon-pinguem') }}">
    <link rel="stylesheet" href="{{ asset('css/style_css_index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  
    <header>
       <!--Top-Nav-->
    <div id="top-nav">
        <div class="topnav" style="height: 50px; width: 100%;">

          <!-- Img Logo -->
          <div class="img-logo" id="logo-id">
            <img src="{{ url('/logo-pinguem') }}"  alt="icon-logo">
          </div>

            <!-- <a class="active" href="">Inicio</a> -->
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

    <!--Título-->
    <div>
        <h1 style="text-align: center; font-size: 400%; font-style: oblique; "> Pinguim</h1>
    </div>

    <!--  -->
    </header>
    <!-- Carrossel quartos -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <!-- <div class="carousel-item active">
            <img src="{{ url('/carrousel-image-1') }}" class="d-block w-100" alt="..."> 
          </div> -->
          <div class="carousel-item active">
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

      <br>

      <!-- album quartos -->

      <div id="div_outros" class="div-album">
        <h2>Quartos:</h2>

      
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm" id="card_album" style="background-color: 'rgba(var(--color3)) ;'">
                <img class="card-img-top" src="/images/img_quarto_1.jpeg" alt="Card image Quarto">
                <div class="card-body">
                  <p class="card-text">Quarto 1 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_2.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Quarto 2 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_3.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 3 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_4.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 4 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_5.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 5 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_6.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 6 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_7.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 7 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_8.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 8 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/img_quarto_9.jpeg" alt="Card image cap">
                <div class="card-body">
                <p class="card-text">Quarto 9 Teste</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                    <small class="text-muted">Valor: R$x,00</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="class_more_itens">
        <a href="">Ver Mais.</a>
      </div>
   
      
        
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
