<?php

include ("init.php");
use ClassRoster;

$id = $_GET['id'];
$student = new ClasseRoster('');
$student->setConnection($connection);
$student->getById($id);
$student->delete();
header("index.php");
exit();

