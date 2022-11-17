<?php

session_start();

require __DIR__ . "/vendor/autoload.php";

use app\config\App;

$settings = require __DIR__ . "/app/providers/app.php";

$app = new App();

$app->setapp($settings);

$app->init();

require __DIR__ . "/app/providers/bootstrap.php";


