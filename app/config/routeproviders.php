<?php


namespace app\config;

class routeproviders
{
    public function providers()
    {
        return [
            "web" => [
                "prefix" => "/",
                "path" => __DIR__ . "/../../routes/web.php"
            ],
            "admin" => [
                "prefix" => "admin",
                "path" => __DIR__ . "/../../routes/admin.php"
            ],

        ];
    }
}