<?php
// Inclua a biblioteca PHPlot
require_once '../phplot.php'; // Ajuste o caminho conforme necessário

// Dados do gráfico
$data = [
    ['Dom', 10], // Exemplo de dados para cada dia da semana
    ['Seg', 20],
    ['Ter', 15],
    ['Qua', 25],
    ['Qui', 30],
    ['Sex', 18],
    ['Sab', 22],
];

// Criação do gráfico
$plot = new PHPlot(800, 400); // Largura e altura do gráfico
$plot->SetTitle('Gráfico de Usuários por Dia da Semana');
$plot->SetXTitle('Dias da Semana');
$plot->SetYTitle('Número de Usuários');

// Defina os dados do gráfico
$plot->SetDataValues($data);

// Defina o tipo de gráfico
$plot->SetPlotType('lines'); // Tipo de gráfico: linha
$plot->SetDataType('data-data');

// Configurações adicionais
$plot->SetDrawYGrid(True);
$plot->SetYTickPos('both'); // Mostra os ticks em ambos os lados
$plot->SetXTickLabelPos('none'); // Não mostra os rótulos dos ticks no eixo X

// Defina as cores
$plot->SetLineStyles('solid');
$plot->SetLineWidth(2);
$plot->SetColor('#3154d2'); // Cor da linha

// Renderiza o gráfico
$plot->DrawGraph();
?>