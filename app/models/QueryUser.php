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
                id, name, username, password
            FROM 
                User
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = new User($value['id'], $value['name'], $value['username']);
        }

        return $result;
    }

    public function create_user($name, $username, $password)
    {
        $name = $this->db->escapeString($name);
        $username = $this->db->escapeString($username);
        $password = $this->db->escapeString($password);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "
            INSERT INTO User (
                name, username, password
            )
            VALUES (
                '$name', '$username', '$hashed_password'
            )
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function delete_user($id)
    {
        $id = $this->db->escapeString($id);

        $query = "
            DELETE FROM User
            WHERE id = '$id'
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        echo var_dump($query_result);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function update_user($id, $username = null, $name = null, $password = null)
    {
        $id = $this->db->escapeString($id);
        $name = $this->db->escapeString($name);
        $username = $this->db->escapeString($username);
        $password = $this->db->escapeString($password);

        $query = "
            UPDATE User
            SET
        ";
        if ($username != null) {
            $query .= " username = '$username',";
        }
        if ($name != null) {
            $query .= " name = '$name',";
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
                id, name, username, password
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
                    return new User($query_result[0]['id'], $query_result[0]['username'], $query_result[0]['name']);
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