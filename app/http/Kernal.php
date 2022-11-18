<?php


namespace app\http;


class Kernal
{
	public function boot()
	{
		return [
			"middleware" => [
				"Web" => \app\http\maddleware\Web::class,
				"Auth" => \app\http\maddleware\Auth::class
			]
		];
	}

}