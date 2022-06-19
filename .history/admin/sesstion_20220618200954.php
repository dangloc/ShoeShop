<?php

// session class 

class Session{
  public static function init(){
    if(version_compare(phpversion(), '5.4.0', '<')){
      if( session_id() == '' ){
        session_start();
      }
    }else{
      if(sesstion_status() == PHP_SESSION_NONE)
      {
        session_start();
      }
    }
  }

  public static function set($key, $value) {
    $_SESSION[$KEY] = $val;
  }

  public static function get($key){
    if(isset($_SESSION[$key])){
      return $_SESSION[$key];
    }else {
      return false;
    }
  }

  public static function checkSession(){
    self:init();
    if(self)
  }
}
