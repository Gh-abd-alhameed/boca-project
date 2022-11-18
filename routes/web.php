<?php

use boca\mvc\core\settings\Route;
use app\http\controller\HomePageController;



Route::get("/", [HomePageController::class, "Index"])->name("home.index")->maddleware(["Web","Auth"]);
Route::get("/test", [HomePageController::class, "Index"])->name("test.index");
