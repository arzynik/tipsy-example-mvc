<?php

// an example showing dependency injection

namespace App\Controller;

class About extends \Tipsy\Controller {
	public function init() {
		// normaly this would go in your apps init or index file
		$this->tipsy()->service('User', ['class' => '\App\User']);

		parent::init();

		$this->inject(function($View, $Request, $Scope, $User) {
			$Scope->about = $User->data($Request->loc(1));
			$View->display('about');
		});
	}
}
