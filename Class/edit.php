<?php

include "init.php";
use classes;

$template = $mustache->loadTemplate('templates/Class/edit.mustache');
echo $template->render();

try {
if (isset($_POST['name'])) {

    $class->update($class_input['id'], $_POST['name'], $_POST['description'], $_POST['class_code']); 
    header("index.php");
    exit();
    }
}
catch (Exception $e) {
    error_log($e->getMessage());
}
