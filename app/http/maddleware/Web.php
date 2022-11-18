<?php


namespace app\http\maddleware;
use boca\mvc\core\settings\Request;
use boca\mvc\core\settings\Response;

class Web
{
	public function Check(Request $Request, Response $Response)
	{
		echo "web maddleware\n" ;
	}
}