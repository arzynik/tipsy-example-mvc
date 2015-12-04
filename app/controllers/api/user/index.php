<?php

namespace App\Controller\Api;

class User extends \App\Rest {
	public function init() {
		header('Content-Type: application/json');
		$user = new \App\User;
		echo json_encode($user->data());
	}
}
