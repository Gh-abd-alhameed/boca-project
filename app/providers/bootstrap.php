<?php

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
	"driver" => app("databases")["driver"],
	"host" => app("databases")["host"],
	"database" => app("databases")["database"],
	"username" => app("databases")["username"],
	"password" => app("databases")["password"]
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
