<?php

include ("init.php");
use ClassRoster;

$classRoster= new ClassRoster('');
$classRoster->setConnection($connection);
$all_ClassRosters = $classRoster->getAll();
$template = $mustache->loadTemplate('templates/Classroster/index');
//all class-roster
echo $template->render(compact('list_class-roster'));