//var ctx = document.getElementById("chart-start");
var ctx = document.getElementById("chart-start").getContext("2d");



var data = {
    labels: [
        "Empleate",
        "Emplea"
    ],
    datasets: [
        {
            data: [50, 50],
            backgroundColor: [
                "#FF6384",
                "#36A2EB"

            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB"

            ]
        }]
};
console.log("gg1");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data
    }
);

document.getElementById("chart-start").click =
                        function(evt){
                            var activePoints = myNewChart.getSegmentsAtEvent(evt);
                            var url = "http://example.com/?label=" + activePoints[0].label + "&value=" + activePoints[0].value;
                            consol.log(url);
                          };
