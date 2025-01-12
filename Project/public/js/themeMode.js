document.addEventListener('DOMContentLoaded', () => {

  const toggleThemeButton = document.getElementById('toggle-theme');
  if (!toggleThemeButton) {
    console.error('Botão de alternar tema não encontrado!');
    return;
  }

  const bodyElement = document.querySelector("body");
  const logo = document.getElementById('logo');
  const logo2 = document.getElementById('logo2');
  const chartElement = document.getElementById("graphic"); // Selecione o elemento do gráfico
  // Função para definir o tema com base no valor do cookie
  function setTheme(theme) {
    if (theme === 'dark') {
        bodyElement.setAttribute('data-bs-theme', 'dark');
        bodyElement.style.backgroundColor = '#343a40';
        bodyElement.style.color = 'white';

        // Altera a classe de todos os gráficos para o tema escuro
        updateAllChartsTheme('dark');

        // Trocar a imagem do logo para o tema escuro
        logo.src = 'images/pinguem_logo.png'; // Imagem para o tema escuro
        if (window.location.pathname === '/dashboard') {
            logo2.src = 'images/pinguem_logo.png'; // Imagem para o tema escuro
        }

        // Alterando a cor dos links e parágrafos no tema escuro
        updateTextColors('dark');

        // Alterar a cor dos retângulos do SVG
        updateSvgColors('dark');

        // Atualizar as cores do ApexCharts para o tema escuro
        updateApexChartsTheme('dark');

    } else {
        bodyElement.setAttribute('data-bs-theme', 'light');
        bodyElement.style.backgroundColor = '#ECECEC';
        bodyElement.style.color = 'black';

        // Altera a classe de todos os gráficos para o tema claro
        updateAllChartsTheme('light');

        // Trocar a imagem do logo para o tema claro
        logo.src = 'images/pinguem_logo_2.png'; // Imagem para o tema claro
        if (window.location.pathname === '/dashboard') {
            logo2.src = 'images/pinguem_logo_2.png'; // Imagem para o tema claro
        }

        // Alterando a cor dos links e parágrafos no tema claro
        updateTextColors('light');

        // Alterar a cor dos retângulos do SVG
        updateSvgColors('light');

        // Atualizar as cores do ApexCharts para o tema claro
        updateApexChartsTheme('light');
    }
}

  function updateTextColors(theme) {
    const color = theme === 'dark' ? 'white' : 'black';
    const links = document.querySelectorAll('a');
    
    links.forEach(link => {
      if (!link.closest('.no-theme-change')) {
        link.style.color = color;
      }
    });

    const paragraphs = document.querySelectorAll('p');
    paragraphs.forEach(p => {
      if (!p.closest('.no-theme-change')) {
        p.style.color = color;
      }
    });

    const headings = ['h2', 'h3', 'h5', 'th', 'cite', 'tspan'];
    headings.forEach(tag => {
      const elements = document.querySelectorAll(tag);
      elements.forEach(element => {
        if (!element.closest('.no-theme-change')) {
          element.style.color = color;
        }
      });
    });
  }

  function updateSvgColors(theme) {
    const rects = document.querySelectorAll('#myRect, #myRect2, #myRect3');
    rects.forEach(rect => {
      rect.setAttribute('fill', theme === 'dark' ? '#fff' : '#333');
    });
  }

  function updateApexChartsTheme(theme) {
    const chartOptions = {
      theme: {
        mode: theme === 'dark' ? 'dark' : 'light',
        palette: theme === 'dark' ? 'palette1' : 'palette2' // Ajuste as paletas conforme necessário
      }
    };

    // Supondo que você tenha uma instância do gráfico ApexCharts chamada `chart`
    if (typeof chart !== 'undefined') {
      chart.updateOptions(chartOptions);
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

  function updateAllChartsTheme(theme) {
    const chartElements = document.querySelectorAll(".apexcharts-tooltip"); // Selecione todos os gráficos
    chartElements.forEach(chartElement => {
        if (theme === 'dark') {
            chartElement.classList.add('apexcharts-theme-dark');
            chartElement.classList.remove('apexcharts-theme-light');
        } else {
            chartElement.classList.add('apexcharts-theme-light');
            chartElement.classList.remove('apexcharts-theme-dark');
        }
    });
}
function updateTooltipTheme(theme) {
  const tooltipElements = document.querySelectorAll(".apexcharts-tooltip");
  tooltipElements.forEach(tooltipElement => {
      if (theme === 'dark') {
          tooltipElement.classList.add('apexcharts-theme-dark');
          tooltipElement.classList.remove('apexcharts-theme-light');
      } else {
          tooltipElement.classList.add('apexcharts-theme-light');
          tooltipElement.classList.remove('apexcharts-theme-dark');
      }
  });
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