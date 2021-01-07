<?php

class QueryHome extends Model {
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getCountConfirmedNational()
    {
        $query = '
            SELECT 
                COUNT(`patient_id`)
            FROM 
                `patient`
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        $result = $queryResult[0]["COUNT(`patient_id`)"];

        return $result;
    }

    public function getCountIsolatedNational(){
        $query = '
            SELECT 
                COUNT(`state`)
            FROM 
                `patient`
            WHERE
                `state` = 3
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        $result = $queryResult[0]["COUNT(`state`)"];

        return $result;
    }

    public function getCountReleasedNational(){
        $query = '
            SELECT 
                COUNT(`state`)
            FROM 
                `patient`
            WHERE
                `state` = 2
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        $result = $queryResult[0]["COUNT(`state`)"];

        return $result;
    }

    public function getCountDeceasedNational(){
        $query = '
            SELECT 
                COUNT(`state`)
            FROM 
                `patient`
            WHERE
                `state` = 1
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        $result = $queryResult[0]["COUNT(`state`)"];

        return $result;
    }

    public function getCountByProvince(){
        $query = '
            SELECT 
                province.province, 
                COUNT(province.idProvince) as `Total`, 
                SUM(CASE WHEN patient.state=1 THEN 1 ELSE 0 END) as `Meninggal`,
                SUM(CASE WHEN patient.state=2 THEN 1 ELSE 0 END) as `Sembuh`
            FROM 
                `patient` JOIN `province` 
            ON 
                patient.province = province.idProvince 
            GROUP BY 
                province.idProvince 
            ORDER BY
            	COUNT(province.idProvince) DESC
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        $result = $queryResult;

        return $result;
    }

    public function getDailyChangeReleased($date)
    {
        $date = $this->db->escapeString($date);
        $query = '
            SELECT 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id = patientcase.patient_id
            WHERE 
                patientcase.released_date = ' . $date . ' AND patient.state = 1
        ';
        $queryResult = $this->db->executeSelectQuery($query);
        if (!$queryResult) {
            $this->error = $this->db->get_error();
            echo $this->error;
            return false;
        }
        $result = $queryResult[0]['COUNT(patient.patient_id)'];
        return $result;
    }

    public function getDailyChangeTotalConfirmed($date)
    {
        $date = $this->db->escapeString($date);
        $query = '
            SELECT 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id = patientcase.patient_id
            WHERE 
                patientcase.confirmed_date = ' . $date . ' AND patient.state = 3
        ';
        $queryResult = $this->db->executeSelectQuery($query);
        if (!$queryResult) {
            $this->error = $this->db->get_error();
            echo $this->error;
            return false;
        }
        $result = $queryResult[0]['COUNT(patient.patient_id)'];
        return $result;
    }

    public function getDailyChangeTotalIsolated($date)
    {
        $date = $this->db->escapeString($date);
        $query = '
            SELECT 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id = patientcase.patient_id
            WHERE 
                patientcase.confirmed_date = ' . $date . ' AND patient.state = 3
        ';
        $queryResult = $this->db->executeSelectQuery($query);
        if (!$queryResult) {
            $this->error = $this->db->get_error();
            echo $this->error;
            return false;
        }
        $result = $queryResult[0]['COUNT(patient.patient_id)'];
        return $result;
    }
    

    public function getDailyChangeDeceased($date)
    {
        $date = $this->db->escapeString($date);
        $query = '
            SELECT 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id = patientcase.patient_id
            WHERE 
                patientcase.deceased_date = ' . $date . ' AND patient.state = 2
        ';
        $queryResult = $this->db->executeSelectQuery($query);
        if (!$queryResult) {
            $this->error = $this->db->get_error();
            echo $this->error;
            return false;
        }
        $result = $queryResult[0]['COUNT(patient.patient_id)'];
        return $result;
    }

    public function get_error() {
        return $this->error;
    }

}