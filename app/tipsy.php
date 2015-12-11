<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Tipsy\Tipsy;
Tipsy::config('../config/*.ini');
Tipsy::run();

Tipsy::router()
	->when('api/user/:id', '\App\Controller\Api\User');
