@can ('admin')

@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
<head>
  
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
@section('topnav')

@endsection
<br>

        <!-- App body starts -->
        <div class="app-body">

          <!-- Container starts -->
          <div class="container">

       
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-xl-6 col-sm-12 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <!-- Row start -->
                    <div class="row">
                      <div class="col-sm-8 col-12">
                        <h3 class="mb-3">Status Clientes</h3>
                        <p class="w-50">
                          Ultimos 7 dias:
                          <span class="text-success fw-bold">0%</span> a mais de clientes.
                        </p>
                        <div id="tickets"></div>
                      </div>
                      <div class="col-sm-4 col-12">
                        <div class="text-end">
                          <img src="images/pinguem_logo_2.png" class="img-150" alt="pinguem logo" />
                        </div>
                        <div class="mt-5 d-flex flex-wrap gap-3">
                          <div class="d-flex align-items-center">
                            <div class="icons-box md bg-info rounded-3 me-3">
                              <i class="icon-add_task text-white fs-4"></i>
                            </div>
                            <div class="m-0">
                              <h3 class="m-0 fw-semibold">0</h3>
                              <p class="m-0 text-secondary">Clientes em 2024</p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="icons-box md bg-danger rounded-3 me-3">
                              <i class="icon-add_task text-white fs-4"></i>
                            </div>
                            <div class="m-0">
                              <h3 class="m-0 fw-semibold">0</h3>
                              <p class="m-0 text-secondary">Clientes em 2023</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Avaliações</h5>
                    <div id="calls"></div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex flex-row">
                      <div class="d-flex align-items-center">
                        <div class="border border-info rounded-4 icons-box md">
                          <i class="icon-support_agent text-info fs-3"></i>
                        </div>
                        <div class="ms-2">
                          <h3 class="m-0">1</h3>
                          <p class="m-0 text-secondary">Servidores em Serviço</p>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <div id="sparkline1"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Pedidos Resolvidos</h5>
                    <div id="callsByCountry" class="auto-align-graph"></div>
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
                              <th>Data Criada</th>
                              <th>Atualizado há</th>
                              <th>Prioridade</th>
                              <th>Área</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Alignment UI issue fix</td>
                              <td><span class="badge bg-danger">In Progress</span></td>
                              <td>
                                <span class="badge border border-danger text-danger">Bug</span>
                                <span class="badge border border-danger text-danger">Design</span>
                              </td>
                              <td>2023/04/25</td>
                              <td>2 mins ago</td>
                              <td><span class="badge bg-danger">High</span></td>
                              <td>Sales</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Responsive Design Issues Fix</td>
                              <td><span class="badge bg-dark">Not Started</span></td>
                              <td>
                                <span class="badge border border-danger text-danger">Sales</span>
                                <span class="badge border border-danger text-danger">Testing</span>
                              </td>
                              <td>2023/02/12</td>
                              <td>7 mins ago</td>
                              <td><span class="badge bg-danger">Medium</span></td>
                              <td>Support</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Unit Testing</td>
                              <td><span class="badge bg-danger">Feedback</span></td>
                              <td>
                                <span class="badge border border-danger text-danger">Fix</span>
                                <span class="badge border border-danger text-danger">Sales</span>
                              </td>
                              <td>2023/03/16</td>
                              <td>12 mins ago</td>
                              <td><span class="badge bg-danger">Low</span></td>
                              <td>Development</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Validations</td>
                              <td><span class="badge bg-danger">In Progress</span></td>
                              <td>
                                <span class="badge border border-danger text-danger">Bug</span>
                                <span class="badge border border-dark text-dark">Development</span>
                              </td>
                              <td>2023/04/25</td>
                              <td>45 mins ago</td>
                              <td><span class="badge bg-danger">High</span></td>
                              <td>Sales</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Testing and UI Issues Fix</td>
                              <td><span class="badge bg-danger">Testing</span></td>
                              <td>
                                <span class="badge border border-danger text-danger">Validation</span>
                                <span class="badge border border-danger text-danger">Fix</span>
                              </td>
                              <td>2023/02/12</td>
                              <td>58 mins ago</td>
                              <td><span class="badge bg-dark">Low</span></td>
                              <td>Support</td>
                            </tr>
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
                    <div id="tasks"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="vendor/apex/apexcharts.min.js"></script>
    <script src="vendor/apex/custom/home/tasks.js"></script>
    <script src="vendor/apex/custom/home/ticketsData.js"></script>
    <script src="assets/vendor/apex/custom/home/avgTimeData.js"></script>
    <script src="vendor/apex/custom/home/tickets.js"></script>
    <script src="vendor/apex/custom/home/calls.js"></script>
    <script src="vendor/apex/custom/home/callsByCountry.js"></script>
    <script src="vendor/apex/custom/home/sparkline.js"></script>


    <!-- Custom JS files -->
    <script src="js/custom.js"></script>
            
@endsection
@elsecan('user')

<h1>Usuario Sem Permissão</h1>

@endcan
