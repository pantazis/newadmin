var chartConfig = {};
chartConfig.chart1 = {
	type: "bar",
	data: localData.chart1,
	options: {
		maintainAspectRatio: false,
		plugins: {
			legend: {
				display: true,
				labels: {
					boxWidth: 10,
				},
			},
			title: {
				display: false,
				text: "Chart.js Bar Chart - Stacked",
			},
		},
		responsive: true,
		interaction: {
			intersect: false,
		},
		scales: {
			x: {
				stacked: true,
			},
			y: {
				stacked: true,
			},
		},
	},
};

//----------------------------------chart2-------------------------------------------------//

chartConfig.chart2 = {
	type: "line",
	data: localData.chart2,
	options: {
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			legend: {
				position: "top",
			},
			title: {
				display: false,
				text: "Chart.js Line Chart",
			},
		},
	},
};

//----------------------------------------------chart3--------------------------//
chartConfig.chart3 = {
	type: "doughnut",
	data: localData.chart3,
	options: {
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			legend: {
				display: true,
				labels: {
					boxWidth: 10,
					font: {
						size: 13,
					},
				},
				position: "right",
			},
			title: {
				display: false,
				text: "Chart.js Doughnut Chart",
			},
		},
	},
};
//----------------------------------chart4-----------------------------------------------

chartConfig.chart4 = {
	type: "line",
	data: localData.chart4,
	options: {
		maintainAspectRatio: false,
		plugins: {
			filler: {
				propagate: false,
			},
			title: {
				display: false,
				text: (ctx) => "Fill: " + "start",
			},
		},
		interaction: {
			intersect: false,
		},
	},
};
