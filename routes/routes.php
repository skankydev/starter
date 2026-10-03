<?php

use App\Controller\HomeController;
use SkankyDev\Http\Routing\Router;

// Tout ce qui n'est pas déclaré ici passe par la convention :
// /{module}/{controller}/{action}/{params...}

Router::_add('/',[
	'controller' => HomeController::class,
	'action'     => 'index',
])->setName('home');
