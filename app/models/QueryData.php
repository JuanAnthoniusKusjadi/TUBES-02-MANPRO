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

    public function getCountReleaseDaily()
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
                "ReleaseDaily" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountDeceaseDaily()
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
                "deceaseDaily" => $value['COUNT(patient.patient_id)']
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

    public function getCountGenderDecease()
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
                "deceaseGender" => $value['COUNT(patient.patient_id)']
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

    public function getCountDeceaseAges()
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
                "deceaseAge" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountReleaseAges()
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
                "releaseAge" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountReleaseProvince()
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
                "releaseProvince" => $value['COUNT(patient.patient_id)']
            ];
        }
        return $result;
    }

    public function getCountDeceaseProvince()
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
                "deceaseProvince" => $value['COUNT(patient.patient_id)']
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
        echo $result;
        return $result;
    }

    public function get_error() {
        return $this->error;
    }

}