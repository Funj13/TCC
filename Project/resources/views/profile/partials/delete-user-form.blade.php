<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Deletar Conta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.') }}
        </p>
    </header>

    <button 
    type="button" 
    class="btn btn-danger" 
    onclick="event.preventDefault(); dispatchEvent(new CustomEvent('open-modal', { detail: 'confirm-user-deletion' }));">
    Deletar Conta
</button>

   <!-- Modal de Confirmação -->
<div id="confirm-user-deletion" class="modal" style="display: none;">
    <div class="modal-content">
        <form method="post" action="/profile/destroy" class="p-6" id="delete-account-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">

            <h2 class="text-lg font-medium text-gray-900">
                Are you sure you want to delete your account?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                />
                <div class="input-error mt-2" id="password-error"></div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" class="secondary-button" onclick="closeModal()">
                    Cancelar
                </button>

                <button type="submit" class="danger-button ms-3">
                    Deletar Conta
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Estilos do Modal -->
<style>
    .modal {
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .modal-content {
        background: white;
        border-radius: 10px;
        padding: 20px;
        width: 400px;
    }
</style>

<!-- Script para abrir e fechar o modal -->
<script>
    function openModal() {
        document.getElementById('confirm-user-deletion').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('confirm-user-deletion').style.display = 'none';
    }

    // Exemplo de como abrir o modal
    document.addEventListener('open-modal', function(event) {
        if (event.detail === 'confirm-user-deletion') {
            openModal();
        }
    });
</script>
</section>
