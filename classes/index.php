<?php

include ("init.php");
use Models\Classes;

$class= new Classes('', '', '', '', '', '');
$class->setConnection($connection);
$all_classes = $class->getAll();

$template = $mustache->loadTemplate('classes/index.mustache');
//all classes
echo $template->render(compact('classes'));
