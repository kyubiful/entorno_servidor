<?php
  class Connect{
    public static function connection(){
      $cnx = new mysqli('localhost','root','root','empresa');
      return $cnx;
    }
  }
?>