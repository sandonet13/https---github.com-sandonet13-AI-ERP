// line chart
var islinechart = document.getElementById('lineChart');
lineChartColor =  getChartColorsArray('lineChart');
if(lineChartColor){
islinechart.setAttribute("width", islinechart.parentElement.offsetWidth);

var lineChart = new Chart(islinechart, {
    type: 'line',
    data: {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
        datasets: [{
                label: "Bus (Voltage)",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[18],
                borderColor: lineChartColor[0],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                // pointHoverBackgroundColor: lineChartColor[14],
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [
                    <?= json_encode($arrBusVol); ?>

                ]
            }, {
                label: "BTS (V)",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[2],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[3],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                // pointHoverBackgroundColor: lineChartColor[3],
                pointHoverBorderColor: "#eef0f2",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [23, 35, 85, 25, 92, 36, 80, 23, 56, 65, 23, 35, 85, 25, 92, 36, 80, 23, 56, 65]
            },
            {
                label: "MW/VSAT (V)",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[4],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[3],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                // pointHoverBackgroundColor: lineChartColor[3],
                pointHoverBorderColor: "#eef0f2",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [80, 23, 56, 65, 23, 35, 85, 25, 22, 30, 60, 23, 76, 30, 23, 35, 20, 25, 12, 36]
            },
            {
                label: "BTS Current",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[6],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[3],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                // pointHoverBackgroundColor: lineChartColor[3],
                pointHoverBorderColor: "#eef0f2",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [60, 23, 76, 30, 23, 35, 20, 25, 12, 20, 72, 23, 56, 65, 23, 35, 35, 25, 62, 36]
            },
            {
                label: "MW/VSAT Current",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[7],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[3],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                // pointHoverBackgroundColor: lineChartColor[3],
                pointHoverBorderColor: "#eef0f2",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [72, 23, 56, 65, 23, 35, 35, 25, 62, 36, 85, 25, 92, 36, 80, 23, 56, 65, 23, 35]
            }
        ]

    },
    options: {
        x: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        y: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        plugins: {
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        },
    },
    
});
}
