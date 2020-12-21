<?php

class AuthHelper
{
    protected $error = null;

    public function logout()
    {
        $this->remove_auth();
    }

    public function get_error()
    {
        return $this->error;
    }

    public function get_auth()
    {
        if (isset($_SESSION['login_session'])) {
            return $_SESSION['login_session'];
        }

        return false;
    }

    private function remove_auth()
    {
        unset($_SESSION['login_session']);
        session_destroy();
    }

    public function setAuth($id, $username, $name)
    {
        $_SESSION['login_session'] = [
            'username' => $username,
            'id' => $id,
            'name' => $name
        ];
    }

    public function authenticate($username, $password)
    {
        if (isset($username) && isset($password)) {
            $result = [];

            $q_user = new QueryUser;
            $res = $q_user->read_user($username, $password);

            if ($res) {
                echo var_dump($res);
                $result['id'] = $res->get_id();
                $result['username'] = $res->get_username();
                $result['name'] = $res->get_name();
                
                //! TEST PURPOSE ONLY, AUTO SET AUTH
                // $this->setAuth($result['username'], $result['id'], $result['tipe']);

                return $result;
            } else {
                $this->error = $q_user->get_error();
                return false;
            }

            $this->error = 'user or password missing arguments';
            return false;
        }
    }
}
