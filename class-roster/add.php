<?php

include ("/init.php");
use Models\ClassRoster;


$template = $mustache->loadTemplate('classes/add.mustache');
echo $template->render();

try {
    if (isset($_POST['name'])) {
        $saveClasses = new Classes($_POST['class_code'], $_POST['student_number'], $_POST['enrolled_at']);
        $saveClasses->setConnection($connection);
        $saveClasses->saveClasses();
        header('index.php');
    }
}

catch (Exception $e) {
    error_log($e->getMessage());
}