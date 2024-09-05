@extends('layouts.main')

@section('title', 'Quarto')




@section('topnav')
@endsection
@section('content')

<div class="container">
    <div class="imagem-principal">
        <img src="/images/Quarto_simples_1.jpg" alt="Imagem principal do produto">
    </div>
    <div class="imagens-pequenas">
        <div class="imagem-pequena">
            <img src="/images/Quarto_simples_2.jpg" alt="Outro ângulo do produto">
        </div>
        <div class="imagem-pequena">
            <img src="/images/Quarto_simples_3.jpg" alt="Detalhe do produto">
        </div>
        <div class="imagem-pequena">
            <img src="/images/" alt="Produto relacionado">
        </div>

    </div>

    <div class="informacoes-produto">
        <h2>Quarto da Paz</h2>
        <p>Descrição detalhada do produto, incluindo suas características, funcionalidades e benefícios.</p>
        <p>Preço: R$ 400,00 Diaria</p>
        <button id="btnContent" data-bs-target="#meuModal">RESERVAR</button><br>
    </div>

    <!--content modal-->
    <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quarto da Paz</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Quarto da Paz.</p>
                    <p>Detalhes: <br>
                        2 suites <br>
                        total 400 reais diaria.
                    </p>
                    <div class="reserva">

                        <form action="{{ route('reserva.enviar') }}" method="POST">
                            @csrf
                            <label for="">Nome:</label>
                            <input type="text" class="form-control" name="nome" />

                            <label for="">CPF:</label>
                            <input type="number" class="form-control" name="cpf"
                                data-inputmask="'mask': '999.999.999-99'" />
                            <label for="">Adicione o Dia em que deseja reservar o quarto:</label>
                            <input type="date" class="form-control meu-input-data" id="data-evento"
                                placeholder="DD/MM/AAAA" name="dt-checkin">
                                <label for="">Adicione o Dia em que deseja fazer check-out do quarto:</label>
                            <input type="date" class="form-control meu-input-data" id="data-evento"
                                placeholder="DD/MM/AAAA" name="dt-checkout">


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="enviar">
                            Reservar</button>
                        <button type="button" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Obtém o elemento do botão que aciona o modal
            const btnContent = document.getElementById('btnContent');

            // Adiciona um evento de clique ao botão
            btnContent.addEventListener('click', () => {
                // Obtém o modal e mostra ele
                const meuModal = new bootstrap.Modal(document.getElementById('meuModal'));
                meuModal.show();
            });

            // Em JavaScript
            btnContent.addEventListener('click', () => {
                const meuModal = new bootstrap.Modal(document.getElementById('meuModal'));
                const id = btnContent.dataset.id;
                // Atualize o conteúdo do modal com o valor de id
                document.getElementById('modal-conteudo').textContent = `O ID é: ${id}`;
                meuModal.show();
            });
        </script>
    </div>


    @endsection