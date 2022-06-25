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
      $this-> error = "connection fail".$this->link->connect_error;
      return false;
    }
  }


  // select or read data
  public function select($query)
  {
    $result = $this->link->select($query) or die($this->link->error.__LINE__);
    if($result->num_rows > 0)
    {
      return $result;
    }
    else{
      return false;
    }
  }
}