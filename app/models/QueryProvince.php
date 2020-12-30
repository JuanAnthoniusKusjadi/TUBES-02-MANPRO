<?php

class QueryProvince extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_province(){
        $query = '
            SELECT 
                idProvince, province
            FROM 
                `province` 
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return $queryResult;
    }

    public function get_error() {
        return $this->error;
    }
}