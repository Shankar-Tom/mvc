<?php
class User extends DB{
    protected $connect;
   
    public function __construct()
    {
       $this->table='users';
       parent::__construct();
       
    }

    public function getAllUser()
    {
        $sql="select * from {$this->table}";
    }
}