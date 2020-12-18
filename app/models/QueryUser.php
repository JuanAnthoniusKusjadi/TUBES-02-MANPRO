<?php

require_once MODEL_PATH . 'User.php';
class QueryUser extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_user(){
        $query = '
            SELECT 
                id, nama, username, password
            FROM 
                User
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = new User($value['id'], $value['nama'], $value['username']);
        }

        return $result;
    }

    public function get_user_by_id($id) {
        $query = '
            SELECT
                id, nama, username, password
            FROM
                User
            WHERE
                id = '. $id .'
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return new User($queryResult[0]['id'], $queryResult[0]['nama'], $queryResult[0]['username']);
    }


    public function create_user($nama, $username)
    {
        $nama = $this->db->escapeString($nama);
        $username = $this->db->escapeString($username);
        $password = $this->db->escapeString($password);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "
            INSERT INTO User (
                nama, username, password
            )
            VALUES (
                '$nama', '$username', '$hashed_password'
            )
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function delete_user($id, $username)
    {
        $user = $this->get_user_by_id($id);
        $id = $this->db->escapeString($id);
        $username = $this->db->escapeString($username);

        $query = "
            DELETE FROM User
            WHERE id = '$id' AND username = '$username'
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        $file_path = ROOT . 'public' . DS . 'uploads' . DS . $user->get_profile_path();

        if(file_exists($file_path)) {
            unlink($file_path);
        }

        return true;
    }

    public function update_user($id, $username = null, $nama = null)
    {
        $id = $this->db->escapeString($id);
        $nama = $this->db->escapeString($nama);
        $username = $this->db->escapeString($username);
        $password = $this->db->escapeString($password);

        $query = "
            UPDATE User
            SET
        ";
        if ($username != null) {
            $query .= " username = '$username',";
        }
        if ($nama != null) {
            $query .= " nama = '$nama',";
        }
        if ($password != null) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query .= " password = '$hashed_password',";
        }
        $query = substr($query, 0, -1);
        $query .= " WHERE id = '$id'";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function read_user($username, $password)
    {
        $username = $this->db->escapeString($username);
        $password = $this->db->escapeString($password);

        $query = "
            SELECT
                id, username, password
            FROM 
                User
            WHERE   
                username = '$username'
        ";

        $query_result = $this->db->executeSelectQuery($query);

        if ($this->db->get_error() != null) {
            $this->error = $this->db->get_error();
            return false;
        } else {
            if (count($query_result) != 0) {
                if (password_verify($password, $query_result[0]['password'])) {
                    return new User($query_result[0]['id'], $query_result[0]['username'], $query_result[0]['tipe'], $query_result[0]['username'], $query_result[0]['last_login'], $query_result[0]['profile_location']);
                } else {
                    $this->error = 'user or password incorrect';
                    return false;
                }
            } else {
                $this->error = 'user or password incorrect';
                return false;
            }
        }
    }

    public function get_error() {
        return $this->error;
    }
}