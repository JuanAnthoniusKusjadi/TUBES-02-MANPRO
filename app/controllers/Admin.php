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
        
        $dataPerPage = 10;
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
}