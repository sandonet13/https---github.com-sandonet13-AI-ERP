/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Line Chart init js
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function(value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    if (color) return color;
                    else return newValue;;
                } else {
                    var val = value.split(',');
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        }
    }
}




// Realtime Charts

var linechartrealtimeColors = getChartColorsArray("line_chart_realtime");
if (linechartrealtimeColors) {
    var options = {
        series: [{
            data: data.slice()
        }],
        chart: {
            id: 'realtime',
            realtime:{
                delay: 60000
            },
            height: 350,
            type: 'line',
            animations: {
                enabled: true,
                easing: 'linear',
                dynamicAnimation: {
                    speed: 60000
                }
            },
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Dynamic Updating Chart',
            align: 'left',
            style: {
                fontWeight: 500,
            },
        },
        markers: {
            size: 0
        },
        colors: linechartrealtimeColors,
        xaxis: {
            type: 'minute',
            range: XAXISRANGE,
        },
        yaxis: {
            max: 200
        },
        legend: {
            show: false
        },
    };

    var charts = new ApexCharts(document.querySelector("#line_chart_realtime"), options);
    charts.render();
}


window.setInterval(function () {
    getNewSeries(lastDate, {
        min: 10,
        max: 90
    })

    charts.updateSeries([{
        data: data
    }])
}, 1000)

