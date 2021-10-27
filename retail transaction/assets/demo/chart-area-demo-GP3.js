// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Sep 1", "Sep 2", "Sep 3", "Sep 4", "Sep 5", "Sep 6", "Sep 7", "Sep 8", "Sep 9", "Sep 10", "Sep 11", "Sep 12", "Sep 13", "Sep 14",
    "Sep 15", "Sep 16", "Sep 17", "Sep 18", "Sep 18", "Sep 19", "Sep 20", "Sep 21", "Sep 22", "Sep 23", "Sep 24", "Sep 25", "Sep 26", "Sep 27",
    "Sep 28", "Sep 29", "Sep 30"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(255,110,180,0.2)",
      borderColor: "rgba(255,110,180,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(255,110,180,1)",
      pointBorderColor: "rgba(255,110,180,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(255,110,180,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [100, 120, 154, 486, 125, 365, 256, 248, 379, 246, 354, 268, 687, 555, 467, 387, 651, 234, 200, 178, 562, 389, 239, 450, 552, 430,
      510, 289, 387, 336, 560, ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1000,
          maxTicksLimit: 10
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
