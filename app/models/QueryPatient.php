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
                id, gender, age, nationality, province, city, infectionCase, infectedBy, contact, onsetDate, confirmedDate, releaseDate, deceasedDate, state
            FROM 
                Patient
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
                id, gender, age, nationality, province, city, infectionCase, infectedBy, contact, onsetDate, confirmedDate, releaseDate, deceasedDate, state
            FROM
                Patient
            WHERE
                id = '. $id .'
        ';

        $queryResult = $this->db->executeSelectQuery($query);

        return new Patient($queryResult[0]['id'], $queryResult[0]['gender'], $queryResult[0]['age'], $queryResult[0]['nationality'], $queryResult[0]['province'], $queryResult[0]['city'], $queryResult[0]['infectionCase'], $queryResult[0]['infectedBy'], $queryResult[0]['contact'], $queryResult[0]['onsetDate'], $queryResult[0]['confirmedDate'], $queryResult[0]['releaseDate'], $queryResult[0]['deceasedDate'], $queryResult[0]['state']);
    }

    public function create_patient($gender, $age, $nationality, $province, $city, $infectionCase, $infectedBy, $contact, $onsetDate, $confirmedDate, $releaseDate, $deceasedDate, $state)
    {
        $gender = $this->db->escapeString($gender);
        $age = $this->db->escapeString($age);
        $nationality = $this->db->escapeString($nationality);
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
            INSERT INTO Patient (
                gender, age, nationality, proovince, city, infectionCase, infectedBy, contact, onsetDate, confirmedDate, releaseDate, deceasedDate, state
            )
            VALUES (
                '$gender', '$age', '$nationality', '$province', '$city', '$infectionCase', '$infectedBy', '$contact', '$onsetDate', '$confirmedDate', '$releaseDate', '$deceasedDate', '$state'
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
        $user = $this->get_user_by_id($id);
        $id = $this->db->escapeString($id);

        $query = "
            DELETE FROM Patient
            WHERE id = '$id'
        ";

        $query_result = $this->db->executeNonSelectQuery($query);

        if (!$query_result) {
            $this->error = $this->db->get_error();
            return false;
        }

        $file_path = ROOT . 'public' . DS . 'uploads' . DS . $user->get_profile_path();

        if(file_exists($file_path)) {
            unlink($file_path);
        }

        return true;
    }

    public function read_patient($id, $gender, $age, $nationality, $province, $city, $infectionCase, $infectedBy, $contact, $onsetDate, $confirmedDate, $releaseDate, $deceasedDate, $state)
    {
        $id = $this->db->escapeString($id);
        $gender = $this->db->escapeString($gender);
        $age = $this->db->escapeString($age);
        $nationality = $this->db->escapeString($nationality);
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
            SELECT
            gender, age, nationality, proovince, city, infectionCase, infectedBy, contact, onsetDate, confirmedDate, releaseDate, deceasedDate, state
            FROM 
                Patient
            WHERE   
                id = '$id'
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