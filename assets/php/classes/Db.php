<?php

  class Db 
  {
    private static $_db = null;

    public static function getInstanse() {
      if(self::$_db == null)
        self::$_db = new PDO('mysql:host=localhost;dbname=aist-royal;port=3306', 'root', 'root');

        return self::$_db;
    }

    private function __construct() {}

  }
  