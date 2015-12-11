<?php

namespace App\Controller\Api;

class User extends \App\Rest {
	public function init($args = null) {
		$this->inject(function($Request){
			header('Content-Type: application/json');
			// normaly you would use new \App\User($Request->loc(2)); when pulling for the db
			$user = new \App\User;
			echo json_encode($user->data());
		});
	}
}
