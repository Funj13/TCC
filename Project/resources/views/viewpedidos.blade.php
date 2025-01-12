@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

@guest
    <br><br><br>
    <!-- tela usuario sem login -->
    <div class="card ">
        <h1 class="text-align"><a>Faça login para visualizar seus pedidos.</a></h1>
    </div>

    <br><br><br><br><br><br>
@endguest

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
    <link rel="stylesheet" href="css/index.css">
    @auth
            <style>
                .produtos {

                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .produto {
                    border-bottom: 1px solid #ccc;
                    padding: 10px 0;
                }

                .produto img {
                    max-width: 100px;
                    margin-right: 20px;
                }

                .quantidade {
                    display: flex;
                    align-items: center;
                }

                .quantidade button {
                    padding: 5px 10px;
                }

                .preco,
                .disponibilidade {
                    font-weight: bold;
                }

                .total {
                    margin-top: 20px;
                    text-align: right;
                }

                .finalizar-compra {
                    background: #28a745;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    cursor: pointer;
                    border-radius: 5px;
                }

                .finalizar-compra:hover {
                    background: #218838;
                }
            </style>
        </head>
        <br>
        <!-- content -->
        <div class="d-flex justify-content-center">
            <div class="card p-0 w-75 produtos border-0">
                <h2>Historico de Pedidos</h2>
                <div class="card produto rounded-bottom">
                    <table class="table">
                        @foreach ($reservas as $reserva)
                            <tr>
                                <td> <a><img src="images/quartos/{{$reserva->image1}}" alt="quarto"></a> </td>
                                <td> <a>
                                        <h5>{{$reserva->nome}}</h5>
                                    </a>
                                    <a>
                                        <p>Status:{{$reserva->status}}</p>
                                    </a>
                                </td>

                                <td>
                                    <a></a>
                                </td>
                                <td>
                                    <a>
                                        <p>Valor:</p>
                                    </a>
                                    <a>
                                        <p class="preco">R${{$reserva->preco}}</p>
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <p>Tipo:</p>
                                    </a>
                                    <a>
                                        <p class="disponibilidade">{{$reserva->tipo}}</p>
                                    </a>

                                </td>

                                <td>
                                    <form
                                        action="{{ route('reservas.destroy', ['reservaId' => $reserva->reserva_id, 'roomId' => $reserva->room_id]) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon>
                                            Cancelar</button>
                                    </form>
                                </td>

                                <td>
                                    @if ($reserva->status == 'pendente')
                                        <form action="{{ route('reservas.update', ['id' => $reserva->reserva_id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="comprar btn btn-success"><ion-icon
                                                    name="checkmark-outline"></ion-icon>Confirmar</button>
                                        </form>
                                    @else
                                        <form action="" method="post">
                                            <button disabled class="comprar btn btn-primary"><ion-icon
                                                    name="checkmark-outline"></ion-icon>Avaliar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>

                <!-- Modal de Confirmação -->
                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
                    aria-hidden="true">
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
                </tbody>
                </table>
            </div>
        </div>
        <br>



        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Javascript-->
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
    @endauth
@endsection