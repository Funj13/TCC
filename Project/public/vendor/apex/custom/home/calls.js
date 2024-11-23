// avaliações

var options = {
	series: [1, 1],
	chart: {
		height: 216,
		type: "donut",
	},
	dataLabels: {
		enabled: false,
	},
	labels: ["Received", "Called"],
	fill: {
		opacity: 1,
	},
	stroke: {
		width: 0,
		colors: ["#3154d2", "#53a7de", "#ffffff"],
	},
	colors: ["#3154d2", "#53a7de", "#ffffff"],
	yaxis: {
		show: false,
	},
	legend: {
		show: false,
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
	plotOptions: {
		polarArea: {
			rings: {
				strokeWidth: 0,
			},
			spokes: {
				strokeWidth: 0,
			},
		},
	},
};

var chart = new ApexCharts(document.querySelector("#calls"), options);
chart.render();
