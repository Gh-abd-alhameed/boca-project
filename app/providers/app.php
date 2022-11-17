<?php


return [
	'url' => "/framework",
	'locale' => 'en',
	'available_locales' => [
		'en' => [
			"prefix" => "/",
		],
		'ar' => [
			"prefix" => "/ar"
		],
	],
	"static_file" => [
		"public" =>[
			"prefix"=>"/public",
			"extension"=>["css","js","pdf","webp","png","jpg"]
		]
	],
	"debug" => true,
	"databases" => [
		"driver" => "mysql",
		"host" => "127.0.0.1",
		"database" => "shop",
		"username" => "root",
		"password" => ""
	]

];