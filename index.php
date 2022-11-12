<?php

session_start();

require __DIR__ . "/vendor/autoload.php";

use app\config\app;

$app_array = require __DIR__ . "/app/app.php";

$app = new app();

$app->setapp($app_array);

$app->init();


