var chartConfig ={};
chartConfig.chart1 =  {
    type: 'bar',
    data: localData.chart1,
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Chart.js Bar Chart - Stacked'
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
          stacked: true
        }
      }
    }
  };

//----------------------------------chart2-------------------------------------------------//



chartConfig.chart2= {
    type: 'line',
    data: localData.chart2,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Line Chart'
        }
      }
    },
  };

  //----------------------------------------------chart3--------------------------//
  chartConfig.chart3 = {
    type: 'doughnut',
    data: localData.chart3,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    },
  };
  //----------------------------------chart4-----------------------------------------------

  chartConfig.chart4 = {
    type: 'line',
    data: localData.chart4 ,
    options: {
      plugins: {
        filler: {
          propagate: false,
        },
        title: {
          display: true,
          text: (ctx) => 'Fill: ' + 'start'
        }
      },
      interaction: {
        intersect: false,
      }
    },
    
  };
 