document.addEventListener('DOMContentLoaded', () => {

  const toggleThemeButton = document.getElementById('toggle-theme');
  if (!toggleThemeButton) {
    console.error('Botão de alternar tema não encontrado!');
    return;
  }

  const bodyElement = document.querySelector("body");

  // Função para definir o tema com base no valor do cookie
  function setTheme(theme) {
    if (theme === 'dark') {
      bodyElement.setAttribute('data-bs-theme', 'dark');
      bodyElement.style.backgroundColor = 'black';
      bodyElement.style.color = 'white';
      
      // Alterando a cor dos links e parágrafos no tema escuro
      const links = document.querySelectorAll('a');
      links.forEach(link => {
        link.style.color = 'white';  // Cor dos links no tema escuro
      });

      const paragraphs = document.querySelectorAll('p');
      paragraphs.forEach(p => {
        p.style.color = 'lightgray';  // Cor dos parágrafos no tema escuro
      });

      const h3s = document.querySelectorAll('h3');
      h3s.forEach(h3 => {
        h3.style.color = 'white';  // Cor dos h3 no tema escuro
      });
    } else {
      bodyElement.setAttribute('data-bs-theme', 'light');
      bodyElement.style.backgroundColor = 'white';
      bodyElement.style.color = 'black';

      // Alterando a cor dos links e parágrafos no tema claro
      const links = document.querySelectorAll('a');
      links.forEach(link => {
        link.style.color = 'black';  // Cor dos links no tema claro
      });

      const paragraphs = document.querySelectorAll('p');
      paragraphs.forEach(p => {
        p.style.color = 'black';  // Cor dos parágrafos no tema claro
      });

      const h3s = document.querySelectorAll('h3');
      h3s.forEach(h3 => {
        h3.style.color = 'black';  // Cor dos h3 no tema claro
      });
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
    setTheme('light');
  }

  // Adicionar evento de clique ao botão
  toggleThemeButton.addEventListener('click', () => {
    const currentTheme = bodyElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    // Mudar o tema e salvar no cookie
    setTheme(newTheme);
    document.cookie = `theme=${newTheme}; path=/; max-age=${60 * 60 * 24 * 30}`; // Expira em 30 dias
  });

});