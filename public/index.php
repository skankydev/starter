<?php
require '../vendor/autoload.php';
require '../config/bootstrap.php';

header('X-Frame-Options: DENY'); //Clickjacking protection
mb_internal_encoding("UTF-8");

$app = new SkankyDev\Core\Application();
$app->run();
