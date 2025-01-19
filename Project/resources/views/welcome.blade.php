@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<head>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css" id="main-styles-link">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<!-- tela carregamento -->
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
      src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
      alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
</div>
<div class="preloader">
  <div class="preloader-logo"><img src="images/pinguem_logo_2.png" alt="" width="151" height="44"
      srcset="images/pinguem_logo_2.png 2x" />
  </div>
  <div class="preloader-body">
    <div id="loadingProgressG">
      <div class="loadingProgressG" id="loadingProgressG_1"></div>
    </div>
  </div>
</div>

<!-- carrossel -->
<div class="page">
  <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true"
    data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide_video" data-slide-bg="{{ url('/carrousel-image-1') }}">
        <div class="container">
          <div class="jumbotron-classic-content">
            <div class="wow-outer">
              <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">
                Quartos Diversificados</div>
            </div>
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown"
                data-wow-delay=".2s">Detalhes Minimalistas</span></h1>
            <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">.</span></p> -->
            <div class="wow-outer button-outer">
              <a class="button button-md button-primary button-winona wow slideInDown" href="/quartos"
                data-wow-delay=".4s">Ver Mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="{{ url('/carrousel-image-2') }}">
        <div class="container">
          <div class="jumbotron-classic-content">
            <div class="wow-outer">
              <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">
                Quartos Modernos</div>
            </div>
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown"
                data-wow-delay=".2s">Alta Tecnologia</span></h1>
            <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">With the help of our services and property management solutions, you can rent or sell any house or apartment.</span></p> -->
            <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown"
                href="/quartos" data-wow-delay=".4s">Ver Mais</a></div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="{{ url('/carrousel-image-3') }}">
        <div class="container">
          <div class="jumbotron-classic-content">
            <div class="wow-outer">
              <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">
                Quartos custo beneficio</div>
            </div>
            <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown"
                data-wow-delay=".2s">Experiencia Ampliada</span></h1>
            <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Founded in 1989, our company is a team of renowned property management and real estate experts always ready to help you.</span></p> -->
            <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown"
                href="/quartos" data-wow-delay=".4s">Ver Mais</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination-outer container">
      <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
    </div>
  </section>


  <!-- quartos -->
  <section class="section novi-background section-md text-center">
    <div class="container">
      <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Quartos Populares</span></h3>
      <div class="row row-lg-50 row-35 offset-top-2">

        @foreach ($rooms->take(4) as $room)

      <div class="col-md-6 wow-outer">
        <!-- Post Modern-->
        <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="/{{$room->id}}"><img
          src="images/quartos/{{$room->image1}}" alt="" width="571" height="353" /></a>
        <h4 class="post-modern-title"><a class="post-modern-title"
          href="/Quarto-Suite-Elegancia-Moderna">{{$room->nome}}</a></h4>
        <ul class="post-modern-meta">
          <li><a class="button-winona" href="#">R$ {{$room->preco}}</a></li>
          <li><a>{{$room->tipo}}</a></li>
          @if ($room->disponibilidade == 1)
        <li><a>Disponivel</a></li>
      @else
      <li><a>Não Disponivel</a></li>
    @endif

        </ul>
        <p>Quartos Simples e Confortavel.</p>
        </article>
      </div>
    @endforeach
      </div>
  </section>







  <!-- Services-->
  <section class="section novi-background section-lg text-center">
    <div class="container">
      <h3 class="text-uppercase">Categorias de Quartos</h3>
      <p><span class="text-width-1">Em nossa agência trabalhamos com diversos tipos de quartos . Você pode saber mais
          sobre nossos imóveis navegando em nosso site.</span></p>
      <div class="row row-35 row-xxl-70 offset-top-2">
        <div class="col-sm-6 col-lg-3">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image"
                src="images/img_suite_wood.jpg" alt="" width="270" height="300" /></a>
            <h4 class="thumbnail-light-title"><a href="#">Quartos para 1 pessoa</a></h4>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image"
                src="images/img_quart_ang_4.jpeg" alt="" width="270" height="300" /></a>
            <h4 class="thumbnail-light-title"><a href="#">Quarto Casal</a></h4>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image"
                src="images/Quarto_imperial_2.jpg" alt="" width="270" height="300" /></a>
            <h4 class="thumbnail-light-title"><a href="#">Quartos Familia</a></h4>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image"
                src="images/Quarto_Serenidade_4.jpg" alt="" width="270" height="300" /></a>
            <h4 class="thumbnail-light-title"><a href="#">Quartos para Amigos</a></h4>
          </article>
        </div>
        <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="/quartos">Veja
            mais
            Quartos</a></div>
      </div>
    </div>
  </section>

  <!-- container tcc -->
  <section class="section novi-background section-lg text-center">
    <div class="container">
      <h3 class="text-uppercase wow-outer"><span class="wow slideInUp">Grupo TCC</span></h3>

      <div class="row row-lg-50 row-35 row-xxl-70 justify-content-center justify-content-lg-start">
        <div class="col-md-10 col-lg-6 wow-outer " style="
    width: 900px;">
          <!-- Profile Creative-->
          <article class="profile-creative wow slideInLeft">
            <figure class="profile-creative-figure"><img class="profile-creative-image " src="images/tcc.jpg" alt=""
                width="270" height="273" />
            </figure>
            <div class="profile-creative-main">
              <h5 class="profile-creative-title"><a href="#">a</a></h5>
              <p class="profile-creative-position">a</p>
              <div class="profile-creative-contacts">
                <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a
                    href="tel:#">+55-64-90000-0000</a></div>
              </div>
              <p>Sobre a pessoa.</p>
            </div>
          </article>
        </div>

      </div>
    </div>
  </section>


  <!-- Melhores Ofertas Card-->
  <section class="section novi-background section-1 bg-primary-darker text-center no-theme-change"
    style="background-image: url(images/img_back_anuncio.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-7 col-xl-6">
          <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Melhores ofertas</span></h3>
          <p class="wow-outer" style="color:white;">de Novembro</p>
          <p class="wow-outer offset-top-4"><span class="wow slideInDown" data-wow-delay=".05s">Com uma variedade de
              quartos disponíveis em nossa hotelaria, você sempre pode escolher aquele que se adapta às suas
              necessidades pessoais.</span></p>
          <div class="wow-outer button-outer"><a class="button button-primary-white button-winona wow slideInDown"
              href="#" data-wow-delay=".1s">Leia Mais</a></div>
        </div>
      </div>
    </div>
  </section>


  <!-- criar sistema -->
  <section class="section novi-background section-lg text-center">
    <div class="container">
      <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Comentários</span></h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true"
        data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268"
        data-margin="30" data-stage-padding="0" data-mouse-drag="false">
        @foreach ($avaliacaos as $avaliacao)
      <blockquote class="quote-classic">
        <div class="quote-classic-meta">
        <div class="quote-classic-avatar"><img src="images/user-icon.png" alt="" width="96"
          height="96" />
        </div>
        <div class="quote-classic-info">
          <cite class="quote-classic-cite">{{$avaliacao->nome}}</cite>
          @if ($avaliacao->rate == 'star1')
          <div class="product-rating"><span class="mdi mdi-star"></span>
          </div>
          @elseif($avaliacao->rate == 'star2')
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
          </div>
          @elseif($avaliacao->rate == 'star3')
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
            class="mdi mdi-star"></span>
          </div>
          @elseif($avaliacao->rate == 'star4')
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
            class="mdi mdi-star"></span><span class="mdi mdi-star">
          </div>
          @else
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
            class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
          </div>
          @endif

          <!-- <p class="quote-classic-caption">Cliente Regular</p> -->
        </div>
        </div>
        <div class="quote-classic-text">
        <p>{{$avaliacao->msg}}</p>
        </div>
      </blockquote>
    @endforeach

        <!--
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96"
                height="96" />
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Cliente 1</cite>
              <p class="quote-classic-caption">Cliente Regular</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>A decoração do hotel é elegante e moderna, criando um ambiente sofisticado e confortável. Cada detalhe
              foi pensado para proporcionar uma experiência única aos hóspedes.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96"
                height="96" />
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Cliente 1</cite>
              <p class="quote-classic-caption">Cliente Regular</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>O quarto era espaçoso, confortável e muito bem equipado. A cama era incrível, dormi como um anjo! O
              banheiro era moderno e tinha tudo o que eu precisava.</p>
          </div>
        </blockquote>
        <blockquote class="quote-classic">
          <div class="quote-classic-meta">
            <div class="quote-classic-avatar"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96"
                height="96" />
            </div>
            <div class="quote-classic-info">
              <cite class="quote-classic-cite">Cliente 1</cite>
              <p class="quote-classic-caption">Cliente Regular</p>
            </div>
          </div>
          <div class="quote-classic-text">
            <p>A vista do meu quarto era simplesmente deslumbrante! A cada manhã, acordar e ver aquela paisagem era
              mágico.</p>
          </div>
        </blockquote> -->
      </div>
    </div>
  </section>

</div>





<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
@endsection