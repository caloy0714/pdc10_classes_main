<?php

include "init.php";

$edit = new classes('');
$edit->setConnection($connection);
$edit->getById(1);
$edit->update($name, $description, $code);

//var_dump($task);