<?php

session_start();

require __DIR__ . "/vendor/autoload.php";

use app\config\App;

$app_array = require __DIR__ . "/app/app.php";

$app = new App();

$app->setapp($app_array);

$app->init();


