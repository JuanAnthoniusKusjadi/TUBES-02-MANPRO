<?php

require MODEL_PATH . 'QueryUser.php';

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
            default:
                $this->page_user();
                break;
        }
    }

    public function page_user()
    {
        $page = $this::create_page('admin', 'user');

        $q_user = new QueryUser;
        $all_user = $q_user->get_all_user();

        $page->all_user = $all_user;

        $page->render();
    }
}