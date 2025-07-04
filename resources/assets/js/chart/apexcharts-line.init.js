/*
Template Name: Urbix - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
File: apexcharts-line.init.js
*/

var apex_line_chart = {
    chart: {
        type: "area",
        stacked: false,
        height: 350,
    },
    title: {
        text: 'Basic Line Chart',
        align: 'left'
    },
    dataLabels: {
        enabled: false,
    },
    grid: {
        strokeDashArray: 3,
    },
    series: [
        {
            data: [8000, 4000, 5000, 17000, 18000, 40000, 18000, 10000, 6000, 20000],
        },
    ],
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
    xaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        tooltip: {
            enabled: false,
        },
    },
    yaxis: {
        min: 0,
        max: 50000,
        tickAmount: 5,
        labels: {
            formatter: function (value) {
                return value >= 1000 ? value / 1000 + "K" : value.toLocaleString();
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (value) {
                return value >= 1000 ? value / 1000 + "K" : value.toLocaleString();
            },
        }
    }
};
document.addEventListener('DOMContentLoaded', function () {
    var chart = new ApexCharts(document.querySelector("#apex-line-chart"), apex_line_chart);
    chart.render();
});

var basic_line_chart = {
    series: [{
        name: "Desktops",
        data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
    }],
    chart: {
        height: 300,
        type: 'line',
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: 'Basic Line Chart',
        align: 'left'
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
    }
};
var chart = new ApexCharts(document.querySelector("#basic_line_chart"), basic_line_chart);
chart.render();

var line_with_data_label = {
    series: [
        {
            name: "High - 2013",
            data: [28, 29, 33, 36, 32, 32, 33]
        },
        {
            name: "Low - 2013",
            data: [12, 11, 14, 18, 17, 13, 13]
        }
    ],
    chart: {
        height: 350,
        type: 'line',
        dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.5
        },
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        }
    },
    colors: ['#77B6EA', '#545454'],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: 'smooth',
        width: 2
    },
    title: {
        text: 'Basic Line Chart with label',
        align: 'left'
    },
    grid: {
        borderColor: '#e7e7e7',
        row: {
            colors: ['transparent'], // Removed striped effect
            opacity: 0.5
        },
    },
    markers: {
        size: 0
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        title: {
            text: 'Month'
        }
    },
    yaxis: {
        title: {
            text: 'Temperature'
        },
        min: 5,
        max: 40
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
    }
};

var chart = new ApexCharts(document.querySelector("#line_with_data_label"), line_with_data_label);
chart.render();


var step_line_line_chart = {
    series: [{
        data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
    }],
    chart: {
        type: 'line',
        height: 350
    },
    stroke: {
        curve: 'stepline',
    },
    dataLabels: {
        enabled: false
    },
    title: {
        text: 'Stepline Chart',
        align: 'left'
    },
    markers: {
        hover: {
            sizeOffset: 4
        }
    }
};
var chart = new ApexCharts(document.querySelector("#step_line_line_chart"), step_line_line_chart);
chart.render();

var dashedChart = {
    series: [{
        name: "Session Duration",
        data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
    },
    {
        name: "Page Views",
        data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
    },
    {
        name: 'Total Visits',
        data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
    }
    ],
    chart: {
        height: 350,
        type: 'line',
        zoom: {
            enabled: false
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: [5, 7, 5],
        curve: 'straight',
        dashArray: [0, 8, 5]
    },
    title: {
        text: 'Dashed Chart',
        align: 'left'
    },
    legend: {
        tooltipHoverFormatter: function (val, opts) {
            return val + ' - <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
        }
    },
    markers: {
        size: 0,
        hover: {
            sizeOffset: 6
        }
    },
    xaxis: {
        categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan',
            '10 Jan', '11 Jan', '12 Jan'
        ],
    },
    tooltip: {
        y: [
            {
                title: {
                    formatter: function (val) {
                        return val + " (mins)"
                    }
                }
            },
            {
                title: {
                    formatter: function (val) {
                        return val + " per session"
                    }
                }
            },
            {
                title: {
                    formatter: function (val) {
                        return val;
                    }
                }
            }
        ]
    },
    grid: {
        borderColor: '#f1f1f1',
    }
};
var chart = new ApexCharts(document.querySelector("#dashedChart"), dashedChart);
chart.render();

