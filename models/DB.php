<?php

class DB{
    protected $connection;
    protected $table,$result;
    public $sql;
    public function __construct()
    {
        $this->connection=mysqli_connect('localhost','root','','crud');
        
    }
    public function select($fields="*")
    {
        $this->sql.="select $fields from {$this->table}"; 
        return $this;
    }
    public function table($tablename)
    {
        $this->table=$tablename;
        return $this;
    }

    public function getall()
    {
       
        $this->result=mysqli_fetch_all(mysqli_query($this->connection,$this->sql));
        return $this->result;
    }
}