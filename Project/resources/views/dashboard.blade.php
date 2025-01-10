@can ('admin')

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.css">

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
  <br>

  <!-- App body starts -->
  <div class="app-body">

    <!-- Container starts -->
    <div class="container">


    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-3">
      <div class="col-xl-12">
      <div class="card mb-3">
        <div class="card-body">

        <!-- Row start -->
        <div class="row">
          <div class="col-sm-8 col-12">
          <h3 class="mb-3">Status Clientes</h3>
          <p class="w-50 ">
            Ultimos 31 dias:
            <span class="text-success fw-bold">{{$newUsersCount}}</span> clientes.
          </p>
          <!-- tickets.js -->
           <div id="graphic"> <div id="tickets" class="mt-5 "></div></div>
         
          </div>

          <div class="col-sm-4 col-12">
          <div class="text-end">

            <img src="images/pinguem_logo_2.png" id="logo2" class="w-20 h-20" alt="pinguem logo" />
          </div>
          <div class=" d-flex flex-wrap gap-3">
            <div class="d-flex align-items-center">
            <div class="icons-box md bg-info rounded-3 me-3">
              <i class="icon-add_task text-white fs-4"></i>
            </div>
            <div class="m-0">
              <h3 class="m-0 fw-semibold">{{$usuariosNoAno2025}}</h3>
              <p class="m-0 ">Clientes em 2025</p>
            </div>
            </div>
            <div class="d-flex align-items-center">
            <div class="icons-box md bg-danger rounded-3 me-3">
              <i class="icon-add_task text-white fs-4"></i>
            </div>
            <div class="m-0">
              <h3 class="m-0 fw-semibold">{{$usuariosNoAno2024}}</h3>
              <p class="m-0 ">Clientes em 2024</p>
            </div>
            </div>
          </div>
          </div>
        </div>
        <!-- Row end -->
        </div>
      </div>
      </div>

      <!-- Row end -->



      <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Autorizar Administradores</h5>
        <div id="callsByCountry" class="auto-align-graph">
        <table class="table">
          <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Permissão</th>
            <th>Alterar</th>
          </tr>
          </thead>
          <br>
          <tbody>
          @if($users->isEmpty())
        <p>Nenhum Usuario encontrado.</p>
      @else

      @foreach($users as $user)            <tr>
      <td> <a>{{ $user->id }}</a> </td>
      <td> <a>{{ $user->name }}</a> </td>
      <td><a> {{ $user->permission_name }} </a></td>
      <td>

      <!-- Botão para abrir o modal -->
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmModal"
      data-user-id="{{ $user->id }}" data-permission-name="{{ $user->permission_name }}">
      Alterar
      </button>

      <!-- Modal de Confirmação -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
      aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="confirmModalLabel">Confirmação</h5>
      <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close">
      </button>
      </div>
      <div class="modal-body">
      <a>Você tem certeza que deseja alterar as permissões deste usuário?</a>
      <p id="userIdDisplay"></p>
      <p id="permissionNameDisplay"></p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      <form action="" method="POST" id="confirmForm">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-danger">Confirmar</button>
      </form>
      </div>
      </div>
      </div>
      </div>

      <script>
      $('#confirmModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var userId = button.data('user-id');
      var permissionName = button.data('permission-name');
      var actionUrl = "{{ route('users.permissions.update', ['user' => ':user', 'permission' => ':permission']) }}";
      actionUrl = actionUrl.replace(':user', userId).replace(':permission', permissionName);
      $('#confirmForm').attr('action', actionUrl);
      $('#userIdDisplay').text('ID do Usuário: ' + userId);
      $('#permissionNameDisplay').text('Permissão: ' + permissionName);
      });
      </script>
      <!-- Scripts do Bootstrap -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      </td>
      </tr>
    @endforeach

    @endif
          </tbody>
        </table>
        </div>
      </div>
      </div>



      <!-- Row start -->
      <div class="row gx-3">
      <div class="col-lg-12 col-12">
        <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Pedidos</h5>
        </div>
        <div class="card-body">
          <div class="table-outer">
          <div class="table-responsive">
            <table class="table truncate align-middle">
            <thead>
              <tr>
              <th>#</th>
              <th>Tipo</th>
              <th>Status</th>
              <th>Tags</th>
              <th>Prioridades</th>
              <th>Local</th>
              <th>Data Criada</th>
              <th>Atualizado há</th>
              </tr>
            </thead>
            <tbody>
              @if($camareiras->isEmpty())
          <p>Nenhuma camareira encontrada.</p>
        @else
        @foreach($camareiras as $camareira)
      <tr>
      <td><a>{{ $camareira->id }}</a></td>
      <td><a>{{ $camareira->tipo }}</a></td>
      @if($camareira->status == 'Ativa')
      <td><a><span class="badge bg-success">{{ $camareira->status }}</span></a></td>
    @else
      <td><a><span class="badge bg-danger">{{ $camareira->status }}</span></a></td>
    @endif
      <td><a><span class="badge border border-danger text-danger">{{ $camareira->tags }}</span></a>
      </td>
      <td><a><span
        class="badge border border-danger text-danger">{{ $camareira->prioridade }}</span></a>
      </td>
      <td><a>{{ $camareira->area }}</a></td>
      <td><a>{{ $camareira->created_at }}</a></td>
      <td><a>{{ $camareira->updated_at }}</a></td>
      </tr>
    @endforeach
      @endif
            </tbody>
            </table>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      <!-- Row end -->

      <!-- Row start -->
      <div class="row gx-3">
      <div class="col-lg-12 col-12">
        <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Clientes</h5>
        </div>
        <div class="card-body">
        <div id="graphic"><div id="tasks"></div></div>
        </div>
        </div>
      </div>
      </div>

      </div>
      </div>
      </div>
      
      <!-- Row end -->

      <!-- *************
      ************ Vendor Js Files *************
      ************* -->



      <!-- Overlay Scroll JS -->
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="vendor/apex/apexcharts.min.js"></script>

      <!-- Apex Charts -->
      <script src="vendor/apex/custom/home/tasks.js"></script>
      <script src="vendor/apex/custom/home/tickets.js"></script>
    



      <!-- Custom JS files -->
      <script src="js/custom.js"></script>


      @elsecan('user')

      <h1>Usuario Sem Permissão</h1>

  @endcan
      @section('footer')

      @endsection
      @endsection