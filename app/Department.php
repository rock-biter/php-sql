<?php

use JetBrains\PhpStorm\Deprecated;

include_once __DIR__ . '/DB.php';

class Department
{
  public $id;
  public $name;
  public $address;
  public $phone;
  public $email;
  public $website;
  public $head_of_department;

  function __construct($id, $name, $address, $phone, $email, $website, $head_of_department)
  {
    $this->id = $id;
    $this->name = $name;
    $this->address = $address;
    $this->phone = $phone;
    $this->email = $email;
    $this->website = $website;
    $this->head_of_department = $head_of_department;
  }

  static public function create(array $params)
  {
    return new Department(
      $params['id'],
      $params['name'],
      $params['address'],
      $params['phone'],
      $params['email'],
      $params['website'],
      $params['head_of_department']
    );
  }

  static public function all()
  {
    $conn = DB::getConn();
    $sql = "SELECT * FROM `departments`";
    $result = $conn->query($sql);
    $conn->close();

    return Department::resultToArray($result);
  }

  static public function find($id)
  {
    $conn = DB::getConn();
    $sql = "SELECT * FROM `departments` WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();

    return Department::resultToArray($result);
  }

  static public function resultToArray($result)
  {
    if ($result && $result->num_rows > 0) {
      $items = [];
      while ($row = $result->fetch_assoc()) {
        $department = Department::create($row);
        $items[] = $department;
      }
      return $items;
    } else {
      return [];
    }
  }
}
