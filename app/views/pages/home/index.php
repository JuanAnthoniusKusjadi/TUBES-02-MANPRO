<div class="container py-4 my-4 min-vh-100">
    <div class="row">
        <div class="col-sm ">
            <div id="carous" class="carousel slide rounded" data-ride="carousel" width="50%">
            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#carous" data-slide-to="0" class="active"></li>
            <li data-target="#carous" data-slide-to="1"></li>
            <li data-target="#carous" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= IMG_PATH . "pic1.jpg"; ?>" alt="Los Angeles" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?= IMG_PATH . "pic2.jpg"; ?>" alt="Chicago" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?= IMG_PATH . "pic3.jpg"; ?>" alt="New York" width="100%">
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="d-flex bd-highlight container">
                <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h3 class="card-title font-weight-bold">Call Center</h3>
                        <h4 class="card-text">1339</h4>
                    </div>
                </div>
                <div class="card shadow ml-auto p-2 bd-highlight" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h3 class="card-title font-weight-bold">Hot Line</h3>
                        <img src="<?= IMG_PATH . "logo-kakaotalk.png"; ?>" alt="" width="20%">
                        <img class="ml-3" src="<?= IMG_PATH . "logo-whatsapp.png"; ?>" alt="" width="20%">
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex bd-highlight container">
                <div class="card shadow p-2 bd-highlight container">
                    <div class="card-body container d-flex bd-highlight justify-content-center">
                        <div class="p-2 bd-highlight" width="70%">
                            <h3 class="mt-3 card-title font-weight-bold">Technical Guidance by</h3>
                            <h3 class="card-title font-weight-bold">World Health Organization</h3>
                        </div>
                        <img class="p-2 bd-highlight" src="<?= IMG_PATH . "logo-who2.png"; ?>" alt="" width="25%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 ">
        <div class="col">
            <h3 class="font-weight-bold text-center mb-4">South Korea COVID-19 Cases</h3>
            <div class="row">
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Total Confirmed</h3>
                                <h4 class="card-text text-center font-weight-bold text-danger row_data"><?= $countConfirmedNational ? $countConfirmedNational : "0" ?></h4>
                                <h5 class="card-text text-center"><small class="text-muted font-weight-bold">Daily Change +  <?= $dailyChangeTotalConfirmed ? $dailyChangeTotalConfirmed : "0" ?></small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Isolated</h3>
                                <h4 class="card-text text-center font-weight-bold text-warning row_data"><?= $countIsolatedNational ? $countIsolatedNational : "0" ?></h4>
                                <h5 class="card-text text-center"><small class="text-muted font-weight-bold">Daily Change +  <?= $dailyChangeIsolated ? $dailyChangeIsolated : "0" ?></small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Released</h3>
                                <h4 class="card-text text-center font-weight-bold text-success row_data"><?= $countReleasedNational ? $countReleasedNational : "0" ?></h4>
                                <h5 class="card-text text-center"><small class="text-muted font-weight-bold">Daily Change + <?= $dailyChangeReleased ? $dailyChangeReleased : "0" ?></small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Deceased</h3>
                                <h4 class="card-text text-center font-weight-bold row_data"><?= $countDeceasedNational ? $countDeceasedNational : "0" ?></h4>
                                <h5 class="card-text text-center"><small class="text-muted font-weight-bold">Daily Change + <?= $dailyChangeDeceased ? $dailyChangeDeceased : "0" ?></small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 card shadow p-2">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h3 class="my-4 font-weight-bold text-center">South Korea COVID-19 Cases Table</h3>
                    <div class="bg-dark pt-3 pb-3">
                        <h4 class="card-text text-center text-white">PERBANDINGAN PERKEMBANGAN COVID-19 TIAP PROVINSI</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <table id="table_less" class="table-bordered text-center w-100">
                        <thead>
                            <tr>
                                <th class="table-active" rowspan="3">No</th>
                                <th class="table-active" rowspan="3">Provinsi</th>
                                <th class="table-success" colspan="1">Positif</th>
                                <th class="table-primary" colspan="2">Sembuh</th>
                                <th class="table-danger" colspan="2">Meninggal</th>
                            </tr>
                            <tr>
                                <th class="table-success" rowspan="2">Jumlah</th>
                                <th class="table-primary" rowspan="2">Jumlah</th>
                                <th class="table-primary" rowspan="2">Persentase</th>
                                <th class="table-danger" rowspan="2">Jumlah</th>
                                <th class="table-danger" rowspan="2">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($countByProvince as $key => $data) {
                                    $no = $key + 1;
                                    echo '
                                        <tr>
                                            <td>'. $no .'</td>
                                            <td>'. $data["province"] .'</td>
                                            <td class="row_data">'.$data["Total"].'</td>
                                            <td class="row_data">'.$data["Sembuh"] .'</td>
                                            <td>'. number_format((float)$data["Sembuh"] / $data["Total"] * 100 , 2, '.', '') .'%</td>
                                            <td class="row_data">'. $data["Meninggal"] .'</td>
                                            <td>'. number_format((float)$data["Meninggal"] / $data["Total"] * 100 , 2, '.', '') .'%</td>
                                        </tr>
                                    ';
                                    if($no == 10){
                                        break;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <table id="table_more" class="table-bordered text-center w-100 d-none">
                        <thead>
                            <tr>
                                <th class="table-active" rowspan="3">No</th>
                                <th class="table-active" rowspan="3">Provinsi</th>
                                <th class="table-success" colspan="1">Positif</th>
                                <th class="table-primary" colspan="2">Sembuh</th>
                                <th class="table-danger" colspan="2">Meninggal</th>
                            </tr>
                            <tr>
                                <th class="table-success" rowspan="2">Jumlah</th>
                                <th class="table-primary" rowspan="2">Jumlah</th>
                                <th class="table-primary" rowspan="2">Persentase</th>
                                <th class="table-danger" rowspan="2">Jumlah</th>
                                <th class="table-danger" rowspan="2">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($countByProvince as $key => $data) {
                                    $no = $key + 1;
                                    echo '
                                        <tr>
                                            <td>'. $no .'</td>
                                            <td>'. $data["province"] .'</td>
                                            <td class="row_data">'. $data["Total"] .'</td>
                                            <td class="row_data">'. $data["Sembuh"] .'</td>
                                            <td>'. number_format((float)$data["Sembuh"] / $data["Total"] * 100 , 2, '.', '') .'%</td>
                                            <td class="row_data">'. $data["Meninggal"] .'</td>
                                            <td>'. number_format((float)$data["Meninggal"] / $data["Total"] * 100 , 2, '.', '') .'%</td>
                                        </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                    <p class="text-center mt-3"><button id="view" class="btn button text-primary">View more</button></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <img src="<?= IMG_PATH . "covid.png"; ?>" alt="">
        </div>
        <div class="col">
            <div class="row flex-column justify-content-center h-100">
                <h2 class="font-weight-bold">Protect yourself and others from COVID-19</h2>
                <h5>if COVID-19 is spreading in your community, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. Check local advice where you live and work. Do it all!</h5>
                <br>
                <h2 class="font-weight-bold">How to make your environment safer</h2>
                <ul>
                    <li><h5>Avoid the 3Cs: spaces that are closed, crowded or involve close contact.</h5></li>
                    <li><h5>Meet people outside.</h5></li>
                    <li><h5>Avoid crowded or indoor settings.</h5></li>
                    <li><h5>Wear a mask.</h5></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="row flex-column justify-content-center h-100">
                <h2 class="font-weight-bold">What to do if you feel unwell</h2>
                <ul>
                    <li><h5>Know the full range of symptoms of COVID-19.</h5></li>
                    <li><h5>Stay home and self-isolate even if you have minor symptoms such as cough, headache, mild fever, until you recover.</h5></li>
                    <li><h5>If you have a fever, cough and difficulty breathing, seek medical attention immediately.</h5></li>
                    <li><h5>Keep up to date on the latest information from trusted sources, such as WHO or your local and national heatlh authorities</h5></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <img src="<?= IMG_PATH . "sick.png"; ?>" alt="" width="100%">
        </div>
    </div>
</div>