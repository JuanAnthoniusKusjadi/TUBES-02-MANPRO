<?php

require MODEL_PATH . 'QueryUser.php';
require MODEL_PATH . 'QueryPatient.php';

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

        // if(isset($_POST['patient_id']) && isset($_POST['sex']) && isset($_POST['age']) && $_POST['country']) && isset($_POST['province']) && isset($_POST['city']) && isset($_POST['state'])) {
        //     $name = $_POST['name'];
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];

        //     if (!empty($name) && !empty($username) && !empty($password)) {
        //         $q_user = new QueryUser;
        //         $q_user->create_user($name, $username, $password);
        //         if (!$q_user) {
        //             return $q_user->get_error();
        //         }
        //         return 'berhasil';
        //     } 
        // }
        // else {
        //     return 'missing params';
        // }

        $page->render();
    }
}