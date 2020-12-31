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
                    <div>
                        <canvas id="canvas-4" width="400" height="200"></canvas>
                    </div>
                </div>
                </center>
            </div>

            <!-- Statistics by Province-->
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Statistics by Province</h3>
                    <!-- gambar grafik -->
                    <div>
                        <canvas id="canvas-5" width="400" height="200"></canvas>
                    </div>
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

    function getDailyCountReleased(data) {
        var count = [data.ReleasedDaily];
        return count;
    }

    function getDailyCountDeceased(data) {
        var count = [data.deceasedDaily];
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

        var ctx4 = document.getElementById("canvas-4").getContext("2d");
        new Chart(ctx4, myChart4);

        var ctx5 = document.getElementById("canvas-5").getContext("2d");
        new Chart(ctx5, myChart5);
    };

    var dailyCountInfected = new Array();
    dailyCountInfected = <?php echo json_encode($dailyCountInfected); ?>;
    var dailyCountReleasedArr = new Array();
    dailyCountReleasedArr = <?php echo json_encode($dailyCountReleased); ?>;
    var dailyCountDeceasedArr = new Array();
    dailyCountDeceasedArr = <?php echo json_encode($dailyCountDeceased); ?>;
    var dateLabel = [];
    var stringCount = [];
    var stringCountReleased = [];
    var stringCountDeceased = [];
    var dailyCount = [];
    var dailyCountReleased = [];
    var dailyCountDeceased = [];

    if(dailyCountInfected != '') {
        dateLabel = dailyCountInfected.map(getDate);
        stringCount = dailyCountInfected.map(getDailyCount);
        dailyCount = stringCount.map(toNumber);
        stringCountReleased = dailyCountReleasedArr.map(getDailyCountReleased);
        dailyCountReleased = stringCountReleased.map(toNumber);
        stringCountDeceased = dailyCountDeceasedArr.map(getDailyCountDeceased);
        dailyCountDeceased = stringCountDeceased.map(toNumber);
    }

    var myChart = {
        type: 'line',
        data: {
            datasets : [
                {/* dataset3 */
                    label: "Daily Deceased Growth",
                    borderColor: window.chartColors.red,
                    data: dailyCountDeceased,
                    fill: true,
                },
                {/* dataset1 */
                    label: "Daily Infected Growth",
                    borderColor: window.chartColors.blue,
                    data: dailyCount,
                    fill: true,
                },
                {/* dataset2 */
                    label: "Daily Released Growth",
                    borderColor: window.chartColors.green,
                    data: dailyCountReleased,
                    fill: true,
                }
                ],
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
        window.chartColors.green,
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


    function getAgeInterval(data){
        if(data.age != ''){
            var age = [data.age];
        }
        else{
            var age = "unknown";
        }
        return age;
    }

    function getCountAgeInfected(data) {
        var count = [data.infectedAge];
        return count;
    }

    function getCountAgeDeceased(data) {
        var count = [data.deceasedAge];
        return count;
    }

    function getCountAgeReleased(data) {
        var count = [data.releasedAge];
        return count;
    }

     var countAgeInfectedArr = new Array();
     countAgeInfectedArr = <?php echo json_encode($countAgeInfected); ?>;
     var countAgeReleasedArr = new Array();
     countAgeReleasedArr = <?php echo json_encode($countAgeReleased); ?>;
     var countAgeDeceasedArr = new Array();
     countAgeDeceasedArr = <?php echo json_encode($countAgeDeceased); ?>;

     var ageLabel = [];
     var stringCountAgeInfected = [];
     var stringCountAgeReleased = [];
     var stringCountAgeDeceased = [];
     var countAgeInfected = [];
     var countAgeReleased = [];
     var countAgeDeceased = [];

     if(countAgeInfectedArr != ''){
         ageLabel = countAgeInfectedArr.map(getAgeInterval);
         stringCountAgeInfected = countAgeInfectedArr.map(getCountAgeInfected);
         countAgeInfected = stringCountAgeInfected.map(toNumber);
         stringCountAgeReleased = countAgeReleasedArr.map(getCountAgeReleased);
         countAgeReleased = stringCountAgeReleased.map(toNumber);
         stringCountAgeDeceased = countAgeDeceasedArr.map(getCountAgeDeceased);
         countAgeDeceased = stringCountAgeDeceased.map(toNumber);  
     }

     var data = {
         datasets : [
             {
                 label : "Infected",
                 borderColor : window.chartColors.blue,
                 borderWidth : 4,
                 data : countAgeInfected,
             },
             {
                 label : "Released",
                 borderColor : window.chartColors.green,
                 borderWidth : 4,
                 data : countAgeReleased,
             },
             {
                 label : "Deceased",
                 borderColor : window.chartColors.red,
                 borderWidth : 4,
                 data : countAgeDeceased,
             }
         ],
         labels : ageLabel,
     };

     var myChart4 = {
         type : 'bar',
         data : data,
         options : {
             barValueSpacing : 20, 
             scales : {
                 yAxes : [{
                     ticks : {
                         min : 0,
                     }
                 }]
             }
         }
     };

     function getProvince(data) {
        var province = [data.province];
        return province;
    }

     function getCountProvinceInfected(data) {
        var count = [data.infectedProvince];
        return count;
    }

    function getCountProvinceDeceased(data) {
        var count = [data.deceasedProvince];
        return count;
    }

    function getCountProvinceReleased(data) {
        var count = [data.releasedProvince];
        return count;
    }

     var countProvinceInfectedArr = new Array();
     countProvinceInfectedArr = <?php echo json_encode($countProvinceInfected); ?>;
     var countProvinceReleasedArr = new Array();
     countProvinceReleasedArr = <?php echo json_encode($countProvinceReleased); ?>;
     var countProvinceDeceasedArr = new Array();
     countProvinceDeceasedArr = <?php echo json_encode($countProvinceDeceased); ?>;
     

     var provinceLabel = [];
     var stringCountProvinceInfected = [];
     var stringCountProvinceReleased = [];
     var stringCountProvinceDeceased = [];
     var countProvinceInfected = [];
     var countProvinceReleased = [];
     var countProvinceDeceased = [];

     if(countProvinceInfectedArr != ''){
         provinceLabel = countProvinceInfectedArr.map(getProvince);
         stringCountProvinceInfected = countProvinceInfectedArr.map(getCountProvinceInfected);
         countProvinceInfected = stringCountProvinceInfected.map(toNumber);
         stringCountProvinceReleased = countProvinceReleasedArr.map(getCountProvinceReleased);
         countProvinceReleased = stringCountProvinceReleased.map(toNumber);
         stringCountProvinceDeceased = countProvinceDeceasedArr.map(getCountProvinceDeceased);
         countProvinceDeceased = stringCountProvinceDeceased.map(toNumber);  
     }

     var dataProvince = {
         datasets : [
             {
                 label : "Infected",
                 borderColor : window.chartColors.blue,
                 borderWidth : 4,
                 data : countProvinceInfected,
             },
             {
                 label : "Released",
                 borderColor : window.chartColors.green,
                 borderWidth : 4,
                 data : countProvinceReleased,
             },
             {
                 label : "Deceased",
                 borderColor : window.chartColors.red,
                 borderWidth : 4,
                 data : countProvinceDeceased,
             }
         ],
         labels : provinceLabel,
     };

     var myChart5 = {
         type : 'bar',
         data : dataProvince,
         options : {
             barValueSpacing : 10, 
             scales : {
                 yAxes : [{
                     ticks : {
                         min : 0,
                     }
                 }]
             }
         }
     };
</script>