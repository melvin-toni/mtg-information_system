<?php namespace App\Controllers;

class Auth extends BaseController {
	
	public function index() {
		$data = $this->initFileIncluded();
		$data['title'] = 'Log in';

		echo view('auth/login', $data);
	}

}
