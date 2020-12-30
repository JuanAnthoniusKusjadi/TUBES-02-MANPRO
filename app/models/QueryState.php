<?php

class QueryState extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_state(){
        $query = '
            SELECT 
                idState, state
            FROM 
                `state` 
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return $queryResult;
    }

    public function get_error() {
        return $this->error;
    }
}