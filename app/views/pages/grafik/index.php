<div class="container">
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center my-4 font-weight-bold">South Korea COVID-19 Statistics</h1>
            <div class="card-deck">
              
              <!-- Card -->
              <!-- 4 atas -->
                <!-- total confirmed -->
                <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Total Confirmed</h3>
                    <!-- total confirmed dari data -->
                    <h4 class="card-text text-danger font-weight-bold"><?= $countConfirmedTotal ? $countConfirmedTotal : "0" ?></h4>
                    <!-- daily change dari data-->
                    <h5 class="card-text"><small class="text-muted font-weight-bold">Daily Change +  <?= $dailyChangeTotalConfirmed ? $dailyChangeTotalConfirmed : "0" ?></small></h5>
                </div>
                </center>
                </div>

                <!-- isolated -->
                <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Isolated</h3>
                    <!-- isolated dari data -->
                    <h4 class="card-text text-warning font-weight-bold"><?= $countIsolatedTotal ? $countIsolatedTotal : "0" ?></h4>
                    <!-- daily change dari data-->
                    <h5 class="card-text"><small class="text-muted font-weight-bold">Daily Change +  <?= $dailyChangeIsolated ? $dailyChangeIsolated : "0" ?></small></h5>
                </div>
                </center>
                </div>

                <!-- released -->
                <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Released</h3>
                        <!-- released dari data -->
                    <h4 class="card-text text-success font-weight-bold"><?= $countReleasedTotal ? $countReleasedTotal : "0" ?></h4>
                    <!-- daily change dari data -->
                    <h5 class="card-text"><small class="text-muted font-weight-bold">Daily Change + <?= $dailyChangeReleased ? $dailyChangeReleased : "0" ?></small></h5>
                </div>
                </center>
                </div>

                <!-- deceased -->
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <center>
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">Deceased</h3>
                            <!-- released dari data -->
                        <h4 class="card-text font-weight-bold"><?= $countDeceasedTotal ? $countDeceasedTotal : "0" ?></h4>
                        <!-- daily change dari data -->
                        <h5 class="card-text "><small class="text-muted font-weight-bold">Daily Change + <?= $dailyChangeDeceased ? $dailyChangeDeceased : "0" ?></small></h5>
                    </div>
                    </center>
                </div>
            </div>

            <!--Weekly Chart Case Growth -->
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Daily Chart Case Growth</h3>
                    <!-- gambar grafik -->
                    <div>
                        <canvas id="canvas" width="400" height="200"></canvas>
                        <p id="p"></p>
                    </div>
                </div>
            </div>

            <!-- infected and deceased case by gender-->
            <div class="card-deck">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <center>
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">Infected Case by Gender</h3>
                        <!-- gambar grafik -->
                        <div>
                            <canvas id="canvas-2" width="400" height="200"></canvas>
                        </div>
                    </div>
                </center>
            </div>
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Deceased Case by Gender</h3>
                    <!-- gambar grafik -->
                    <div>
                        <canvas id="canvas-3" width="400" height="200"></canvas>
                    </div>
                </div>
                </center>
            </div>
            </div>

            <!-- Statistics by Age Interval-->
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Statistics by Age Interval</h3>
                    <!-- gambar grafik -->
                </div>
                </center>
            </div>

            <!-- Statistics by Province-->
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Statistics by Province</h3>
                    <!-- gambar grafik -->
                </div>
                </center>
            </div>
        </div>
    </div>
</div>

<script>
    function getDate(data) {
        var date = [data.date];
        return date;
    }

    function getDailyCount(data) {
        var count = [data.infectedDaily];
        return count;
    }

    function toNumber(x) {
        return +x;
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        new Chart(ctx, myChart);

        var ctx2 = document.getElementById("canvas-2").getContext("2d");
        new Chart(ctx2, myChart2);

        var ctx3 = document.getElementById("canvas-3").getContext("2d");
        new Chart(ctx3, myChart3);
    };

    var dailyCountInfected = new Array();
    dailyCountInfected = <?php echo json_encode($dailyCountInfected); ?>;
    var dateLabel = [];
    var stringCount = [];
    var dailyCount = [];

    if(dailyCountInfected != '') {
        dateLabel = dailyCountInfected.map(getDate);
        stringCount = dailyCountInfected.map(getDailyCount);
        dailyCount = stringCount.map(toNumber);
    }

    var myChart = {
        type: 'line',
        data: {
            datasets : [
                {/* dataset1 */
                    label: "Daily Growth",
                    borderColor: window.chartColors.blue,
                    data: dailyCount,
                    fill: true,
                }],
                labels: dateLabel,
        },
        options: {
            scales: {
                xAxes : [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Date',
                    },
                    ticks: {
                        autoSkip: true,
                    }
                }],
                yAxes : [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Infected(s)'
                    }
                }]
            },
            responsive: true,
        }
            
    };

    var colors = [
        window.chartColors.blue,
        window.chartColors.red,
    ];

    function getCountGenderInfected(data) {
        var count = [data.infectedGender];
        return count;
    }

    function getCountGenderDeceased(data) {
        var count = [data.deceasedGender];
        return count;
    }

    var countGenderInfected = new Array();
    var countGenderDeceased = new Array();
    fullGenderInfected = <?php echo json_encode($countGenderInfected); ?>;
    fullGenderDeceased = <?php echo json_encode($countGenderDeceased); ?>;

    var stringCountGenderInfected = [];
    var countGenderInfected = [];
    var stringCountGenderDeceased = [];
    var countGenderDeceased = [];

    if(fullGenderInfected != '') {
        stringCountGenderInfected = fullGenderInfected.map(getCountGenderInfected);
        countGenderInfected = stringCountGenderInfected.map(toNumber);
        stringCountGenderDeceased = fullGenderDeceased.map(getCountGenderDeceased);
        countGenderDeceased = stringCountGenderDeceased.map(toNumber);
    }

    document.getElementById("p").innerHTML = typeof countGenderInfected[0];

    var myChart2 = {
        type: 'pie',
        data: {
            datasets: [{
                data: countGenderInfected,
                backgroundColor: colors
            }],
            labels: ["Male", "Female"],
        },
        options: {
            responsive: true,
        },
    };

    var myChart3 = {
        type: 'pie',
        data: {
            datasets: [{
                data: countGenderDeceased,
                backgroundColor: colors
            }],
            labels: ["Male", "Female"],
        },
        options: {
            responsive: true,
        },
    };
</script>