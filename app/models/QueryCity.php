<?php

class QueryCity extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_city(){
        $query = '
            SELECT 
                idCity, city 
            FROM 
                `city` 
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return $queryResult;
    }

    public function get_error() {
        return $this->error;
    }
}