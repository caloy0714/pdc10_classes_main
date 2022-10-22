<?php

include "vendor/autoload.php";

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);

$classes = [
    "name",
    "description",
    "assigned_teacher",
    "code"

];

$template = $mustache->loadTemplate('template/Classes/index');
echo $template->render(compact('list_classes'));