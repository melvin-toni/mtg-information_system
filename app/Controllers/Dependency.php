<?php namespace App\Controllers;

helper(['dependencycopy']);

class Dependency extends BaseController {
	
	public function index() {
        echo (implode("<br />", copier()));
	}

}
