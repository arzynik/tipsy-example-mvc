<?php

namespace App;

class User extends \Tipsy\Model {
	public function data($name) {
		return ['name' => $name, 'age' => rand(1,50)];
	}
}
