<?php

use JetBrains\PhpStorm\Deprecated;

include_once __DIR__ . '/DB.php';

class Department
{

  static public function all()
  {
    $conn = DB::getConn();
    $sql = "SELECT `id`, `name`, `email` FROM `departments`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }
}
