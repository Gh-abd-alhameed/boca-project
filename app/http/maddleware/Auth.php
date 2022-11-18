<?php


namespace app\http\maddleware;

use boca\mvc\core\settings\Request;
use boca\mvc\core\settings\Response;

class Auth
{
	public function Check(Request $Request, Response $Response)
	{
		echo "Auth maddleware\n";
	}
}