<?php

class User extends Model
{
    protected $id;
    protected $nama;
    protected $username;

    public function __construct($Id, $Nama, $Username){
        $this->id = $id;
        $this->nama = $nama;
        $this->username = $username;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_nama(){
        return $this->nama;
    }

    public function get_username(){
        return $this->username;
    }
}