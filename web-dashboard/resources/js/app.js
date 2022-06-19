import "./bootstrap";

import Alpine from "alpinejs";
import Chart from "chart.js/auto";

window.Alpine = Alpine;

Alpine.start();

var xyValues = [
  {
    x: 50,
    y: 7,
  },
  {
    x: 60,
    y: 8,
  },
  {
    x: 70,
    y: 8,
  },
  {
    x: 80,
    y: 9,
  },
  {
    x: 90,
    y: 9,
  },
  {
    x: 100,
    y: 9,
  },
  {
    x: 110,
    y: 10,
  },
  {
    x: 120,
    y: 11,
  },
  {
    x: 130,
    y: 14,
  },
  {
    x: 140,
    y: 14,
  },
  {
    x: 150,
    y: 15,
  },
];

const dashboardChart = new Chart("myChart", {
  type: "scatter",
  data: {
    datasets: [
      {
        pointRadius: 4,
        pointBackgroundColor: "rgb(0,0,255)",
        data: xyValues,
      },
    ],
  },
  options: {
    legend: {
      display: false,
    },
    scales: {
      xAxes: [
        {
          ticks: {
            min: 40,
            max: 160,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            min: 6,
            max: 16,
          },
        },
      ],
    },
  },
});
