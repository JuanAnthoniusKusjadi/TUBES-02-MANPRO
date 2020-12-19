<?php

require_once MODEL_PATH . 'User.php';
require_once MODEL_PATH . 'QueryUser.php';

class Auth extends controller
{   
    public function page_login()
    {
        $auth = $this::auth_helper();
        $user = $auth->get_auth();

        if(!$user) {
            $page = $this::create_page('login', 'index');

            if (isset($_POST['username']) && isset($_POST['password'])) {
                $auth = $this::auth_helper();
                $isAuthenticated = $auth->authenticate($_POST['username'], $_POST['password']);
                if ($isAuthenticated) {
                    $auth->setAuth($isAuthenticated['id'], $isAuthenticated['username'], $isAuthenticated['name']);
                    $this->redirect('admin');
                } else {
                    $page->error = $auth->get_error();
                }
            }

            $page->render();
        }
        else {
            $this->redirect('admin');
        }
    }

    public function page_logout()
    {
        $this::auth_helper()->logout();
        $this->redirect();
    }
}
