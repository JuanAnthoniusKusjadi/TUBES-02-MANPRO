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

                <!-- Left and right controls -->
                <!-- <a class="carousel-control-prev" href="#carous" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carous" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a> -->
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
                                <h4 class="card-text text-center font-weight-bold text-danger ">43,484</h4>
                                <h4 class="card-text text-center">Daily Change + 718</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Isolated</h3>
                                <h4 class="card-text text-center font-weight-bold text-warning">10,795</h4>
                                <h4 class="card-text text-center">Daily Change + 718</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Released</h3>
                                <h4 class="card-text text-center font-weight-bold text-success">32,102</h4>
                                <h4 class="card-text text-center">Daily Change + 288</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="d-flex bd-highlight">
                        <div class="card shadow p-2 bd-highlight" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center">Deceased</h3>
                                <h4 class="card-text text-center font-weight-bold">587</h4>
                                <h4 class="card-text text-center">Daily Change + 7</h4>
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
                    <h3 class="my-4 font-weight-bold text-center">South Korea COVID-19 Cases</h3>
                    <div class="bg-dark pt-3 pb-3">
                        <h4 class="card-text text-center text-white">PERBANDINGAN PERKEMBANGAN 10 PROVINSI DENGAN COVID-19 TERBESAR,NASIONAL, DAN GLOBAL</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table-bordered text-center w-100">
                        <tr>
                            <th class="table-active" rowspan="3">No</th>
                            <th class="table-active" rowspan="3">Provinsi</th>
                            <th class="table-success" colspan="2">Positif</th>
                            <th class="table-primary" colspan="2">Sembuh</th>
                            <th class="table-danger" colspan="2">Meninggal</th>
                        </tr>
                        <tr>
                            <th class="table-success" rowspan="2">Jumlah</th>
                            <th class="table-success" rowspan="2">Rata-rata pertambahan perhari</th>
                            <th class="table-primary" rowspan="2">Jumlah</th>
                            <th class="table-primary" rowspan="2">Persentase</th>
                            <th class="table-danger" rowspan="2">Jumlah</th>
                            <th class="table-danger" rowspan="2">Persentase</th>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                DKI Jakarta
                            </td>
                            <td>
                                4,539
                            </td>
                            <td>
                                110
                            </td>
                            <td>
                                632
                            </td>
                            <td>
                                13.92%
                            </td>
                            <td>
                                408
                            </td>
                            <td>
                                8.99%
                            </td>
                        </tr>
                        <tr class="bg-primary">
                            <td colspan="2" class="text-white font-weight-bold">
                                National
                            </td>
                            <td class="text-white font-weight-bold">
                                11,587
                            </td>
                            <td class="text-white font-weight-bold">
                                -
                            </td>
                            <td class="text-white font-weight-bold">
                                1,945
                            </td>
                            <td class="text-white font-weight-bold">
                                16,86%
                            </td>
                            <td class="text-white font-weight-bold">
                                864
                            </td>
                            <td class="text-white font-weight-bold">
                                7.46%
                            </td>
                        </tr>
                        <tr class="bg-info">
                            <td colspan="2" class="text-white font-weight-bold">
                                Global / Dunia
                            </td>
                            <td class="text-white font-weight-bold">
                                3,519,901
                            </td>
                            <td class="text-white font-weight-bold">
                                -
                            </td>
                            <td class="text-white font-weight-bold">
                                1,129,834
                            </td>
                            <td class="text-white font-weight-bold">
                                32.10%
                            </td>
                            <td class="text-white font-weight-bold">
                                247.630
                            </td>
                            <td class="text-white font-weight-bold">
                                7.04%
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <h5 class="mt-3 text-center">Data Tanggal : 4 Mei 2020</h5>
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