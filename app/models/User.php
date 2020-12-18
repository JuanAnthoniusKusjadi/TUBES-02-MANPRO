<?php

class User extends Model
{
    protected $id;
    protected $name;
    protected $username;

    public function __construct($id, $name, $username){
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_username(){
        return $this->username;
    }
}