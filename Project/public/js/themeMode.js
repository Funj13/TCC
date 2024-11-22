document.addEventListener('DOMContentLoaded', () => {

  const toggleThemeButton = document.getElementById('toggle-theme');
  const bodyElement = document.getElementById('body');


  // Função para definir o tema com base no valor do cookie
  function setTheme(theme) {
    if (theme === 'dark') {
      bodyElement.setAttribute('data-bs-theme', 'dark');
      bodyElement.style.backgroundColor = 'black';
      bodyElement.style.color = 'white';

    } else {
      bodyElement.setAttribute('data-bs-theme', 'white');
      bodyElement.style.backgroundColor = 'white';
      bodyElement.style.color = 'black';

    }
  }

  // Função para obter o valor do cookie
  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }

  // Verificar o cookie ao carregar a página
  const savedTheme = getCookie('theme');
  if (savedTheme) {
    setTheme(savedTheme);
  } else {
    // Define um tema padrão se não houver cookie
    setTheme('white');
  }

  // Adicionar evento de clique ao botão
  toggleThemeButton.addEventListener('click', () => {
    const currentTheme = bodyElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'white' ? 'dark' : 'white';
    
    // Mudar o tema e salvar no cookie
    setTheme(newTheme);
    document.cookie = `theme=${newTheme}; path=/; max-age=${60 * 60 * 24 * 30}`; // Expira em 30 dias
  });

});