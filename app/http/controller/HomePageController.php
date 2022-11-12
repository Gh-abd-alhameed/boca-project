<?php

namespace app\http\controller;

use boca\mvc\core\settings\Controller;

class HomePageController extends Controller

{
    public function Index()
    {
        return view("home");
    }

}




