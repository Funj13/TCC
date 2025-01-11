@extends('layouts.main')

@section('title', 'Cadarpio')


@section('content')
@section('topnav')
@endsection

<head>
  
  <link rel="stylesheet" href="css/style_cadarpio.css" id="main-styles-link">
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
</head>

<!-- Carrossel Cadarpio -->
<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true"
  data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
  
  <div class="swiper-wrapper text-sm-left">
    <div class="swiper-slide context-dark" data-slide-bg="images/img_coffe.jpeg">
      <div class="overlay"></div>
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
              <h1 class="swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp"
                  data-caption-delay="0">Café 5 estrelas</span></h1>
              <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Por trás de uma
                pessoa feliz, tem sempre uma xícara de café.</p><a
                class="button button-lg button-primary button-winona button-shadow-2" href="#"
                data-caption-animate="fadeInUp" data-caption-delay="300">Abrir Menu</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide context-dark" data-slide-bg="images/img_menu_sobremesa.jpeg">
    <div class="overlay"></div>
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
              <h1 class="swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown"
                  data-caption-delay="0">Sobremesas Deliciosas</span></h1>
              <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">Lembre-se: em
                qualquer doce, o ingrediente mais importante é o amor.</p>
              <div class="button-wrap oh">
                <a class="button button-lg button-primary button-winona button-shadow-2" href="#"
                  data-caption-animate="slideInUp" data-caption-delay="0">Abrir Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination" data-bullet-custom="true"></div>
  <!-- Swiper Navigation-->
  <div class="swiper-button-prev">
    <div class="preview">
      <div class="preview__img"></div>
    </div>
    <div class="swiper-button-arrow"></div>
  </div>
  <div class="swiper-button-next">
    <div class="swiper-button-arrow"></div>
    <div class="preview">
      <div class="preview__img"></div>
    </div>
  </div>
</section>
<!-- What We Offer-->
<section class="section section-md">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Menu</span></h3>
    <div class="row row-md row-30">

      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInUp">
            <div class="services-terri-figure"><img src="images/image-cafe.jpg" alt="" width="370" height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-coffee-cup"></span>
              <h5 class="services-terri-title"><a href="#">Café da Manha</a></h5>
            </div>
          </article>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInDown">
            <div class="services-terri-figure"><img src="images/image-almoco.jpg" alt="" width="370" height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-steak"></span>
              <h5 class="services-terri-title"><a href="#">Almoço</a></h5>
            </div>
          </article>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInUp">
            <div class="services-terri-figure"><img src="images/image-jantar.png" alt="" width="370" height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-hamburger"></span>
              <h5 class="services-terri-title"><a href="#">Jantar</a></h5>
            </div>
          </article>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInDown">
            <div class="services-terri-figure"><img src="images/image-sobremesa.jpg" alt="" width="370" height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-ice-cream"></span>
              <h5 class="services-terri-title"><a href="#">Sobremesas</a></h5>
            </div>
          </article>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInUp">
            <div class="services-terri-figure"><img src="images/image-complementos.webp" alt="" width="370"
                height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
              <h5 class="services-terri-title"><a href="#">Complementos</a></h5>
            </div>
          </article>
        </div>
      </div>


      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Services Terri-->
          <article class="services-terri wow slideInDown">
            <div class="services-terri-figure"><img src="images/image-especial.png" alt="" width="370" height="278" />
            </div>
            <div class="services-terri-caption"><span class="services-terri-icon linearicons-pizza"></span>
              <h5 class="services-terri-title"><a href="#">Especial do Hotel</a></h5>
            </div>
          </article>
        </div>
      </div>




    </div>
  </div>
</section>



<!-- Our Shop-->
<section class="section section-lg  ">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Comidas Selecionadas</span></h3>
    <div class="row row-lg row-30">
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <!-- Product-->
        <article class="card product wow fadeInLeft" data-wow-delay=".15s">
          <div class="product-figure"><img src="images/img_burger.jpeg" alt="" width="161" height="162" />
          </div>
          <!-- rating -->
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star text-gray-13"></span>
          </div>
          <a class="product-title">teste 1</a>
          <div class="product-price-wrap">
            <div class="product-price"><a>R$24.00</a></div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Pedir</a>
            </div>
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Abrir</a></div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <!-- Product-->
        <article class="card product wow fadeInLeft" data-wow-delay=".1s">
          <div class="product-figure"><img src="images/img_paodequeijo.jpeg" alt="" width="161" height="162" />
          </div>
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
          </div>
          <a class="product-title">teste 2</a>
          <div class="product-price-wrap">
            <div class="product-price"><a>R$24.00</a></div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Pedir</a>
            </div>
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Abrir
              </a></div>
          </div><span class="product-badge product-badge-new">Novo</span>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <!-- Product-->
        <article class="card product wow fadeInLeft" data-wow-delay=".05s">
          <div class="product-figure"><img src="images/img_food.jpeg" alt="" width="161" height="162" />
          </div>
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star text-gray-13"></span>
          </div>
          <a class="product-title">Teste 3</a>
          <div class="product-price-wrap">
            <div class="product-price"><a>R$24.00</a></div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Pedir</a>
            </div>
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Abrir
              </a></div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <!-- Product-->
        <article class="card product wow fadeInLeft">
          <div class="product-figure"><img src="images/img_coffe_2.jpeg" alt="" width="161" height="162" />
          </div>
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
              class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
          </div>
          <a class="product-title">Teste 4</a>
          <div class="product-price-wrap">
            <div class="product-price product-price-old"><a>R$40.00</a></div>
            <div class="product-price"><a>R$24.00</a></div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Pedir</a>
            </div>
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Abrir
              </a></div>
          </div><span class="product-badge product-badge-sale">Promoção</span>
        </article>
      </div>
    </div>
  </div>
</section>


<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>










@endsection