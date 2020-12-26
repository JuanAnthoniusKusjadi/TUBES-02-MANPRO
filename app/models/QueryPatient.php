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
            $queryResult[0]['state'],
            $queryResult[0]['infection_case'], 
            $queryResult[0]['infected_by'], 
            $queryResult[0]['sympton_onset_date'], 
            $queryResult[0]['confirmed_date'], 
            $queryResult[0]['released_date'], 
            $queryResult[0]['deceased_Date']);
    }

    public function create_patient($id, $sex, $age, $country, $province, $city, $infectionCase = "etc", $infectedBy = null, $onsetDate = null, $confirmedDate = null, $releaseDate = null, $deceasedDate = null, $state)
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
            INSERT INTO patient (
                patient_id, sex, age, country, province, city, state
            )
            VALUES (
                '$id', '$sex', '$age', '$country', '$province', '$city', '$state'
            )
        ";
        $query_result = $this->db->executeNonSelectQuery($queryPatient);
        
        $queryPatientInfected = "
            INSERT INTO patientinfected (
                patient_id, infected_by
            )
            VALUES (
                '$id', '$infectedBy'
            )
        ";
        $query_result = $this->db->executeNonSelectQuery($queryPatientInfected);
        
        $queryPatientCase = "
            INSERT INTO patientcase (
                patient_id, infection_case, sympton_onset_date, confirmed_date, released_date, deceased_date
            )
            VALUES (
                '$id', '$infectionCase', '$onsetDate', '$confirmedDate', '$releaseDate', '$deceasedDate'
            )
        ";
        $query_result = $this->db->executeNonSelectQuery($queryPatientCase
    );

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        return true;
    }

    //Format Date: YYYY/MM/DD
    public function update_patientState($id, $idState, $date)
    {
        $id = $this->db->escapeString($id);
        $idState = $this->db->escapeString($idState);
        $date = $this->db->escapeString($date);

        $state = "released_date";
        if($idState == "2"){
            $state = "deceased_date"
        } else if($idState == "3"){
            $state = "confirmed_date"
        }

        $queryPatient = "
            UPDATE 
                patient
            SET 
                state = '$idState'
            WHERE 
                patient_id = '$id'
        ";

        $query_result = $this->db->executeNonSelectQuery($queryPatient);

        $queryDate = "
            UPDATE 
                patientcase
            SET 
                '$state' = '$date'
            WHERE 
                patient_id = '$id'
        "

        $query_result = $this->db->executeNonSelectQuery($queryDate);

        return true;
    }
}