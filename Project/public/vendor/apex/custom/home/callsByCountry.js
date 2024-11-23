var options = {
	chart: {
		height: 279,
		width: "75%",
		type: "bar",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "60%",
			borderRadius: 8,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		show: true,
		width: 0,
		colors: ["#ec5757"],
	},

	// valores
	series: [
		{
			name: "Pedidos",
			data: [0, 0, 0, 0, 0],
		},
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["Caique", "Carlos", "João", "Richarlyson", "Mateus"],
	},
	yaxis: {
		show: false,
	},
	fill: {
		colors: ["#e73737"],
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return +val;
			},
		},
	},
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
			bottom: -10,
			left: 0,
		},
	},
};
var chart = new ApexCharts(document.querySelector("#callsByCountry"), options);
chart.render();
