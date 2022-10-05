<?php
include_once __DIR__ . '/DB.php';

class Department
{

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

  public function degrees()
  {
  }

  static public function all()
  {
    $conn = DB::getConn();
    $sql = "SELECT * FROM `departments`";
    $result = $conn->query($sql);
    $conn->close();
    $res = Department::resultToArray($result);
    // var_dump($res);
    return $res;
  }

  static public function resultToArray($result)
  {
    if ($result && $result->num_rows > 0) {
      $items = [];

      while ($row = $result->fetch_assoc()) {
        $el = new Department(
          $row['id'],
          $row['name'],
          $row['address'],
          $row['phone'],
          $row['email'],
          $row['website'],
          $row['head_of_department']
        );

        $items[] = $el;
      }

      return $items;
    } else {
      return [];
    }
  }
}
