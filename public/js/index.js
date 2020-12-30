window.onload = function() {
    var ctx = document.getElementById("canvas").getContext("2d");
    new Chart(ctx, myChart);
};

var dummyData = [
    randomScalingFactor(),
    randomScalingFactor(),
    randomScalingFactor(),
    randomScalingFactor(),
    randomScalingFactor()
];

var colors = [
    window.chartColors.red,
    window.chartColors.grey,
    window.chartColors.yellow,
    window.chartColors.green,
    window.chartColors.blue,
];

var myChart = {
    type: 'pie',
    data: {
        datasets: [{
            data: dummyData,
            backgroundColor: colors
        }],
        labels: ["Red", "Grey", "Yellow", "Green", "Blue"]
    },
    options: {
        title: {
            display: true,
            text: 'Chart.js Pie Chart'
        },
        responsive: true,
    },
};