var options = {
	chart: {
		height: 300,
		type: "area",
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 3,
	},
	plotOptions: {
		bar: {
			columnWidth: "30%",
		},
	},
	series: [
		{
			name: "Clientes",
			type: "column",
			data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		},
		{
			name: "Lucro",
			type: "column",
			data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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
			bottom: 10,
			left: 0,
		},
	},
	xaxis: {
		categories: [
			"Jan",
			"Feb",
			"Mar",
			"Abr",
			"Mai",
			"Jun",
			"Jul",
			"Ago",
			"Set",
			"Out",
			"Nov",
			"Dez",
		],
	},
	yaxis: {
		labels: {
			show: false,
		},
	},
	colors: ["#53a7de", "#a7a8a6", "#66a4ff"],
	markers: {
		size: 0,
		opacity: 0.3,
		colors: ["#53a7de", "#a7a8a6", "#66a4ff"],
		strokeColor: "#ffffff",
		strokeWidth: 2,
		hover: {
			size: 7,
		},
	},
};

var chart = new ApexCharts(document.querySelector("#tasks"), options);

chart.render();
