<?php

require_once MODEL_PATH . 'Patient.php';
class QueryUser extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_all_patient(){
        $query = '
            SELECT 
                patient_id, sex, age, country, province, city, state
            FROM 
                patient
        ';'
            SELECT
                infected_by
            FROM
                infectedBy
        ';'
            SELECT
                infection_case, sympton_onset_date, confirmed_date, released_date, deceased_date
            FROM
                infectionCase
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = new Patient($value['id'], $value['gender'], $value['age'], $value['nationality'], $value['province'], $value['city'], $value['infectionCase'], $value['infectedBy'], $value['contact'], $value['onsetDate'], $value['confirmedDate'], $value['releaseDate'], $value['deceasedDate'], $value['state']);
        }

        return $result;
    }

    public function get_patient_by_id($id) {
        $query = '
            SELECT
                patient_id, sex, age, country, province, city, infectionCase, infectedBy, contact, onsetDate, confirmedDate, releaseDate, deceasedDate, state
            FROM
                patient
            WHERE
                patient_id = '. $id .'
        ';'
            SELECT
                infected_by
            FROM
                infectedBy
            WHERE
                patient_id = '. $id .'
        ';'
            SELECT
                infection_case, sympton_onset_date, confirmed_date, released_date, deceased_date
            FROM
                infectionCase
            WHERE
                patient_id = '. $id .'
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return new Patient($queryResult[0]['id'], $queryResult[0]['sex'], $queryResult[0]['age'], $queryResult[0]['country'], $queryResult[0]['province'], $queryResult[0]['city'], $queryResult[0]['infectionCase'], $queryResult[0]['infectedBy'], $queryResult[0]['contact'], $queryResult[0]['onsetDate'], $queryResult[0]['confirmedDate'], $queryResult[0]['releaseDate'], $queryResult[0]['deceasedDate'], $queryResult[0]['state']);
    }

    public function create_patient($sex, $age, $country, $province, $city, $infectionCase, $infectedBy, $contact, $onsetDate, $confirmedDate, $releaseDate, $deceasedDate, $state)
    {
        $sex = $this->db->escapeString($sex);
        $age = $this->db->escapeString($age);
        $country = $this->db->escapeString($country);
        $province = $this->db->escapeString($province);
        $city = $this->db->escapeString($city);
        $infectionCase = $this->db->escapeString($infectionCase);
        $infectedBy = $this->db->escapeString($infectedBy);
        $contact = $this->db->escapeString($contact);
        $onsetDate = $this->db->escapeString($onsetDate);
        $confirmedDate = $this->db->escapeString($confirmedDate);
        $releaseDate = $this->db->escapeString($releaseDate);
        $deceasedDate = $this->db->escapeString($deceasedDate);
        $state = $this->db->escapeString($state);

        $query = "
            INSERT INTO patient (
                sex, age, country, province, city, state
            )
            VALUES (
                '$sex', '$age', '$country', '$province', '$city', '$state'
            )
        ";"
            INSERT INTO patientinfected (
                infected_by
            )
            VALUES (
                '$infectedBy'
            )
        ";"
            INSERT INTO patientcase (
                infection_case, sympton_onset_date, confirmed_date, released_date, deceased_date
            )
            VALUES (
                '$infectionCase', '$onsetDate', '$confirmedDate', '$releaseDate', '$deceasedDate'
            )
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function delete_patient($id)
    {
        $id = $this->db->escapeString($id);

        $query = "
            DELETE FROM patient
            WHERE patient_id = '$id'
        ";"
            DELETE FROM patientinfected
            WHERE patient_id = '$id'
        ";"
            DELETE FROM patientcase
            WHERE patient_id = '$id'
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    public function read_patient($id)
    {
        $id = $this->db->escapeString($id);

        $query = "
            SELECT
                sex, age, country, province, city, state
            FROM 
                patient
            WHERE   
                patient_id = '$id'
        ";"
            SELECT
                infected_by
            FROM 
                patientinfected
            WHERE   
                patient_id = '$id'
        ";"
            SELECT
                infection_case, sympton_onset_date, confirmed_date, released_date, deceased_date
            FROM 
                patientcase
            WHERE   
                patient_id = '$id'
        ";

        $query_result = $this->db->executeSelectQuery($query);

        if ($this->db->get_error() != null) {
            $this->error = $this->db->get_error();
            return false;
        }
    }

    public function update_patient()
    {
        
    }

    public function get_error() {
        return $this->error;
    }
}