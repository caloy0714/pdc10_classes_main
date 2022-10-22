<?php

include "vendor/autoload.php";
include "config/database.php";

use app\UsePdo;
use Models\Class;
use Models\Teacher;
use Models\Student;
use Models\ClassRoster;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();

$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);