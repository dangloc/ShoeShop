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
    $_SESSION[$KEY]
  }
}
