<?php

namespace Core;

class Application
{
	public function run(): void
	{
		$route = Routing\Router::find($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

		if ($route)
		{
			$action = $route->action;
			$action(...$route->getVariables());
		}
	}
}