var spline_area_chart = {
    series: [{
        name: 'series1',
        data: [31, 40, 28, 51, 42, 109, 100]
    }, {
        name: 'series2',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],
    chart: {
        height: 350,
        type: 'area'
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    title: {
        text: 'Spline Area Chart',
        align: 'left'
    },
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};
var chart = new ApexCharts(document.querySelector("#spline_area_chart"), spline_area_chart);
chart.render();


var datetime_xaxis_area_chart = {
    series: [{
        data: [
            [1327359600000, 30.95],
            [1327446000000, 31.34],
            [1327532400000, 31.18],
            [1327618800000, 31.05],
            [1327878000000, 31.00],
            [1327964400000, 30.95],
            [1328050800000, 31.24],
            [1328137200000, 31.29],
            [1328223600000, 31.85],
            [1328482800000, 31.86],
            [1328569200000, 32.28],
            [1328655600000, 32.10],
            [1328742000000, 32.65],
            [1328828400000, 32.21],
            [1329087600000, 32.35],
            [1329174000000, 32.44],
            [1329260400000, 32.46],
            [1329346800000, 32.86],
            [1329433200000, 32.75],
            [1329778800000, 32.54],
            [1329865200000, 32.33],
            [1329951600000, 32.97],
            [1330038000000, 33.41],
            [1330297200000, 33.27],
            [1330383600000, 33.27],
            [1330470000000, 32.89],
            [1330556400000, 33.10],
            [1330642800000, 33.73],
            [1330902000000, 33.22],
            [1330988400000, 31.99],
            [1331074800000, 32.41],
            [1331161200000, 33.05],
            [1331247600000, 33.64],
            [1331506800000, 33.56],
            [1331593200000, 34.22],
            [1331679600000, 33.77],
            [1331766000000, 34.17],
            [1331852400000, 33.82],
            [1332111600000, 34.51],
            [1332198000000, 33.16],
            [1332284400000, 33.56],
            [1332370800000, 33.71],
            [1332457200000, 33.81],
            [1332712800000, 34.40],
            [1332799200000, 34.63],
            [1332885600000, 34.46],
            [1332972000000, 34.48],
            [1333058400000, 34.31],
            [1333317600000, 34.70],
            [1333404000000, 34.31],
            [1333490400000, 33.46],
            [1333576800000, 33.59],
            [1333922400000, 33.22],
            [1334008800000, 32.61],
            [1334095200000, 33.01],
            [1334181600000, 33.55],
            [1334268000000, 33.18],
            [1334527200000, 32.84],
            [1334613600000, 33.84],
            [1334700000000, 33.39],
            [1334786400000, 32.91],
            [1334872800000, 33.06],
            [1335132000000, 32.62],
            [1335218400000, 32.40],
            [1335304800000, 33.13],
            [1335391200000, 33.26],
            [1335477600000, 33.58],
            [1335736800000, 33.55],
            [1335823200000, 33.77],
            [1335909600000, 33.76],
            [1335996000000, 33.32],
            [1336082400000, 32.61],
            [1336341600000, 32.52],
            [1336428000000, 32.67],
            [1336514400000, 32.52],
            [1336600800000, 31.92],
            [1336687200000, 32.20],
            [1336946400000, 32.23],
            [1337032800000, 32.33],
            [1337119200000, 32.36],
            [1337205600000, 32.01],
            [1337292000000, 31.31],
            [1337551200000, 32.01],
            [1337637600000, 32.01],
            [1337724000000, 32.18],
            [1337810400000, 31.54],
            [1337896800000, 31.60],
            [1338242400000, 32.05],
            [1338328800000, 31.29],
            [1338415200000, 31.05],
            [1338501600000, 29.82],
            [1338760800000, 30.31],
            [1338847200000, 30.70],
            [1338933600000, 31.69],
            [1339020000000, 31.32],
            [1339106400000, 31.65],
            [1339365600000, 31.13],
            [1339452000000, 31.77],
            [1339538400000, 31.79],
            [1339624800000, 31.67],
            [1339711200000, 32.39],
            [1339970400000, 32.63],
            [1340056800000, 32.89],
            [1340143200000, 31.99],
            [1340229600000, 31.23],
            [1340316000000, 31.57],
            [1340575200000, 30.84],
            [1340661600000, 31.07],
            [1340748000000, 31.41],
            [1340834400000, 31.17],
            [1340920800000, 32.37],
            [1341180000000, 32.19],
            [1341266400000, 32.51],
            [1341439200000, 32.53],
            [1341525600000, 31.37],
            [1341784800000, 30.43],
            [1341871200000, 30.44],
            [1341957600000, 30.20],
            [1342044000000, 30.14],
            [1342130400000, 30.65],
            [1342389600000, 30.40],
            [1342476000000, 30.65],
            [1342562400000, 31.43],
            [1342648800000, 31.89],
            [1342735200000, 31.38],
            [1342994400000, 30.64],
            [1343080800000, 30.02],
            [1343167200000, 30.33],
            [1343253600000, 30.95],
            [1343340000000, 31.89],
            [1343599200000, 31.01],
            [1343685600000, 30.88],
            [1343772000000, 30.69],
            [1343858400000, 30.58],
            [1343944800000, 32.02],
            [1344204000000, 32.14],
            [1344290400000, 32.37],
            [1344376800000, 32.51],
            [1344463200000, 32.65],
            [1344549600000, 32.64],
            [1344808800000, 32.27],
            [1344895200000, 32.10],
            [1344981600000, 32.91],
            [1345068000000, 33.65],
            [1345154400000, 33.80],
            [1345413600000, 33.92],
            [1345500000000, 33.75],
            [1345586400000, 33.84],
            [1345672800000, 33.50],
            [1345759200000, 32.26],
            [1346018400000, 32.32],
            [1346104800000, 32.06],
            [1346191200000, 31.96],
            [1346277600000, 31.46],
            [1346364000000, 31.27],
            [1346709600000, 31.43],
            [1346796000000, 32.26],
            [1346882400000, 32.79],
            [1346968800000, 32.46],
            [1347228000000, 32.13],
            [1347314400000, 32.43],
            [1347400800000, 32.42],
            [1347487200000, 32.81],
            [1347573600000, 33.34],
            [1347832800000, 33.41],
            [1347919200000, 32.57],
            [1348005600000, 33.12],
            [1348092000000, 34.53],
            [1348178400000, 33.83],
            [1348437600000, 33.41],
            [1348524000000, 32.90],
            [1348610400000, 32.53],
            [1348696800000, 32.80],
            [1348783200000, 32.44],
            [1349042400000, 32.62],
            [1349128800000, 32.57],
            [1349215200000, 32.60],
            [1349301600000, 32.68],
            [1349388000000, 32.47],
            [1349647200000, 32.23],
            [1349733600000, 31.68],
            [1349820000000, 31.51],
            [1349906400000, 31.78],
            [1349992800000, 31.94],
            [1350252000000, 32.33],
            [1350338400000, 33.24],
            [1350424800000, 33.44],
            [1350511200000, 33.48],
            [1350597600000, 33.24],
            [1350856800000, 33.49],
            [1350943200000, 33.31],
            [1351029600000, 33.36],
            [1351116000000, 33.40],
            [1351202400000, 34.01],
            [1351638000000, 34.02],
            [1351724400000, 34.36],
            [1351810800000, 34.39],
            [1352070000000, 34.24],
            [1352156400000, 34.39],
            [1352242800000, 33.47],
            [1352329200000, 32.98],
            [1352415600000, 32.90],
            [1352674800000, 32.70],
            [1352761200000, 32.54],
            [1352847600000, 32.23],
            [1352934000000, 32.64],
            [1353020400000, 32.65],
            [1353279600000, 32.92],
            [1353366000000, 32.64],
            [1353452400000, 32.84],
            [1353625200000, 33.40],
            [1353884400000, 33.30],
            [1353970800000, 33.18],
            [1354057200000, 33.88],
            [1354143600000, 34.09],
            [1354230000000, 34.61],
            [1354489200000, 34.70],
            [1354575600000, 35.30],
            [1354662000000, 35.40],
            [1354748400000, 35.14],
            [1354834800000, 35.48],
            [1355094000000, 35.75],
            [1355180400000, 35.54],
            [1355266800000, 35.96],
            [1355353200000, 35.53],
            [1355439600000, 37.56],
            [1355698800000, 37.42],
            [1355785200000, 37.49],
            [1355871600000, 38.09],
            [1355958000000, 37.87],
            [1356044400000, 37.71],
            [1356303600000, 37.53],
            [1356476400000, 37.55],
            [1356562800000, 37.30],
            [1356649200000, 36.90],
            [1356908400000, 37.68],
            [1357081200000, 38.34],
            [1357167600000, 37.75],
            [1357254000000, 38.13],
            [1357513200000, 37.94],
            [1357599600000, 38.14],
            [1357686000000, 38.66],
            [1357772400000, 38.62],
            [1357858800000, 38.09],
            [1358118000000, 38.16],
            [1358204400000, 38.15],
            [1358290800000, 37.88],
            [1358377200000, 37.73],
            [1358463600000, 37.98],
            [1358809200000, 37.95],
            [1358895600000, 38.25],
            [1358982000000, 38.10],
            [1359068400000, 38.32],
            [1359327600000, 38.24],
            [1359414000000, 38.52],
            [1359500400000, 37.94],
            [1359586800000, 37.83],
            [1359673200000, 38.34],
            [1359932400000, 38.10],
            [1360018800000, 38.51],
            [1360105200000, 38.40],
            [1360191600000, 38.07],
            [1360278000000, 39.12],
            [1360537200000, 38.64],
            [1360623600000, 38.89],
            [1360710000000, 38.81],
            [1360796400000, 38.61],
            [1360882800000, 38.63],
            [1361228400000, 38.99],
            [1361314800000, 38.77],
            [1361401200000, 38.34],
            [1361487600000, 38.55],
            [1361746800000, 38.11],
            [1361833200000, 38.59],
            [1361919600000, 39.60],
        ]
    }],
    chart: {
        id: 'area-datetime',
        type: 'area',
        height: 350,
        background: 'transparent', // Remove background
        zoom: {
            autoScaleYaxis: true
        }
    },
    annotations: {
        yaxis: [{
            y: 30,
            borderColor: '#999',
            label: {
                show: true,
                text: 'Support',
                style: {
                    color: "#fff",
                    background: '#00E396'
                }
            }
        }],
        xaxis: [{
            x: new Date('14 Nov 2012').getTime(),
            borderColor: '#999',
            yAxisIndex: 0,
            label: {
                show: true,
                text: 'Rally',
                style: {
                    color: "#fff",
                    background: '#775DD0'
                }
            }
        }]
    },
    dataLabels: {
        enabled: false
    },
    markers: {
        size: 0,
        style: 'hollow',
    },
    xaxis: {
        type: 'datetime',
        min: new Date('01 Mar 2012').getTime(),
        tickAmount: 6,
    },
    tooltip: {
        x: {
            format: 'dd MMM yyyy'
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 100]
        }
    },
};
var chart = new ApexCharts(document.querySelector("#datetime_xaxis_area_chart"), datetime_xaxis_area_chart);
chart.render();

const resetCssClasses = (activeEl) => {
    document.querySelectorAll('.toolbar button').forEach((el) => {
        el.classList.remove('active');
    });
    activeEl.target.classList.add('active');
};
const zoomChart = (startDate, endDate) => {
    chart.zoomX(startDate.getTime(), endDate.getTime());
};

const buttonConfigs = [
    { id: '#one_month', start: '2013-01-28', end: '2013-02-27' },
    { id: '#six_months', start: '2012-09-27', end: '2013-02-27' },
    { id: '#one_year', start: '2012-02-27', end: '2013-02-27' },
    { id: '#ytd', start: '2013-01-01', end: '2013-02-27' },
    { id: '#all', start: '2012-01-23', end: '2013-02-27' },
];
// buttonConfigs.forEach(({ id, start, end }) => {
//     document.querySelector(id).addEventListener('click', (e) => {
//         resetCssClasses(e);
//         zoomChart(new Date(start), new Date(end));
//     });
// });

var basic_column_chart = {
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Free Cash Flow',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    title: {
        text: 'Basic Column Chart',
        align: 'left'
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
};
var chart = new ApexCharts(document.querySelector("#basic_column_chart"), basic_column_chart);
chart.render();

var column_with_label = {
    series: [{
        name: 'Inflation',
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
    }],
    chart: {
        height: 350,
        type: 'bar',
    },
    title: {
        text: 'Column with label Chart',
        align: 'left'
    },
    plotOptions: {
        bar: {
            borderRadius: 10,
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "%";
        },
        offsetY: -20,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },

    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        // crosshairs: {
        //     fill: {
        //         type: 'gradient',
        //         gradient: {
        //             colorFrom: '#D8E3F0',
        //             colorTo: '#BED1E6',
        //             stops: [0, 100],
        //             opacityFrom: 0.4,
        //             opacityTo: 0.5,
        //         }
        //     }
        // },
        tooltip: {
            enabled: true,
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            // show: false,
            formatter: function (val) {
                return val + "%";
            }
        }

    },
    // title: {
    //     text: 'Monthly Inflation in Argentina, 2002',
    //     floating: true,
    //     offsetY: 330,
    //     align: 'center',
    //     style: {
    //         color: '#444'
    //     }
    // }
};
var chart = new ApexCharts(document.querySelector("#column_with_label"), column_with_label);
chart.render();

