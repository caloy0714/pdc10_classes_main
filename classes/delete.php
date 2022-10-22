<?php

include "init.php";

$task = new Todo('');
$task->setConnection($connection);
$task->getById(1);
$task->delete();