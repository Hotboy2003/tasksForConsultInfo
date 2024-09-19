<?php

namespace App\Controller;

class IndexController extends BaseController
{
	public function showIndexPage(): void
	{
		echo self::render('layout.php', ['content' => self::render('MainPage/index.php', [])]);
	}
}