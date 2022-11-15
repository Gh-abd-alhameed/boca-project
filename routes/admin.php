<?php

use boca\mvc\core\settings\Route;

Route::get("/post/{id}/{slug}", function ($id, $slug) {
    echo  $id . " / " . $slug;
});
