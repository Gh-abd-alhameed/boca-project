<?php


return [

	'url' => "/",

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

		"assets" =>[

			"prefix"=>"/assets"

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
