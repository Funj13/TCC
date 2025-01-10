fetch('/api/usuarios-semana') 
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(userData => {
        console.log(userData);



var options = {
	chart: {
		height: 200,
		type: "line",
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 5,
	},
	series: [
		{
			name: "Status Clientes",
			data: (userData),
		},
	],
	grid: {
		borderColor: "#c8cfcc",
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0,
		},
	},
	xaxis: {
		type: "day",
		categories: ["Dom", "Seg", "Tuer", "Qua", "Qui", "Sex", "Sab"],
        ticks: {
            fontColor: '#007bff' // Altera a cor do texto para azul
        }
	},
	yaxis: {
		labels: {
			show: false,
		},
	},
	colors: ["#3154d2", "#f03b59"],
	markers: {
		size: 0,
	},
};

var chart = new ApexCharts(document.querySelector("#tickets"), options);



chart.render();
})
.catch(error => console.error('Erro ao buscar dados:', error));