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
			data: [1, 1, 1, 1, 1, 1, 1],
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
