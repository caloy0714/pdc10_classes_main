<?php

include ("init.php");
use ClassRoster;

$id = $_GET['id'];
$roster = new ClassRoster('');
$roster->setConnection($connection);
$roster->getById($id);
$roster->delete();
header("index.php");
exit();

