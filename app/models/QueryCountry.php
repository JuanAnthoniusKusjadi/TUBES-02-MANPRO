<?php

class QueryCountry extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_country(){
        $query = '
            SELECT 
                idCountry, country
            FROM 
                `country` 
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return $queryResult;
    }

    public function get_error() {
        return $this->error;
    }
}