<?php

require MODEL_PATH . 'QueryUser.php';

class UserController extends Controller {
    public function page_user()
    {
        if (!isset($_GET['page'])) {
            header('location: ./admin?page=user');
        }

        switch ($_GET['page']) {
            case 'addUser':
                $this->add();
                header('location: ./admin?page=user');
                break;
            case 'deleteUser':
                $this->delete();
                header('location: ./admin?page=user');
                break;
            case 'updateUser':
                $this->update();
                header('location: ./admin?page=user');
                break;
            default:
                $this->page_user();
                break;
        }
    }

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
                $res = $q_user->create_user($name, $username, $password);
                if (!$res) {
                    return $res->get_error();
                }
                return 'berhasil';
            } 
        }
        else {
            return 'missing params';
        }
    }

    public function delete(){
        $q_user = new QueryUser;
        $userCount = $q_user->count_user();
        if($userCount <= 1){
            echo 'There is only 1 or less user';
        }else{
            echo $this->delete_user();
        }
    }

    private function delete_user(){
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            if (!empty($id)) {
                $q_user = new QueryUser;
                $res = $q_user->delete_user($id);
                if (!$res) {
                    return $res->get_error();
                }
                return 'berhasil';
            } 
        }
        else {
            return 'missing params';
        }
    }

    public function update(){
        echo $this->update_user();
    }

    public function update_user(){
        if(isset($_GET['id']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (!empty($id) && !empty($name) && !empty($username)) {
                $q_user = new QueryUser;
                $res = $q_user->update_user($id, $name, $username, $password);
                if (!$res) {
                    return $res->get_error();
                }
                return 'berhasil';
            } 
        }
        else {
            return 'missing params';
        }
    }
}