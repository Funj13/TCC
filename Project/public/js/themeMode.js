document.addEventListener('DOMContentLoaded', () => {

  const toggleThemeButton = document.getElementById('toggle-theme');
  const bodyElement = document.getElementById('body');
  const rectElement = document.getElementById('myRect');
  const rectElement2 = document.getElementById('myRect2'); // Referência ao elemento <rect>
  const rectElement3 = document.getElementById('myRect3');

  // Adicionar evento de clique ao botão
  toggleThemeButton.addEventListener('click', () => {
    // Verificar se o tema atual é light ou dark
    if (bodyElement.getAttribute('data-bs-theme') === 'white') {
      // Alterar para tema dark
      bodyElement.setAttribute('data-bs-theme', 'dark');
      bodyElement.style.backgroundColor = 'black';
      bodyElement.style.color = 'white';

      // Alterar a cor do <rect>
      rectElement.setAttribute('fill', '#f0f0f0'); // Cor para o tema claro
      rectElement2.setAttribute('fill', '#f0f0f0');
      rectElement3.setAttribute('fill', '#f0f0f0');
    } else {
      // Alterar para tema light
      bodyElement.setAttribute('data-bs-theme', 'white');
      bodyElement.style.backgroundColor = 'white';
      bodyElement.style.color = 'black';

      // Alterar a cor do <rect>
      rectElement.setAttribute('fill', '#333'); // Cor para o tema escuro
      rectElement2.setAttribute('fill', '#333');
      rectElement3.setAttribute('fill', '#333');
    }
  });

});