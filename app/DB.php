<?php

include_once __DIR__ . '/../helpers/conn_helper.php';

class DB
{

  static public function getConn()
  {
    return new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
  }
}
