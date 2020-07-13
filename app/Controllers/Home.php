<?php namespace App\Controllers;

class Home extends BaseController {
	
	public function index() {
		if ($this->isValidUser()) {
			$data = $this->initFileIncluded();
			$data['title'] = 'Tampilan Utama';
			$data['content'] = 'Ini adalah tampilan utama setelah user berhasil login';

			echo view('templates/header_menu', $data);
			echo view('main', $data);
			echo view('templates/footer', $data);
		} else {
			return redirect()->to('login');
		}
	}

}
