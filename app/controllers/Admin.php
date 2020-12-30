<?php

require MODEL_PATH . 'QueryUser.php';
require MODEL_PATH . 'QueryPatient.php';
require MODEL_PATH . 'QueryCity.php';

class Admin extends Controller {
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
            case 'addPatient':
                $this->page_addPatient();
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

    public function page_patient()
    {
        $page = $this::create_page('admin', 'patient');
        $q_patient = new QueryPatient;

        $pageNumber = 1;
        if(isset($_GET['data'])) {
            $pageNumber = $_GET['data'];
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
        $all_city = $q_city->get_all_city();

        if($all_city) {
            $page->all_city = $all_city;
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
}