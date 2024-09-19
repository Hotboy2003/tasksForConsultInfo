<?php

use Core\Routing\Router;

Router::get('/', [new App\Controller\IndexController(), 'showIndexPage']);

Router::get('/task1', [new App\Controller\FirstTaskController(), 'showFirstTask']);

Router::post('/task1/remember', [new App\Controller\FirstTaskController(), 'rememberDataFromFirstTask']);

Router::get('/task2', [new App\Controller\SecondTaskController(), 'showSecondTask']);

Router::post('/task2/remember', [new App\Controller\SecondTaskController(), 'rememberDataFromSecondTask']);