<?php

include_once __DIR__ . '/app/Department.php';

$result = Department::all();

include __DIR__ . '/views/departments/index.php';
