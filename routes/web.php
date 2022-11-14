<?php

use boca\mvc\core\settings\Route;
use app\http\controller\HomePageController;


Route::get("/", [HomePageController::class, "Index"])->name("ghadeer");
