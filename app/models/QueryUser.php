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

    public function get_error() {
        return $this->error;
    }
}