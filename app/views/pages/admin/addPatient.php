
<div class="container d-flex align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col">
            <div class="card p-4">
                <h3 class="text-center p-2 mb-4 font-weight-bold">Add Patient</h3>
                <?php
                    if(isset($error)) {
                        echo '<div class="alert alert-danger" role="alert">'. $error .'</div>';
                    }
                ?>
                <div class="container">
                    <!-- //? Form Add Patient -->
                    <form class="" id="add-patient-form" method="post" action="./admin?page=addPatient">
                        <div class="form-row p-2">
                            <div class="col">Patient Id</div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="id" name="patient_id" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Gender</div>
                            <div class="col">
                                <select class="custom-select" name="sex" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_sex)) {
                                            foreach ($all_sex as $key => $sex) {
                                                echo '<option value="'. $key .'">'. $sex .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Age</div>
                            <div class="col">
                                <select class="custom-select" name="age" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_age)) {
                                            foreach ($all_age as $key => $age) {
                                                echo '<option value="'. $age .'">'. $age .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-row p-2">
                            <div class="col">Nationality</div>
                            <div class="col">
                                <select class="custom-select" name="country" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_country)) {
                                            foreach ($all_country as $key => $country) {
                                                echo '<option value="'. $country['idCountry'] .'">'. $country['country'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Province</div>
                            <div class="col">
                                <select class="custom-select" name="province" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_province)) {
                                            foreach ($all_province as $key => $province) {
                                                echo '<option value="'. $province['idProvince'] .'">'. $province['province'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">City</div>
                            <div class="col">
                            <select class="custom-select" name="city" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_city)) {
                                            foreach ($all_city as $key => $city) {
                                                echo '<option value="'. $city['idCity'] .'">'. $city['city'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">State</div>
                            <div class="col">
                                <select class="custom-select" name="state" required>
                                    <option value="">- Select -</option>
                                    <?php 
                                        if(isset($all_state)) {
                                            foreach ($all_state as $key => $state) {
                                                echo '<option value="'. $state['idState'] .'">'. $state['state'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Infection Case</div>
                            <div class="col">
                                <input type="text" placeholder="Infection Case" class="form-control" name="infection_case" required>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Infected by</div>
                            <div class="col">
                                <input type="text" placeholder="Infected By" class="form-control" name="infected_by" required>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Symptom Onset Date</div>
                            <div class="col">
                                <input type="date" class="form-control" name="sympton_onset_date" required>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Confirmed Date</div>
                            <div class="col">
                                <input type="date" class="form-control" name="confirm_date">
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Released Date</div>
                            <div class="col">
                                <input type="date" class="form-control" name="released_date">
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Deceased Date</div>
                            <div class="col">
                                <input  type="date" class="form-control" name="deceased_date">
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary font-weight-bold">SUBMIT</button>
                            <button type="button" class="btn btn-outline-danger ml-2" onclick="window.location = './admin?page=patient'">CANCEL</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>