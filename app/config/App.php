<?php


namespace app\config;
use \boca\mvc\core\settings\Init;
use app\config\routeproviders;

class App extends  Init
{

    public function __construct(array $app = [])
    {

        $RouteProviders = $this->Providers()["RouteProviders"];

        $route = new $RouteProviders;

        $this->initRotePath = $route->providers();

    }
    
    public function Providers()
    {
        return [
            "RouteProviders" => \app\config\routeproviders::class,
        ];
    }
}