var dumbbell_column_chart = {
    series: [
        {
            data: [
                {
                    x: '2008',
                    y: [2800, 4500]
                },
                {
                    x: '2009',
                    y: [3200, 4100]
                },
                {
                    x: '2010',
                    y: [2950, 7800]
                },
                {
                    x: '2011',
                    y: [3000, 4600]
                },
                {
                    x: '2012',
                    y: [3500, 4100]
                },
                {
                    x: '2013',
                    y: [4500, 6500]
                },
                {
                    x: '2014',
                    y: [4100, 5600]
                }
            ]
        }
    ],
    chart: {
        height: 350,
        type: 'rangeBar',
        zoom: {
            enabled: false
        }
    },
    title: {
        text: 'Dumbbell Column Chart',
        align: 'left'
    },
    plotOptions: {
        bar: {
            isDumbbell: true,
            columnWidth: 3,
            dumbbellColors: [['#008FFB', '#00E396']]
        }
    },
    legend: {
        show: true,
        showForSingleSeries: true,
        // position: 'top',
        // horizontalAlign: 'left',
        customLegendItems: ['Product A', 'Product B']
    },
    fill: {
        type: 'gradient',
        gradient: {
            type: 'vertical',
            gradientToColors: ['#00E396'],
            inverseColors: true,
            stops: [0, 100]
        }
    },
    grid: {
        xaxis: {
            lines: {
                show: true
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        }
    },
    xaxis: {
        tickPlacement: 'on'
    }
};
var chart = new ApexCharts(document.querySelector("#dumbbell_column_chart"), dumbbell_column_chart);
chart.render();

var basic_bar_chart = {
    series: [{
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    title: {
        text: 'Basic Bar Chart',
        align: 'left'
    },
    xaxis: {
        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
            'United States', 'China', 'Germany'
        ],
    }
};
var chart = new ApexCharts(document.querySelector("#basic_bar_chart"), basic_bar_chart);
chart.render();

var negative_bar_chart = {
    series: [{
        name: 'Males',
        data: [0.2, 0.3, 0.4, 0.5, 0.6, 0.8, 1.0, 1.5, 1.8, 2.0] // 10 data points
    },
    {
        name: 'Females',
        data: [-0.4, -0.5, -0.6, -0.7, -0.8, -1.0, -1.2, -1.5, -1.8, -2.0] // 10 data points
    }],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true
    },
    colors: ['#008FFB', '#FF4560'],
    plotOptions: {
        bar: {
            borderRadius: 5,
            borderRadiusApplication: 'end', // 'around', 'end'
            borderRadiusWhenStacked: 'all', // 'all', 'last'
            horizontal: true,
            barHeight: '80%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 1,
        colors: ["#fff"]
    },
    grid: {
        xaxis: {
            lines: {
                show: false
            }
        }
    },
    yaxis: {
        stepSize: 1
    },
    tooltip: {
        shared: false,
        x: {
            formatter: function (val) {
                return val
            }
        },
        y: {
            formatter: function (val) {
                return Math.abs(val) + "%"
            }
        }
    },
    title: {
        text: 'Negative Bar Chart'
    },
    xaxis: {
        categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59', '50-54',
            '45-49', '40-44'], // 10 categories
        title: {
            text: 'Percent'
        },
        labels: {
            formatter: function (val) {
                return Math.abs(Math.round(val)) + "%"
            }
        }
    },
};
var chart = new ApexCharts(document.querySelector("#negative_bar_chart"), negative_bar_chart);
chart.render();

var line_column_chart = {
    series: [{
        name: 'Website Blog',
        type: 'column',
        data: [44, 50, 41, 67, 22, 41, 20, 35, 75, 32, 25, 16]  // Smaller values
    }, {
        name: 'Social Media',
        type: 'line',
        data: [2, 4, 3, 2, 4, 2, 1, 3, 2, 2, 1, 2]  // Smaller values
    }],
    chart: {
        height: 350,
        type: 'line',
    },
    stroke: {
        width: [0, 4]
    },
    title: {
        text: 'Line Column Chart'
    },
    dataLabels: {
        enabled: true,
        enabledOnSeries: [1]
    },
    labels: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan', '10 Jan', '11 Jan', '12 Jan'],
    yaxis: [{
        title: {
            text: 'Website Blog',
        },
    }, {
        opposite: true,
        title: {
            text: 'Social Media'
        }
    }]
};
var chart = new ApexCharts(document.querySelector("#line_column_chart"), line_column_chart);
chart.render();

var funnel_chart = {
    series: [
        {
            name: "Funnel Series",
            data: [1380, 1100, 990, 880, 740, 548, 330, 200],
        },
    ],
    chart: {
        type: 'bar',
        height: 350,
    },
    plotOptions: {
        bar: {
            borderRadius: 0,
            horizontal: true,
            barHeight: '80%',
            isFunnel: true,
        },
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ':  ' + val
        },
        dropShadow: {
            enabled: true,
        },
    },
    title: {
        text: 'Funnel Chart',
        align: 'middle',
    },
    xaxis: {
        categories: [
            'Sourced',
            'Screened',
            'Assessed',
            'HR Interview',
            'Technical',
            'Verify',
            'Offered',
            'Hired',
        ],
    },
    legend: {
        show: false,
    },
};
var chart = new ApexCharts(document.querySelector("#funnel_chart"), funnel_chart);
chart.render();

