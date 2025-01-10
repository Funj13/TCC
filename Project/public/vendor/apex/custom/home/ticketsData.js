var options = {
	chart: {
		height: 210,
		type: "bar",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			columnWidth: "60%",
			borderRadius: 8,
			distributed: true,
			dataLabels: {
				position: "top",
			},
		},
	},
	series: [
		{
			name: "Tickets",
			data: [20, 30, 40, 50, 60, 70],
		},
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["Active", "Solved", "Closed", "Open", "Critico", "Alta"],
		axisBorder: {
			show: false,
		},
		yaxis: {
			show: false,
		},

		tooltip: {
			enabled: true,
		},
		labels: {
			show: true,
			rotate: -45,
			rotateAlways: true,
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
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
	colors: ["#53a7de", "#3154d2"],
	fill: {
		type: "gradient",
		gradient: {
			shade: "dark",
			type: "horizontal",
			shadeIntensity: 0.1,
			gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
			inverseColors: true,
			opacityFrom: 1,
			opacityTo: 1,
			stops: [0, 100],
			colorStops: [],
		},
	},
};
var chart = new ApexCharts(document.querySelector("#ticketsData"), options);
chart.render();
