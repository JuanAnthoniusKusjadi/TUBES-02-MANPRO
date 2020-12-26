<div class="container-fluid min-vh-100 mt-4">
    <div class="row my-3">
        <div class="col">
            <h3>List Patient</h3>
        </div>
        <div class="col">
            <button class="btn btn-success float-right font-weight-bold" onclick="location.href = './admin?page=addPatient'">
                ADD PATIENT
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- TABLE LIST USER -->
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 2.5%">
                                #
                            </th>
                            <th scope="col" style="width: 5%">
                                ID
                            </th>
                            <th scope="col" style="width: 5%">
                                State
                            </th>
                            <th scope="col" style="width: 2.5%">
                                Sex
                            </th>
                            <th scope="col" style="width: 5%">
                                Age
                            </th>
                            <th scope="col" style="width: 5%">
                                Country
                            </th>
                            <th scope="col" style="width: 5%">
                                Province
                            </th>
                            <th scope="col" style="width: 10%">
                                City
                            </th>
                            <th scope="col" style="width: 5%">
                                Infected By
                            </th>
                            <th scope="col" style="width: 15%">
                                Infection Case
                            </th>
                            <th scope="col" style="width: 10%">
                                Sympton Onset Date
                            </th>
                            <th scope="col" style="width: 10%">
                                Confirmed Date
                            </th>
                            <th scope="col" style="width: 10%">
                                Release Date
                            </th>
                            <th scope="col" style="width: 10%">
                                Deceased Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($all_patient as $key => $patient) {
                                $number = $start_data + $key + 1;
                                echo '
                                    <tr>
                                        <td>'. $number .'</td>
                                        <td>'. $patient->get_id() .'</td>
                                        <td>'. $patient->get_state() .'</td>
                                        <td>'. $patient->get_sex() .'</td>
                                        <td>'. $patient->get_age() .'</td>
                                        <td>'. $patient->get_country() .'</td>
                                        <td>'. $patient->get_province() .'</td>
                                        <td>'. $patient->get_city() .'</td>
                                        <td>'. $patient->get_infected_by() .'</td>
                                        <td>'. $patient->get_infection_case() .'</td>
                                        <td>'. $patient->get_onset_date() .'</td>
                                        <td>'. $patient->get_confirmed_date() .'</td>
                                        <td>'. $patient->get_released_date() .'</td>
                                        <td>'. $patient->get_deceased_date() .'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="float-right">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="./admin?page=patient&data=1"><<</a></li>
                        <?php 
                            $maxpageBtn = 7;
                            $startNum = $current_page;

                            if($total_page < $maxpageBtn) {
                                $maxpageBtn = $total_page;
                            }

                            if($current_page > $maxpageBtn - floor($maxpageBtn / 2))
                            {
                                $startNum = $current_page - floor($maxpageBtn / 2);
                            }
                            else 
                            {
                                $startNum = 1;
                            }

                            if($current_page > ($total_page - $maxpageBtn + floor($maxpageBtn / 2)))
                            {
                                $startNum = $total_page - $maxpageBtn + 1;
                            }

                            for ($i = $startNum; $i < ($startNum + $maxpageBtn); $i++) {
                                echo '
                                    <li class="page-item">
                                        <a class="page-link" href="./admin?page=patient&data='. $i .'">
                                            '. $i .'
                                        </a>
                                    </li>
                                ';
                            }
                        ?>
                    <li class="page-item"><a class="page-link" href="./admin?page=patient&data=<?= $total_page ?>">>></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>