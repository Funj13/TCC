@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection
  <head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

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

<!-- carrossel -->
    <div class="page">
      <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide_video" data-slide-bg="{{ url('/carrousel-image-1') }}">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Quartos Diversificados</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Detalhes Minimalistas</span></h1>
                <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">.</span></p> -->
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Ver Mais</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="{{ url('/carrousel-image-2') }}">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Quartos Modernos</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Alta Tecnologia</span></h1>
                <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">With the help of our services and property management solutions, you can rent or sell any house or apartment.</span></p> -->
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Ver Mais</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="{{ url('/carrousel-image-3') }}">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Quartos custo beneficio</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Experiencia Ampliada</span></h1>
                <!-- <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Founded in 1989, our company is a team of renowned property management and real estate experts always ready to help you.</span></p> -->
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="#" data-wow-delay=".4s">Ver Mais</a></div>
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

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/img_quart_ang_2.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Suite Elegância Moderna</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p>Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Quarto_simples_2.jpg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Quarto da Paz</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Quarto_imperial_2.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Quarto Imperial Moderno</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="images/Quarto_Serenidade_1.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Quarto Serenidade</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>


            <!-- linha 2 -->

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="/images/suite_eden_1.jpg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Suíte do Éden</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="/images/suite_lua_cheia_1.jpg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Suíte Marfim</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="/images/suite_tropical_1.jpg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Suite Tropical</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a >2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>

            <div class="col-md-3 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="/images/suite_luxo_1.jpg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Suite Luxo</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">R$600/dia</a></li>
                  <li><a>5°Andar</a></li>
                  <li><a>2 Quartos</a></li>
                </ul>
                <p class="">Quartos Simples e Confortavel.</p>
              </article>
            </div>


            <!-- linha 3 -->
             
            
          </div>
        </div>
      </section>



<!-- Best offer-->
<section class="section novi-background section-1 bg-primary-darker text-center no-theme-change" style="background-image: url(images/img_back_anuncio.jpg); ">
<div class="overlay"></div>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-7 col-xl-6">
                <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Melhores ofertas</span></h3>
                <p class="heading-subtitle" style="color:white;">de Novembro</p>
                <p class="wow-outer offset-top-4"><span class="wow slideInDown" data-wow-delay=".05s">Com uma variedade de quartos disponíveis em nossa hotelaria, você sempre pode escolher aquele que se adapta às suas necessidades pessoais.</span></p>
                <div class="wow-outer button-outer"><a class="button button-primary-white button-winona wow slideInDown" href="#" data-wow-delay=".1s">Leia Mais</a></div>
            </div>
        </div>
    </div>
</section>



      <section class="section novi-background section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Comentários</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731" data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-6-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Cliente 1</cite>
                  <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>O hotel superou todas as minhas expectativas! A equipe é extremamente atenciosa e prestativa, sempre disposta a ajudar. A atmosfera é acolhedora e relaxante, perfeita para uma estadia tranquila.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-1-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                <cite class="quote-classic-cite">Cliente 1</cite>
                <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>A localização do hotel é simplesmente perfeita! Próximo de tudo o que eu precisava e com fácil acesso a transporte público. Amei explorar a cidade a partir daqui.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-2-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                <cite class="quote-classic-cite">Cliente 1</cite>
                <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>O hotel oferece uma variedade incrível de serviços e comodidades, como piscina, academia e restaurante. Tudo isso sem falar no atendimento impecável!</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-3-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                <cite class="quote-classic-cite">Cliente 1</cite>
                <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>A decoração do hotel é elegante e moderna, criando um ambiente sofisticado e confortável. Cada detalhe foi pensado para proporcionar uma experiência única aos hóspedes.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-4-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                <cite class="quote-classic-cite">Cliente 1</cite>
                <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>O quarto era espaçoso, confortável e muito bem equipado. A cama era incrível, dormi como um anjo! O banheiro era moderno e tinha tudo o que eu precisava.</p>
              </div>
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="images/testimonials-person-5-96x96.jpg" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                <cite class="quote-classic-cite">Cliente 1</cite>
                <p class="quote-classic-caption">Cliente Regular</p>
                </div>
              </div>
              <div class="quote-classic-text">
                <p>A vista do meu quarto era simplesmente deslumbrante! A cada manhã, acordar e ver aquela paisagem era mágico.</p>
              </div>
            </blockquote>
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