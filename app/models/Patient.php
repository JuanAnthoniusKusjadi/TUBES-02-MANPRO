<?php

class Patient extends Model
{
    protected $id;
    protected $sex;
    protected $age;
    protected $country;
    protected $province;
    protected $city;
    protected $infectionCase;
    protected $infectedBy;
    protected $contact;
    protected $onsetDate;
    protected $confirmedDate;
    protected $releaseDate;
    protected $deceasedDate;
    protected $state;

    public function __construct($id, $sex, $age, $country, $province, $city, $infectionCase, $infectedBy, $contact, $onsetDate, $confirmedDate, $releaseDate, $deceasedDate, $state){
        $this->id = $id;
        $this->gender = $sex;
        $this->age = $age;
        $this->nationality = $country;
        $this->province = $province;
        $this->city = $city;
        $this->infectionCase = $infectionCase;
        $this->infectedBy = $infectedBy;
        $this->contact = $contact;
        $this->onsetDate = $onsetDate;
        $this->confirmedDate = $confirmedDate;
        $this->releaseDate = $releaseDate;
        $this->deceasedDate = $deceasedDate;
        $this->state = $state;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_gender(){
        return $this->gender;
    }

    public function get_age(){
        return $this->age;
    }

    public function get_nationality(){
        return $this->nationality;
    }

    public function get_province(){
        return $this->province;
    }

    public function get_city(){
        return $this->city;
    }

    public function get_infection_case(){
        return $this->infectionCase;
    }

    public function get_infected_by(){
        return $this->infectedBy;
    }

    public function get_contact(){
        return $this->contact;
    }

    public function get_onset_date(){
        return $this->onsetDate;
    }

    public function get_confirmed_date(){
        return $this->confirmedDate;
    }

    public function get_release_date(){
        return $this->releaseDate;
    }

    public function get_deceased_date(){
        return $this->deceaseDate;
    }

    public function get_state(){
        return $this->state;
    }
}