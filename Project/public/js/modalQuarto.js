             // Obtém o elemento do botão que aciona o modal
            const btnContent = document.getElementById('btnReservar');

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