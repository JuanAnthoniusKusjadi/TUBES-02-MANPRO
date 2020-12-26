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
                </div>
            </div>

            <!-- confirmed and deceased case by gender-->
            <div class="card-deck">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <center>
                    <div class="card-body">
                    <h3 class="card-title font-weight-bold">Confirmed Case by Gender</h3>
                    <!-- gambar grafik -->
                    </div>
                    </center>
            </div>
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <center>
                <div class="card-body">
                <h3 class="card-title font-weight-bold">Deceased Case by Gender</h3>
                <!-- gambar grafik -->
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