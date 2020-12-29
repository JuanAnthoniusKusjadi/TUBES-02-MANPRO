
<div class="container d-flex align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col">
            <div class="card p-4">
                <h3 class="text-center p-2 mb-4 font-weight-bold">Add Patient</h3>
                <div class="container">
                    <form class="" method="POST">
                        <div class="form-row p-2">
                            <div class="col">Patient Id</div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Gender</div>
                            <div class="col">
                                <select class="custom-select" name="sex" required>
                                    <option value="">- Select -</option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>	
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Age</div>
                            <div class="col">
                                <select class="custom-select" name="age" required>
                                    <option value="">- Select -</option>
                                    <option value="10s">10s</option>
                                    <option value="20s">20s</option>
                                    <option value="30s">30s</option>
                                    <option value="40s">40s</option>
                                    <option value="50s">50s</option>
                                    <option value="60s">60s</option>
                                    <option value="70s">70s</option>
                                    <option value="80s">80s</option>
                                    <option value="90s">90s</option>
                                    <option value="100s">100s</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-row p-2">
                            <div class="col">Nationality</div>
                            <div class="col">
                                <select class="custom-select" name="country" required>
                                    <option value="">- Select -</option>
                                    <option value="1">Korea</option>
                                    <option value="2">China</option>
                                    <option value="3">United States</option>
                                    <option value="4">France</option>
                                    <option value="5">Thailand</option>
                                    <option value="6">India</option>
                                    <option value="7">Switzerland</option>
                                    <option value="8">Germany</option>
                                    <option value="9">Indonesia</option>
                                    <option value="10">Vietnam</option>
                                    <option value="11">Mongolia</option>
                                    <option value="12">United Kingdom</option>
                                    <option value="13">Spain</option>
                                    <option value="14">Bangladesh</option>
                                    <option value="15">Foreign</option>
                                    <option value="16">Canada</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">Province</div>
                            <div class="col">
                                <select class="custom-select" name="province" required>
                                    <option value="">- Select -</option>
                                    <option value="0">Tidak Diketahui</option>
                                    <option value="1">Seoul</option>
                                    <option value="2">Busan</option>
                                    <option value="3">Daegu</option>
                                    <option value="4">Gwangju</option>
                                    <option value="5">Incheon</option>
                                    <option value="6">Daejeon</option>
                                    <option value="7">Ulsan</option>
                                    <option value="8">Sejong</option>
                                    <option value="9">Gyeonggi-do</option>
                                    <option value="10">Gangwon-do</option>
                                    <option value="11">Chungcheongbuk-do</option>
                                    <option value="12">Chungcheongnam-do</option>
                                    <option value="13">Jeollabuk-do</option>
                                    <option value="14">Jeollanam-do</option>
                                    <option value="15">Gyeongsangbuk-do</option>
                                    <option value="16">Gyeongsangnam-do</option>
                                    <option value="17">Jeju-do</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row p-2">
                            <div class="col">City</div>
                            <div class="col">
                            <select class="custom-select" name="city" required>
                                    <option value="">- Select -</option>
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
                                <input type="date" class="form-control" name="sympton_onset_date">
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
            
                        <div class="form-row p-2">
                            <div class="col">State</div>
                            <div class="col">
                                <select class="custom-select" name="state" required>
                                    <option value="">- Select -</option>
                                    <option value="released">released</option>
                                    <option value="deceased">deceased</option>
                                    <option value="isolated">isolated</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="button" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>