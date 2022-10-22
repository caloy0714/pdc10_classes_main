<?php

include ("init.php");
use classes;


$template = $mustache->loadTemplate('template/Class/add.mustache');
echo $template->render();

try {
    if (isset($_POST['name'])) {
        $addClasses = new Classes($_POST['name'], $_POST['description'], $_POST['class_code']);
        $addClasses->setConnection($connection);
        $addClasses->saveClasses();
        header('index.php');
    }
}

catch (Exception $e) {
    error_log($e->getMessage());
}