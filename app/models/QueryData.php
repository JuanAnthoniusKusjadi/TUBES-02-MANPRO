<?php

class QueryData extends Model {
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getCountInfectedDaily()
    {
        $query = '
            SELECT 
                patientcase.confirmed_date,
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id=patientcase.patient_id
                JOIN state 
                ON patient.state=state.idState
            WHERE 
                state.idState = 3
            GROUP BY 
                patientcase.confirmed_date
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "date" => $value['confirmed_date'],
                "infectedDaily" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountReleasedDaily()
    {
        $query = '
            SELECT 
                patientcase.confirmed_date,
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id=patientcase.patient_id
                JOIN state 
                ON patient.state=state.idState
            WHERE 
                state.idState = 1
            GROUP BY 
                patientcase.confirmed_date
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "date" => $value['confirmed_date'],
                "ReleasedDaily" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountDeceasedDaily()
    {
        $query = '
            SELECT 
                patientcase.confirmed_date,
                COUNT(patient.patient_id)
            FROM 
                patient JOIN patientcase
                ON patient.patient_id=patientcase.patient_id
                JOIN state 
                ON patient.state=state.idState
            WHERE 
                state.idState = 2
            GROUP BY 
                patientcase.confirmed_date
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "date" => $value['confirmed_date'],
                "deceasedDaily" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountGenderInfected()
    {
        $query = '
            SELECT 
                patient.sex,
                COUNT(patient.patient_id)
            FROM 
                patient JOIN state
                ON patient.state = state.idState
            WHERE 
                state.idState = 3
            GROUP BY 
                patient.sex
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "gender" => $value['sex'],
                "infectedGender" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountGenderDeceased()
    {
        $query = '
            SELECT 
                patient.sex,
                COUNT(patient.patient_id)
            FROM 
                patient JOIN state
                ON patient.state = state.idState
            WHERE 
                state.idState = 2
            GROUP BY 
                patient.sex
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "gender" => $value['sex'],
                "deceasedGender" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountInfectedAges()
    {
        $query = '
            SELECT 
                patient.age, 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN state
                ON patient.state = state.idState
            WHERE 
                state.idState = 3
            GROUP BY 
                patient.age
        
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "age" => $value['age'],
                "infectedAge" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountDeceasedAges()
    {
        $query = '
            SELECT 
                patient.age, 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN state
                ON patient.state = state.idState
            WHERE 
                state.idState = 2
            GROUP BY 
                patient.age
        
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "age" => $value['age'],
                "deceasedAge" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountReleasedAges()
    {
        $query = '
            SELECT 
                patient.age, 
                COUNT(patient.patient_id)
            FROM 
                patient JOIN state
                ON patient.state = state.idState
            WHERE 
                state.idState = 1
            GROUP BY 
                patient.age
        
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "age" => $value['age'],
                "releasedAge" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountReleasedProvince()
    {
        $query = '
            SELECT 
                province.province, 
                COUNT(patient.patient_id) 
            FROM 
                patient JOIN state
                ON patient.state = state.idState
                JOIN province ON province.idProvince = patient.province
            WHERE 
                state.idState = 1
            GROUP BY 
                province.province
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "province" => $value['province'],
                "releasedProvince" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountDeceasedProvince()
    {
        $query = '
            SELECT 
                province.province, 
                COUNT(patient.patient_id) 
            FROM 
                patient JOIN state
                ON patient.state = state.idState
                JOIN province 
                ON province.idProvince = patient.province
            WHERE 
                state.idState = 2
            GROUP BY 
                province.province
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "province" => $value['province'],
                "deceasedProvince" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountInfectedProvince()
    {
        $query = '
            SELECT 
                province.province, 
                COUNT(patient.patient_id) 
            FROM 
                patient JOIN state
                ON patient.state = state.idState
                JOIN province 
                ON province.idProvince = patient.province
            WHERE 
                state.idState = 3
            GROUP BY 
                province.province
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = [
                "province" => $value['province'],
                "infectedProvince" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountConfirmedTotal()
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

    public function getCountIsolatedTotal(){
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

    public function getCountReleasedTotal(){
        $query = '
            SELECT 
                COUNT(patient_id)
            FROM 
                patient
            WHERE
                state = 1
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = $queryResult[0]['COUNT(patient_id)'];
        return $result;
    }

    public function getCountDeceasedTotal(){
        $query = '
            SELECT 
                COUNT(patient_id)
            FROM 
                patient
            WHERE
                state = 2
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = $queryResult[0]['COUNT(patient_id)'];
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