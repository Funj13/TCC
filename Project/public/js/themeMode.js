
const toggleThemeButton = document.getElementById('toggle-theme');
const bodyElement = document.getElementById('body');

// Adicionar evento de clique ao botão
toggleThemeButton.addEventListener('click', () => {
  // Verificar se o tema atual é light ou dark
  if (bodyElement.getAttribute('data-bs-theme') === 'white') {
    // Alterar para tema dark
    bodyElement.setAttribute('data-bs-theme', 'dark');
    bodyElement.style.backgroundColor = 'black';
    bodyElement.style.color = 'white';
    bodyElement.style.menu_food = 'black';
    bodyElement.style.theme = 'black';
    bodyElement.style.menu_food = 'black';
    bodyElement.style.theme = 'black';
  } else {
    // Alterar para tema light
    bodyElement.setAttribute('data-bs-theme', 'white');
    bodyElement.style.backgroundColor = 'white';
    bodyElement.style.color = 'black'; 
    bodyElement.style.menu_food = 'white';
    bodyElement.style.theme = 'white';
  }
});
