<?php
require __DIR__ . '/../vendor/autoload.php';
\SkankyDev\Core\Bootstrap::boot();
require __DIR__ . '/../config/bootstrap.php';

header('X-Frame-Options: DENY'); //Clickjacking protection

$app = new SkankyDev\Core\Application();
$app->run();
