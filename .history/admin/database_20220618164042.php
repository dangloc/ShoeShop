<?php
class Database{
  public $host = DB_HOST;
  public $user = DB_USER;
  public $pass = DB_PASS;
  public $dbname = DB_NAME;

  public $link;
  public $error;

  public function __construct(){
    $this->connectDB();
  }

  public function connectDB(){
    $this->link= new mysql($this->host, $this->user, $this->pass, $this->dbname);
    if(!$this->link)
    {
      
    }
  }

  public function select($query)
  {

  }
}