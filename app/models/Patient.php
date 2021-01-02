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
    protected $onsetDate;
    protected $confirmedDate;
    protected $releasedDate;
    protected $deceasedDate;
    protected $state;

    public function __construct($id, $sex, $age, $country, $province, $city, $infectionCase, $infectedBy, $onsetDate, $confirmedDate, $releasedDate, $deceasedDate, $state){
        $this->id = $id;
        $this->sex = $sex;
        $this->age = $age;
        $this->country = $country;
        $this->province = $province;
        $this->city = $city;
        $this->infectionCase = $infectionCase;
        $this->infectedBy = $infectedBy;
        $this->onsetDate = $onsetDate;
        $this->confirmedDate = $confirmedDate;
        $this->releasedDate = $releasedDate;
        $this->deceasedDate = $deceasedDate;
        $this->state = $state;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_sex(){
        return $this->sex;
    }

    public function get_age(){
        return $this->age;
    }

    public function get_country(){
        return $this->country;
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

    public function get_onset_date(){
        return $this->onsetDate;
    }

    public function get_confirmed_date(){
        return $this->confirmedDate;
    }

    public function get_released_date(){
        return $this->releasedDate;
    }

    public function get_deceased_date(){
        return $this->deceasedDate;
    }

    public function get_state(){
        return $this->state;
    }
}