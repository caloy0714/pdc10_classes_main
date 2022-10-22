<?php

$dsn = "mysql:host=localhost;dbname=pdc10_classes";
$user = "user123";
$passwd = "passwd";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();
