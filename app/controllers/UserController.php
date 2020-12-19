<?php

require MODEL_PATH . 'QueryUser.php';

class UserController extends Controller {
    public function add() {
        echo $this->add_user();
    }

    private function add_user()
    {
        if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (!empty($name) && !empty($username) && !empty($password)) {
                $q_user = new QueryUser;
                $q_user->create_user($name, $username, $password);
                if (!$q_user) {
                    return $q_user->get_error();
                }
                return 'berhasil';
            } 
        }
        else {
            return 'missing params';
        }
    }
}