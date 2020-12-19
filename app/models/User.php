<?php

class User extends Model
{
    protected $id;
    protected $nama;
    protected $username;
    protected $password;

    public function __construct($id, $nama, $username){
        $this->id = $id;
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
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

    public function get_password(){
        return $this->password;
    }
}