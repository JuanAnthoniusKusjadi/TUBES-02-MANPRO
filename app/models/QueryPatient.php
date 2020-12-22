<?php

require_once MODEL_PATH . 'Patient.php';
class QueryPatient extends Model
{
    protected $db;
    protected $error = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function get_error() 
    {
        return $this->error;
    }

    public function get_count_all_patient() 
    {
        $query = '
            SELECT 
                COUNT(`patient_id`) as `count`
            FROM `patient`
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        
        $result = $queryResult[0]['count'];

        return $result;
    }

    public function get_all_patient($start = 0, $end = 10)
    {
        $query = '
            SELECT 
                `patient`.`patient_id`,
                `patient`.`sex`,
                `patient`.`age`,
                `country`.`country`,
                `province`.`province`,
                `city`.`city`,
                `state`.`state`,
                `patientinfected`.`infected_by`,
                `patientcase`.`infection_case`,
                `patientcase`.`sympton_onset_date`,
                `patientcase`.`confirmed_date`,
                `patientcase`.`released_date`,
                `patientcase`.`deceased_date`
            FROM `patient` 
                INNER JOIN `patientcase` 
                    ON `patient`.`patient_id` = `patientcase`.`patient_id` 
                INNER JOIN `patientinfected` 
                    ON `patient`.`patient_id` = `patientinfected`.`patient_id` 
                INNER JOIN `province` 
                    ON `patient`.`province` = `province`.`idProvince` 
                INNER JOIN `state` 
                    ON `patient`.`state` = `state`.`idState` 
                INNER JOIN `city` 
                    ON `patient`.`city` = `city`.`idCity` 
                INNER JOIN `country` 
                    ON `patient`.`country` = `country`.`idCountry`
            LIMIT '. $start .','. $end .'
        ';

        $queryResult = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($queryResult as $key => $value) {
            $result[] = new Patient(
                $value['patient_id'], 
                $value['sex'], 
                $value['age'], 
                $value['country'], 
                $value['province'], 
                $value['city'], 
                $value['infection_case'], 
                $value['infected_by'], 
                $value['sympton_onset_date'], 
                $value['confirmed_date'], 
                $value['released_date'], 
                $value['deceased_date'],
                $value['state']
            );
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
}