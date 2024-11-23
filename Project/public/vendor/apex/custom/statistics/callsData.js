var options = {
	chart: {
		height: 240,
		type: "line",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "40px",
			borderRadius: 7,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		show: true,
		curve: "smooth",
		width: 4,
		colors: ["#04befe", "#A2ACBE", "rgba(0, 0, 0, 0.2)"],
	},

	series: [
		{
			name: "Incoming",
			data: [20, 55, 20, 60, 20, 60, 20],
		},
		{
			name: "OutGoing",
			data: [25, 28, 65, 35, 45, 30, 85],
		},
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
	},
	yaxis: {
		show: false,
	},
	fill: {
		opacity: 1,
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
	grid: {
		borderColor: "#c8cfcc",
		strokeDashArray: 3,
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
			right: 20,
			bottom: 0,
			left: 20,
		},
	},
	colors: ["transparent", "transparent", "transparent"],
};
var chart = new ApexCharts(document.querySelector("#callsData"), options);
chart.render();
