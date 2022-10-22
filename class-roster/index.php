<?php

include ("init.php");
use Models\ClassRoster;

$classRoster= new ClassRoster('', '', '', '', '', '');
$classRoster->setConnection($connection);
$all_ClassRosters = $classRoster->getAll();
$template = $mustache->loadTemplate('class-roster/index.mustache');
//all class-roster
echo $template->render(compact('class-roster'));