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
        $query = "
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
            WHERE
                `patient`.`patient_id` = '$id' 
        ";

        $queryResult = $this->db->executeSelectQuery($query);

        return new Patient(
            $queryResult[0]['patient_id'], 
            $queryResult[0]['sex'], 
            $queryResult[0]['age'], 
            $queryResult[0]['country'], 
            $queryResult[0]['province'], 
            $queryResult[0]['city'], 
            $queryResult[0]['infection_case'], 
            $queryResult[0]['infected_by'], 
            $queryResult[0]['sympton_onset_date'], 
            $queryResult[0]['confirmed_date'], 
            $queryResult[0]['released_date'], 
            $queryResult[0]['deceased_date'],
            $queryResult[0]['state']
        );
    }

    public function add_patient($id, $sex, $age, $country, $province, $city, $infectionCase = "etc", $onsetDate = null, $state, $infectedBy = null, $confirmedDate = null, $releaseDate = null, $deceasedDate = null)
    {
        $id = $this->db->escapeString($id);
        $sex = $this->db->escapeString($sex);
        $age = $this->db->escapeString($age);
        $country = $this->db->escapeString($country);
        $province = $this->db->escapeString($province);
        $city = $this->db->escapeString($city);
        $infectionCase = $this->db->escapeString($infectionCase);
        $infectedBy = $this->db->escapeString($infectedBy);
        $onsetDate = $this->db->escapeString($onsetDate);
        $confirmedDate = $this->db->escapeString($confirmedDate);
        $releaseDate = $this->db->escapeString($releaseDate);
        $deceasedDate = $this->db->escapeString($deceasedDate);
        $state = $this->db->escapeString($state);

        $queryPatient = "
            INSERT INTO 
                `patient` (
                    `patient_id`, `sex`, `age`, `country`, `province`, `city`, `state`
                )
            VALUES (
                '$id', '$sex', '$age', '$country', '$province', '$city', '$state'
            )
        ";
        $query_result = $this->db->executeNonSelectQuery($queryPatient);
        
        if($query_result) {
            $queryPatientInfected = "
                INSERT INTO 
                    `patientinfected` (
                        `patient_id`, `infected_by`
                    )
                VALUES (
                    '$id', '$infectedBy'
                )
            ";
            $query_result = $this->db->executeNonSelectQuery($queryPatientInfected);
        
            if($query_result) {
                $queryPatientCase = "
                    INSERT INTO 
                        `patientcase` (
                            `patient_id`, `infection_case`, `sympton_onset_date`, `confirmed_date`, `released_date`, `deceased_date`
                        )
                    VALUES (
                        '$id', '$infectionCase', '$onsetDate', '$confirmedDate', '$releaseDate', '$deceasedDate'
                    )
                ";
                $query_result = $this->db->executeNonSelectQuery($queryPatientCase);
            }
        }

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return $query_result;
    }

    public function update_patient($id, $sex, $age, $country, $province, $city, $infectionCase = "etc", $onsetDate = null, $state, $infectedBy = null, $confirmedDate = null, $releaseDate = null, $deceasedDate = null)
    {
        $id = $this->db->escapeString($id);
        $sex = $this->db->escapeString($sex);
        $age = $this->db->escapeString($age);
        $country = $this->db->escapeString($country);
        $province = $this->db->escapeString($province);
        $city = $this->db->escapeString($city);
        $infectionCase = $this->db->escapeString($infectionCase);
        $infectedBy = $this->db->escapeString($infectedBy);
        $onsetDate = $this->db->escapeString($onsetDate);
        $confirmedDate = $this->db->escapeString($confirmedDate);
        $releaseDate = $this->db->escapeString($releaseDate);
        $deceasedDate = $this->db->escapeString($deceasedDate);
        $state = $this->db->escapeString($state);

        $queryPatient = "
            UPDATE 
                `patient`
            SET
                `sex` = ". $sex .", 
                `age` = '". $age ."', 
                `country` = ". $country .", 
                `province` = ". $province .", 
                `city` = ". $city .", 
                `state` = ". $state ."
            WHERE 
                `patient_id` = ". $id ."
        ";
        $query_result = $this->db->executeNonSelectQuery($queryPatient);
        
        if($query_result) {
            $queryPatientInfected = "
                UPDATE 
                    `patientcase`
                SET
                    `infection_case` = '". $infectionCase ."', 
                    `sympton_onset_date` = '". $onsetDate ."', 
                    `confirmed_date` = '". $confirmedDate ."', 
                    `released_date` = '". $releaseDate ."', 
                    `deceased_date` = '". $deceasedDate ."'
                WHERE 
                    `patient_id` = ". $id ."
            ";
            $query_result = $this->db->executeNonSelectQuery($queryPatientInfected);

            if($query_result) {
                $queryPatientCase = "
                    UPDATE 
                        `patientinfected`
                    SET
                        `infected_by` = '". $infectedBy ."'
                    WHERE 
                        `patient_id` = ". $id ."
                ";
                $query_result = $this->db->executeNonSelectQuery($queryPatientCase);
            }
        }

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return $query_result;
    }

    public function delete_patient($id)
    {
        $id = $this->db->escapeString($id);

        $query = "
            DELETE 
                FROM `patientcase` 
            WHERE 
                `patient_id` = ". $id ."
        ";
        $query_result = $this->db->executeNonSelectQuery($query);

        if($query_result) {
            $query = "
                DELETE 
                    FROM `patientinfected` 
                WHERE 
                    `patient_id` = ". $id ."
            ";
            $query_result = $this->db->executeNonSelectQuery($query);

            if($query_result) {
                $query = "
                    DELETE 
                        FROM `patient` 
                    WHERE 
                        `patient_id` = ". $id ."
                ";
                $query_result = $this->db->executeNonSelectQuery($query);
            }
        }

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }
}