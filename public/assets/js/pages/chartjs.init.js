/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Chartjs init js
*/


// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function (value) {
            var newValue = value.replace(" ", "");
            if (newValue.indexOf(",") === -1) {
                var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                if (color) return color; else return newValue;;
            } else {
                var val = value.split(',');
                if(val.length == 2){
                    var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                    rgbaColor = "rgba("+rgbaColor+","+val[1]+")";
                    return rgbaColor;
                } else {
                    return newValue;
                }
            }
        });
    }
}

Chart.defaults.borderColor= "rgba(133, 141, 152, 0.1)";
Chart.defaults.color= "#858d98";

// line chart
var islinechart = document.getElementById('lineChart');
lineChartColor =  getChartColorsArray('lineChart');
if(lineChartColor){
islinechart.setAttribute("width", islinechart.parentElement.offsetWidth);

var lineChart = new Chart(islinechart, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
        datasets: [
            {
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
                data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
            },
            {
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
                data: [23, 35, 85, 25, 92, 36, 80, 23, 56, 65 ]
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
                data: [80, 23, 56, 65, 23, 35, 85, 25, 22, 36]
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
                data: [60, 23, 76, 30, 23, 35, 20, 25, 12, 36]
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
                data: [72, 23, 56, 65, 23, 35, 35, 25, 62, 36]
            },
            {
                label: "Temperature °C",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[9],
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
                data: [27, 23, 56, 65, 23, 35, 15, 25, 92, 36]
            },
            {
                label: "BTS Power",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[11],
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
                data: [50, 23, 56, 65, 23, 35, 12, 25, 92, 36]
            },
            {
                label: "VSAT Power",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[15],
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
                data: [30, 23, 56, 65, 23, 35, 45, 25, 92, 36]
            },
            {
                label: "Total Power",
                fill: true,
                lineTension: 0.5,
                // backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[20],
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
                data: [10, 23, 56, 65, 23, 35, 55, 25, 92, 200]
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

// bar chart
var isbarchart = document.getElementById('bar');
barChartColor =  getChartColorsArray('bar');
if(barChartColor){
isbarchart.setAttribute("width", isbarchart.parentElement.offsetWidth);
var barChart = new Chart(isbarchart, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Sales Analytics",
                backgroundColor: barChartColor[0],
                borderColor: barChartColor[0],
                borderWidth: 1,
                hoverBackgroundColor: barChartColor[1],
                hoverBorderColor: barChartColor[1],
                data: [65, 59, 81, 45, 56, 80, 50,20]
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
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
}

// pie chart
var ispiechart = document.getElementById('pieChart');
pieChartColors =  getChartColorsArray('pieChart');
if(pieChartColors){

var pieChart = new Chart(ispiechart, {
    type: 'pie',
    data: {
        labels: [
            "Desktops",
            "Tablets"
        ],
        datasets: [
            {
                data: [300, 180],
                backgroundColor: pieChartColors,
                hoverBackgroundColor: pieChartColors,
                hoverBorderColor: "#fff"
            }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
}

var isdoughnutchart = document.getElementById('doughnut');
doughnutChartColors =  getChartColorsArray('doughnut');
if(doughnutChartColors){
var lineChart = new Chart(isdoughnutchart, {
    type: 'doughnut',
    data: {
        labels: [
            "Desktops",
            "Tablets"
        ],
        datasets: [
            {
                data: [300, 210],
                backgroundColor: doughnutChartColors,
                hoverBackgroundColor: doughnutChartColors,
                hoverBorderColor: "#fff"
            }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
}

// polarArea chart
var ispolarAreachart = document.getElementById('polarArea');
polarAreaChartColors =  getChartColorsArray('polarArea');
if(polarAreaChartColors){
var lineChart = new Chart(ispolarAreachart, {
    type: 'polarArea',
    data: {
        labels: [
            "Series 1",
            "Series 2",
            "Series 3",
            "Series 4"
        ],
        datasets: [{
            data: [
                11,
                16,
                7,
                18
            ],
            backgroundColor: polarAreaChartColors,
            label: 'My dataset', // for legend
            hoverBorderColor: "#fff"
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
}

// radar chart
var isradarchart = document.getElementById('radar');
radarChartColors =  getChartColorsArray('radar');
if(radarChartColors){
var lineChart = new Chart(isradarchart, {
    type: 'radar',
    data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "Desktops",
                backgroundColor: radarChartColors[0], //"rgba(42, 181, 125, 0.2)",
                borderColor: radarChartColors[1], //"#2ab57d",
                pointBackgroundColor: radarChartColors[1], //"#2ab57d",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: radarChartColors[1], //"#2ab57d",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "Tablets",
                backgroundColor: radarChartColors[2], //"rgba(81, 86, 190, 0.2)",
                borderColor: radarChartColors[3], //"#5156be",
                pointBackgroundColor: radarChartColors[3], //"#5156be",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: radarChartColors[3], //"#5156be",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
}