var candlestick_chart = {
    series: [{
        data: [{
            x: new Date(1538778600000),
            y: [6629.81, 6650.5, 6623.04, 6633.33]
        },
        {
            x: new Date(1538780400000),
            y: [6632.01, 6643.59, 6620, 6630.11]
        },
        {
            x: new Date(1538782200000),
            y: [6630.71, 6648.95, 6623.34, 6635.65]
        },
        {
            x: new Date(1538784000000),
            y: [6635.65, 6651, 6629.67, 6638.24]
        },
        {
            x: new Date(1538785800000),
            y: [6638.24, 6640, 6620, 6624.47]
        },
        {
            x: new Date(1538787600000),
            y: [6624.53, 6636.03, 6621.68, 6624.31]
        },
        {
            x: new Date(1538789400000),
            y: [6624.61, 6632.2, 6617, 6626.02]
        },
        {
            x: new Date(1538791200000),
            y: [6627, 6627.62, 6584.22, 6603.02]
        },
        {
            x: new Date(1538793000000),
            y: [6605, 6608.03, 6598.95, 6604.01]
        },
        {
            x: new Date(1538794800000),
            y: [6604.5, 6614.4, 6602.26, 6608.02]
        },
        {
            x: new Date(1538796600000),
            y: [6608.02, 6610.68, 6601.99, 6608.91]
        },
        {
            x: new Date(1538798400000),
            y: [6608.91, 6618.99, 6608.01, 6612]
        },
        {
            x: new Date(1538800200000),
            y: [6612, 6615.13, 6605.09, 6612]
        },
        {
            x: new Date(1538802000000),
            y: [6612, 6624.12, 6608.43, 6622.95]
        },
        {
            x: new Date(1538803800000),
            y: [6623.91, 6623.91, 6615, 6615.67]
        },
        {
            x: new Date(1538805600000),
            y: [6618.69, 6618.74, 6610, 6610.4]
        },
        {
            x: new Date(1538807400000),
            y: [6611, 6622.78, 6610.4, 6614.9]
        },
        {
            x: new Date(1538809200000),
            y: [6614.9, 6626.2, 6613.33, 6623.45]
        },
        {
            x: new Date(1538811000000),
            y: [6623.48, 6627, 6618.38, 6620.35]
        },
        {
            x: new Date(1538812800000),
            y: [6619.43, 6620.35, 6610.05, 6615.53]
        },
        {
            x: new Date(1538814600000),
            y: [6615.53, 6617.93, 6610, 6615.19]
        },
        {
            x: new Date(1538816400000),
            y: [6615.19, 6621.6, 6608.2, 6620]
        },
        {
            x: new Date(1538818200000),
            y: [6619.54, 6625.17, 6614.15, 6620]
        },
        {
            x: new Date(1538820000000),
            y: [6620.33, 6634.15, 6617.24, 6624.61]
        },
        {
            x: new Date(1538821800000),
            y: [6625.95, 6626, 6611.66, 6617.58]
        },
        {
            x: new Date(1538823600000),
            y: [6619, 6625.97, 6595.27, 6598.86]
        },
        {
            x: new Date(1538825400000),
            y: [6598.86, 6598.88, 6570, 6587.16]
        },
        {
            x: new Date(1538827200000),
            y: [6588.86, 6600, 6580, 6593.4]
        },
        {
            x: new Date(1538829000000),
            y: [6593.99, 6598.89, 6585, 6587.81]
        },
        {
            x: new Date(1538830800000),
            y: [6587.81, 6592.73, 6567.14, 6578]
        },
        {
            x: new Date(1538832600000),
            y: [6578.35, 6581.72, 6567.39, 6579]
        },
        {
            x: new Date(1538834400000),
            y: [6579.38, 6580.92, 6566.77, 6575.96]
        },
        {
            x: new Date(1538836200000),
            y: [6575.96, 6589, 6571.77, 6588.92]
        },
        {
            x: new Date(1538838000000),
            y: [6588.92, 6594, 6577.55, 6589.22]
        },
        {
            x: new Date(1538839800000),
            y: [6589.3, 6598.89, 6589.1, 6596.08]
        },
        {
            x: new Date(1538841600000),
            y: [6597.5, 6600, 6588.39, 6596.25]
        },
        {
            x: new Date(1538843400000),
            y: [6598.03, 6600, 6588.73, 6595.97]
        },
        {
            x: new Date(1538845200000),
            y: [6595.97, 6602.01, 6588.17, 6602]
        },
        {
            x: new Date(1538847000000),
            y: [6602, 6607, 6596.51, 6599.95]
        },
        {
            x: new Date(1538848800000),
            y: [6600.63, 6601.21, 6590.39, 6591.02]
        },
        {
            x: new Date(1538850600000),
            y: [6591.02, 6603.08, 6591, 6591]
        },
        {
            x: new Date(1538852400000),
            y: [6591, 6601.32, 6585, 6592]
        },
        {
            x: new Date(1538854200000),
            y: [6593.13, 6596.01, 6590, 6593.34]
        },
        {
            x: new Date(1538856000000),
            y: [6593.34, 6604.76, 6582.63, 6593.86]
        },
        {
            x: new Date(1538857800000),
            y: [6593.86, 6604.28, 6586.57, 6600.01]
        },
        {
            x: new Date(1538859600000),
            y: [6601.81, 6603.21, 6592.78, 6596.25]
        },
        {
            x: new Date(1538861400000),
            y: [6596.25, 6604.2, 6590, 6602.99]
        },
        {
            x: new Date(1538863200000),
            y: [6602.99, 6606, 6584.99, 6587.81]
        },
        {
            x: new Date(1538865000000),
            y: [6587.81, 6595, 6583.27, 6591.96]
        },
        {
            x: new Date(1538866800000),
            y: [6591.97, 6596.07, 6585, 6588.39]
        },
        {
            x: new Date(1538868600000),
            y: [6587.6, 6598.21, 6587.6, 6594.27]
        },
        {
            x: new Date(1538870400000),
            y: [6596.44, 6601, 6590, 6596.55]
        },
        {
            x: new Date(1538872200000),
            y: [6598.91, 6605, 6596.61, 6600.02]
        },
        {
            x: new Date(1538874000000),
            y: [6600.55, 6605, 6589.14, 6593.01]
        },
        {
            x: new Date(1538875800000),
            y: [6593.15, 6605, 6592, 6603.06]
        },
        {
            x: new Date(1538877600000),
            y: [6603.07, 6604.5, 6599.09, 6603.89]
        },
        {
            x: new Date(1538879400000),
            y: [6604.44, 6604.44, 6600, 6603.5]
        },
        {
            x: new Date(1538881200000),
            y: [6603.5, 6603.99, 6597.5, 6603.86]
        },
        {
            x: new Date(1538883000000),
            y: [6603.85, 6605, 6600, 6604.07]
        },
        {
            x: new Date(1538884800000),
            y: [6604.98, 6606, 6604.07, 6606]
        },
        ]
    }],
    chart: {
        type: 'candlestick',
        height: 350
    },
    title: {
        text: 'CandleStick Chart',
        align: 'left'
    },
    xaxis: {
        type: 'datetime'
    },
    yaxis: {
        tooltip: {
            enabled: true
        }
    }
};
var chart = new ApexCharts(document.querySelector("#candlestick_chart"), candlestick_chart);
chart.render();

