
@extends('layouts.main')

@section('title', 'Cadarpio')


@section('content')
@section('topnav')
@endsection
<style>

</style>

<div class="container-menu">
  <div class="nav">
    <button class="active">Segunda</button>
    <button>Terça</button>
    <button>Quarta</button>
    <button>Quinta</button>
    <button>Sexta</button>
    <button>Sábado</button>
    <button>Domingo</button>
  </div>
</div>
  <!-- <div class="img-container">
    <img src="/images/img_ovo.jpeg" alt="Prato Principal">
  </div> -->
  
      <!-- Carrossel Cadarpio -->
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/img_ovo.jpeg" class="d-block w-100" alt="..."> 
          </div> 
          <div class="carousel-item active">
            <img src="/images/img_coffe.jpeg" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="/images/" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="/images/" class="d-block w-100" alt="..."> 
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

  <!-- <div class="food-items">
    <div class="food-item">
      <img src="/images/img_burger.jpeg" alt="Prato 1">
      <h3>Prato 1</h3>
    </div>
    <div class="food-item">
      <img src="/images/img_food.jpeg" alt="Prato 2">
      <h3>Prato 2</h3>
    </div>
    <div class="food-item">
      <img src="/images/img_paodequeijo.jpeg" alt="Prato 3">
      <h3>Prato 3</h3>
    </div>
    <div class="food-item">
      <img src="/images/img_coffe_2.jpeg" alt="Prato 4">
      <h3>Prato 4</h3>
    </div>
  </div> -->

  <!--Content-->
  <div class="person">
      
        <!--Pratos Icon-->
        <div class="persons-icon">
            <div style="padding: 10;">
                <img src="/images/img_burger.jpeg" alt="prato-1" class="prato-1">
                <h3 style="text-align:center;">Prato 1</h3>
            </div>
            <div style="padding: 10;">
                <img src="/images/img_paodequeijo.jpeg" alt="prato-2" class="prato-2">
                <h3 style="text-align:center;">Prato 2</h3>
            </div>
            <div style="padding: 10;">
                <img src="/images/img_coffe_2.jpeg" alt="prato-3" class="prato-3">
                <h3 style="text-align:center;">Prato 3</h3>
            </div>
            <div style="padding: 10;">
                <img src="/images/img_food.jpeg" alt="prato-4" class="prato-4">
                <h3 style="text-align:center;">Prato 4</h3>
            </div>
        </div>

    </div>


<script>
  // Adiciona evento click para os botões da navbar
  const navButtons = document.querySelectorAll('.nav button');
  const mainImage = document.querySelector('.img-container img');

  navButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove classe 'active' de todos os botões
      navButtons.forEach(b => b.classList.remove('active'));
      // Adiciona classe 'active' ao botão clicado
      button.classList.add('active');

      // Atualiza a imagem principal de acordo com o botão clicado
      const day = button.textContent.toLowerCase();
      mainImage.src = img/prato${day}.jpg;
    });
  });
</script>
@endsection