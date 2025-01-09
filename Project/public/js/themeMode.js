document.addEventListener('DOMContentLoaded', () => {

  const toggleThemeButton = document.getElementById('toggle-theme');
  if (!toggleThemeButton) {
    console.error('Botão de alternar tema não encontrado!');
    return;
  }

  const bodyElement = document.querySelector("body");
  const logo = document.getElementById('logo');
  const logo2 = document.getElementById('logo2');

  // Função para definir o tema com base no valor do cookie
  function setTheme(theme) {
    if (theme === 'dark') {
      bodyElement.setAttribute('data-bs-theme', 'dark');
      bodyElement.style.backgroundColor = 'black';
      bodyElement.style.color = 'white';

      // Trocar a imagem do logo para o tema escuro
      logo.src = 'images/pinguem_logo.png'; // Imagem para o tema escuro
      if (window.location.pathname === '/dashboard') { // Verifica se está na página do dashboard
        logo2.src = 'images/pinguem_logo.png'; // Imagem para o tema escuro
      }

      // Alterando a cor dos links e parágrafos no tema escuro, exceto na seção com a classe no-theme-change
      const links = document.querySelectorAll('a');
      links.forEach(link => {
        if (!link.closest('.no-theme-change')) {
          link.style.color = 'white';  // Cor dos links no tema escuro
        }
      });

      const paragraphs = document.querySelectorAll('p');
      paragraphs.forEach(p => {
        if (!p.closest('.no-theme-change')) {
          p.style.color = 'lightgray';  // Cor dos parágrafos no tema escuro
        }
      });

      const h2s = document.querySelectorAll('h2');
      h2s.forEach(h2 => {
        if (!h2.closest('.no-theme-change')) {
          h2.style.color = 'white';  // Cor dos h2 no tema escuro
        }
      });

      const h3s = document.querySelectorAll('h3');
      h3s.forEach(h3 => {
        if (!h3.closest('.no-theme-change')) {
          h3.style.color = 'white';  // Cor dos h3 no tema escuro
        }
      });

      const h5s = document.querySelectorAll('h5');
      h5s.forEach(h5 => {
        if (!h5.closest('.no-theme-change')) {
          h5.style.color = 'white';  // Cor dos h5 no tema escuro
        }
      });

      const ths = document.querySelectorAll('th');
      ths.forEach(th => {
        if (!th.closest('.no-theme-change')) {
          th.style.color = 'white';  // Cor dos th no tema escuro
          th.style.backgroundColor = 'gray';  // Cor de fundo dos th no tema escuro (opcional)
        }
      });

      const cites = document.querySelectorAll('cite');
      cites.forEach(cite => {
        if (!cite.closest('.no-theme-change')) {
          cite.style.color = 'white';  // Cor do cite no tema escuro
        }
      });

      // Alterar a cor dos retângulos do SVG
      const rects = document.querySelectorAll('#myRect, #myRect2, #myRect3');
      rects.forEach(rect => {
        rect.setAttribute('fill', '#fff'); // Cor dos retângulos no tema escuro
      });

    } else {
      bodyElement.setAttribute('data-bs-theme', 'light');
      bodyElement.style.backgroundColor = 'white';
      bodyElement.style.color = 'black';

      // Trocar a imagem do logo para o tema claro
      logo.src = 'images/pinguem_logo_2.png'; // Imagem para o tema claro
      if (window.location.pathname === '/dashboard') { // Verifica se está na página do dashboard
        logo2.src = 'images/pinguem_logo_2.png'; // Imagem para o tema claro
      }
      

      // Alterando a cor dos links e parágrafos no tema claro, exceto na seção com a classe no-theme-change
      const links = document.querySelectorAll('a');
      links.forEach(link => {
        if (!link.closest('.no-theme-change')) {
          link.style.color = 'black';  // Cor dos links no tema claro
        }
      });

      const paragraphs = document.querySelectorAll('p');
      paragraphs.forEach(p => {
        if (!p.closest('.no-theme-change')) {
          p.style.color = 'black';  // Cor dos parágrafos no tema claro
        }
      });

      const h2s = document.querySelectorAll('h2');
      h2s.forEach(h2 => {
        if (!h2.closest('.no-theme-change')) {
          h2.style.color = 'black';  // Cor dos h2 no tema claro
        }
      });

      const h3s = document.querySelectorAll('h3');
      h3s.forEach(h3 => {
        if (!h3.closest('.no-theme-change')) {
 h3.style.color = 'black';  // Cor dos h3 no tema claro
        }
      });

      
      const h5s = document.querySelectorAll('h5');
      h5s.forEach(h5 => {
        if (!h5.closest('.no-theme-change')) {
          h5.style.color = 'black';  // Cor dos h5 no tema escuro
        }
      });

      const ths = document.querySelectorAll('th');
      ths.forEach(th => {
        if (!th.closest('.no-theme-change')) {
          th.style.color = 'black';  // Cor dos th no tema claro
          th.style.backgroundColor = 'white';  // Cor de fundo dos th no tema claro (opcional)
        }
      });

      const cites = document.querySelectorAll('cite');
      cites.forEach(cite => {
        if (!cite.closest('.no-theme-change')) {
          cite.style.color = 'black';  // Cor do cite no tema claro
        }
      });

      // Alterar a cor dos retângulos do SVG
      const rects = document.querySelectorAll('#myRect, #myRect2, #myRect3');
      rects.forEach(rect => {
        rect.setAttribute('fill', '#333'); // Cor dos retângulos no tema claro
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