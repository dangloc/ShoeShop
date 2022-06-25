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
    $this 
  }

  public function select($query)
  {

  }
}