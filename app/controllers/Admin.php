<?php

require MODEL_PATH . 'QueryUser.php';
require MODEL_PATH . 'QueryPatient.php';
require MODEL_PATH . 'QueryCity.php';
require MODEL_PATH . 'QueryCountry.php';
require MODEL_PATH . 'QueryProvince.php';
require MODEL_PATH . 'QueryState.php';

class Admin extends Controller {
    protected $age = ["10s", "20s", "30s", "40s", "50s", "60s", "70s", "80s", "90s", "100s"];
    protected $sex = ["Male", "Female"];

    public function index() {
        $auth = $this::auth_helper();
        $user = $auth->get_auth();

        if ($user) {
            return $this->page_admin();
        } else {
            $this->redirect('login');
        }
    }

    public function page_admin()
    {
        if (!isset($_GET['page'])) {
            header('location: ./admin?page=user');
        }

        switch ($_GET['page']) {
            case 'user':
                $this->page_user();
                break;
            case 'addUser':
                $this->page_addUser();
                break;
            case 'updateUser':
                $this->page_editUser();
                break;
            case 'addPatient':
                $this->page_addPatient();
                break;
            case 'delPatient':
                $this->deletePatient();
                break;
            case 'editPatient':
                $this->page_editPatient();
                break;
            case 'patient':
                $this->page_patient();
                break;
            default:
                $this->page_user();
                break;
        }
    }

    public function page_user()
    {
        $page = $this::create_page('admin', 'user');

        $q_user = new QueryUser;
        $page->all_user = $q_user->get_all_user();

        $page->render();
    }

    public function page_addUser()
    {
        $page = $this::create_page('admin', 'addUser');

        $q_user = new QueryUser;
        $page->all_user = $q_user->get_all_user();

        $page->render();
    }

    public function page_editUser()
    {
        $page = $this::create_page('admin', 'editUser');

        $id = "";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $page->id = $id;

        $q_user = new QueryUser();
        $page->user = $q_user->get_user_by_id($id);

        $page->render();
    }

    public function page_patient()
    {
        $page = $this::create_page('admin', 'patient');
        $q_patient = new QueryPatient;

        $pageNumber = 1;
        if(isset($_GET['data'])) {
            $pageNumber = $_GET['data'];
        }

        if(isset($_GET['error'])) {
            $page->error = $_GET['error'];
        }
        
        $dataPerPage = 20;
        $totalData = $q_patient->get_count_all_patient();
        $start = $dataPerPage * ($pageNumber - 1);
        $end = $dataPerPage;

        $page->all_patient = $q_patient->get_all_patient($start, $end);
        $page->total_data = $totalData;
        $page->data_per_page = $dataPerPage;
        $page->current_page = $pageNumber;
        $page->total_page =  ceil($totalData / $dataPerPage);
        $page->start_data = $start;

        $page->render();
    }

    public function page_addPatient()
    {
        $page = $this::create_page('admin', 'addPatient');
        $q_city = new QueryCity;
        $q_patient = new QueryPatient;
        $q_country = new QueryCountry;
        $q_city = new QueryCity;
        $q_province = new QueryProvince;
        $q_state = new QueryState;
        
        $country = $q_country->get_all_country();
        $city = $q_city->get_all_city();
        $province = $q_province->get_all_province();
        $state = $q_state->get_all_state();

        $page->all_sex = $this->sex;
        $page->all_age = $this->age;

        if($city) {
            $page->all_city = $city;
        }
        
        if($country) {
            $page->all_country = $country;
        }

        if($province) {
            $page->all_province = $province;
        }

        if($state) {
            $page->all_state = $state;
        }

        if(
            isset($_POST['patient_id']) && isset($_POST['sex']) && 
            isset($_POST['age']) && isset($_POST['country']) && 
            isset($_POST['province']) && isset($_POST['city']) && 
            isset($_POST['state'])
            ) {

            $id = $_POST['patient_id'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $country = $_POST['country'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $infection_case = $_POST['infection_case'];
            $sympton_onset_date = $_POST['sympton_onset_date'];
            $infected_by = $_POST['infected_by'];
            $confirm_date = $_POST['confirm_date'];
            $released_date = $_POST['released_date'];
            $deceased_date = $_POST['deceased_date'];

            $q_patient = new QueryPatient;
            $q_res = $q_patient->add_patient($id, $sex, $age, $country, $province, $city, $infection_case, $sympton_onset_date, $state, $infected_by, $confirm_date,  $released_date, $deceased_date);

            if($q_res) {
                header('location: ./admin?page=patient');
            }
            else {
                $page->error = $q_patient->get_error();
            }
        }

        $page->render();
    }

    public function deletePatient() {
        if(isset($_GET['patient_id'])) {
            $user_id = $_GET['patient_id'];

            $q_patient = new QueryPatient;
            $result = $q_patient->delete_patient($user_id);

            if($result) {
                header('location: ./admin?page=patient');
            }
            else {
                header('location: ./admin?page=patient&error='.$q_patient->get_error());
            }
        }
    }

    public function page_editPatient() {
        $page = $this::create_page('admin', 'editPatient');

        if(isset($_GET['patient_id'])) {
            $user_id = $_GET['patient_id'];
            $page->patient_id = $user_id;

            $q_patient = new QueryPatient;
            $q_country = new QueryCountry;
            $q_city = new QueryCity;
            $q_province = new QueryProvince;
            $q_state = new QueryState;
            
            $result = $q_patient->get_patient_by_id($user_id);
            $country = $q_country->get_all_country();
            $city = $q_city->get_all_city();
            $province = $q_province->get_all_province();
            $state = $q_state->get_all_state();

            $page->all_sex = $this->sex;
            $page->all_age = $this->age;
            
            if($city) {
                $page->all_city = $city;
            }
            
            if($country) {
                $page->all_country = $country;
            }

            if($province) {
                $page->all_province = $province;
            }

            if($state) {
                $page->all_state = $state;
            }

            if(
                isset($_POST['patient_id']) && isset($_POST['sex']) && 
                isset($_POST['age']) && isset($_POST['country']) && 
                isset($_POST['province']) && isset($_POST['city']) && 
                isset($_POST['state'])
                ) {
    
                $id = $_POST['patient_id'];
                $sex = $_POST['sex'];
                $age = $_POST['age'];
                $country = $_POST['country'];
                $province = $_POST['province'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $infection_case = $_POST['infection_case'];
                $sympton_onset_date = $_POST['sympton_onset_date'];
                $infected_by = $_POST['infected_by'];
                $confirm_date = $_POST['confirm_date'];
                $released_date = $_POST['released_date'];
                $deceased_date = $_POST['deceased_date'];
    
                $q_patient = new QueryPatient;
                $q_res = $q_patient->update_patient($id, $sex, $age, $country, $province, $city, $infection_case, $sympton_onset_date, $state, $infected_by, $confirm_date,  $released_date, $deceased_date);
    
                if($q_res) {
                    header('location: ./admin?page=patient');
                }
                else {
                    $page->error = $q_patient->get_error();
                }
            }

            if($result)  {
                $page->patient_data = $result;
            }
            else {
                $page->error = $q_patient->get_error();
            }
        }

        $page->render();
    }
}