var Box_Whisker_chart = {
    series: [
    {
      type: 'boxPlot',
      data: [
        {
          x: 'Jan 2015',
          y: [54, 66, 69, 75, 88]
        },
        {
          x: 'Jan 2016',
          y: [43, 65, 69, 76, 81]
        },
        {
          x: 'Jan 2017',
          y: [31, 39, 45, 51, 59]
        },
        {
          x: 'Jan 2018',
          y: [39, 46, 55, 65, 71]
        },
        {
          x: 'Jan 2019',
          y: [29, 31, 35, 39, 44]
        },
        {
          x: 'Jan 2020',
          y: [41, 49, 58, 61, 67]
        },
        {
          x: 'Jan 2021',
          y: [54, 59, 66, 71, 88]
        }
      ]
    }
  ],
    chart: {
    type: 'boxPlot',
    height: 350
  },
  title: {
    text: 'Basic BoxPlot Chart',
    align: 'left'
  },
  plotOptions: {
    boxPlot: {
      colors: {
        upper: '#5C4742',
        lower: '#A5978B'
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#Box_Whisker_chart"), Box_Whisker_chart);
  chart.render();


document.addEventListener("DOMContentLoaded", function () {
    var basic_pie_chart = {
        series: [15000, 9500, 7000],
        chart: {
            type: 'pie',
            height: 280,
        },
        labels: ['Marketing', 'Sales', 'Development'],
        dataLabels: {
            enabled: true, // Enable data labels for better clarity
        },
        colors: ['#FF4560', '#00E396', '#008FFB'],
        legend: {
            position: 'bottom', // Positioning the legend at the bottom
        }
    };

    var chart = new ApexCharts(document.querySelector("#basic_pie_chart"), basic_pie_chart);
    chart.render();
});

var donut_chart = {
    series: [40, 35, 25], // Market share percentages
    chart: {
        type: 'donut',
        height: 280,
    },
    labels: ['Apple', 'Samsung', 'Google'], // Updated brand names
    legend: {
        position: 'bottom', // Positioning the legend at the bottom
    },
    dataLabels: {
        enabled: true, // Enable data labels for clarity
    },
    colors: ['#FF4560', '#00E396', '#008FFB'], // Custom colors for each slice
};
var chart = new ApexCharts(document.querySelector("#donut_chart"), donut_chart);
chart.render();

var radar_charts = {
    series: [{
        name: 'Series 1',
        data: [80, 50, 30, 40, 100, 20],
    }],
    chart: {
        height: 280,
        type: 'radar',
        toolbar: {
            show: false // Hide the toolbar
        },
    },
    yaxis: {
        stepSize: 20
    },
    xaxis: {
        categories: ['January', 'February', 'March', 'April', 'May', 'June']
    }
};
var chart = new ApexCharts(document.querySelector("#radar_charts"), radar_charts);
chart.render();

var radar_multiple_chart = {
    series: [{
        name: 'Series 1',
        data: [60, 40, 50, 70, 90, 30], // Updated data
    }, {
        name: 'Series 2',
        data: [30, 20, 60, 90, 40, 70], // Updated data
    }, {
        name: 'Series 3',
        data: [50, 80, 70, 40, 60, 20], // Updated data
    }],
    chart: {
        height: 280,
        type: 'radar',
        toolbar: {
            show: false // Hide the toolbar
        },
    },
    stroke: {
        width: 2
    },
    fill: {
        opacity: 0.1
    },
    markers: {
        size: 0
    },
    yaxis: {
        show: false, // Hide the y-axis
    },
    xaxis: {
        categories: ['2011', '2012', '2013', '2014', '2015', '2016']
    }
};
var chart = new ApexCharts(document.querySelector("#radar_multiple_chart"), radar_multiple_chart);
chart.render();

var radialbar_chart = {
    series: [70],
    chart: {
        height: 280,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            hollow: {
                size: '70%',
            }
        },
    },
    labels: ['Cricket'],
};
var chart = new ApexCharts(document.querySelector("#radialbar_chart"), radialbar_chart);
chart.render();

var multiple_radialbars_chart = {
    series: [44, 55, 67, 83],
    chart: {
        height: 280,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249
                    }
                }
            }
        }
    },
    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
};
var chart = new ApexCharts(document.querySelector("#multiple_radialbars_chart"), multiple_radialbars_chart);
chart.render();