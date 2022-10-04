<?php

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university");


$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

$stm = $conn->prepare('SELECT * FROM `departments` WHERE `id` = ?');

$stm->bind_param('s', $_GET['id']);
$stm->execute();

$result = $stm->get_result();

include __DIR__ . '/views/departments/show.php';
