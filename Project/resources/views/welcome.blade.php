@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection


<!-- Carrossel quartos -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/carrousel-image-1') }}" class="d-block w-100" alt="...">
    </div>
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


<!-- album quartos -->

<div id="div_outros" class="div-album">
  <h2>Quartos:</h2>


  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm" id="card_album" style="background-color: 'rgba(var(--color3)) ;'">
          <img class="card-img-top" src="/images/img_quart_ang_2.jpeg" alt="Card image Quarto">
          <div class="card-body">
            <p class="card-text">Suite Elegância Moderna</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button> -->
                <a href="/Quarto-Suite-Elegancia-Moderna" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/Quarto_simples_2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"></p>
            <p class="card-text">Quarto da Paz</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Quarto-da-Paz" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/Quarto_imperial_2.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Quarto Imperial Moderno</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Quarto-Imperial" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/Quarto_Serenidade_1.jpeg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Quarto Serenidade</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Quarto-Serenidade" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/suite_eden_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Suíte do Éden</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Suite-Eden" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/suite_marfin_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Suíte Marfim</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Suite-Marfim" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/suite_lua_cheia_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Suíte da Lua Cheia</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Suite-Lua-Cheia" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/suite_tropical_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Suite Tropical</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Suite-Tropical" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="/images/suite_luxo_1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Suite Luxo</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/Suite-Luxo" style="text-decoration: none;"
                  class="btn btn-sm btn-outline-secondary">Detalhes</a>
              </div>
              <small class="text-muted">Valor: R$x,00</small>
            </div>
          </div>
        </div>
      </div> <a href="" style="color='black'; text-decoration='none'; ">Ver Mais.</a>

    </div>

  </div>
  <!-- Cadarpio menu -->
  <div class="menu_food">

    <div>
      <h2>Cardápio:</h2>
    </div>

    <div class="div-cadarpio">
      <div class="container-cadarpio">
        <div class="palette">
          <div class="color"><span>Prato Principal</span></div>
          <div class="color"><span>Café da Manha</span></div>
          <div class="color"><span>Sobremesa</span></div>
          <!-- <div class="color"><span>F4A261</span></div>
          <div class="color"><span>E76F51</span></div> -->
        </div>
        <div class=" stats card">
<br><br>
          <span></span>

          <a href="/cadarpio">Ver Mais</a>

        </div>
      </div>
    </div>


  </div>
</div>

</div>



@endsection