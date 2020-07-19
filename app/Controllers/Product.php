<?php namespace App\Controllers;

use App\Models\Products;

class Product extends BaseController {
	
	public function index() {
		if ($this->isValidUser()) {
			$model = new Products();

			$data = $this->initFileIncluded();
			$data['title'] = 'Produk';
			$data['products'] = $model->getProducts();

			echo view('templates/header_menu', $data);
			echo view('products/overview', $data);
			echo view('templates/footer', $data);
		} else {
			return redirect()->to('login');
		}
    }

    public function view($id=null) {
        $model = new Products();

        $data = [
			'title' => 'View Detail Products',
			'products' => $model->getProducts($id)
		];

		if (empty($data['products'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot find the product: $id");
		}
		
		echo view('templates/header', $data);
		echo view('products/view', $data);
		echo view('templates/footer');
	}
	
	private function validateProductForm() {
		return $this->validation->setRules([
			'inputName' => [
				'label' => 'Nama', 
				'rules' => 'required|max_length[100]',
				'errors' => [
					'required' => '{field} wajib diisi',
					'max_length' => 'Maksimal 100 karakter'
				]
			],
			'inputDescription' => [
				'label' => 'Deskripsi', 
				'rules' => 'required',
				'errors' => [
					'required' => '{field} wajib diisi'
				]
			]
		]);
	}

	public function create() {
		if ($this->isValidUser()) {
			$data = $this->initFileIncluded();
			$data['title'] = 'Tambah Produk';

			echo view('templates/header_menu', $data);
			echo view('products/create', $data);
			echo view('templates/footer', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function add() {
		$model = new Products();

		$this->validateProductForm();

		if ($this->validation->withRequest($this->request)->run()) {
			
			$data = [
				'name' => $this->request->getPost('inputName'),
				'description' => $this->request->getPost('inputDescription'),
			];
			if ($model->saveProducts($data)) {
				session()->setFlashdata('input_success', 'Data berhasil disimpan');
				return redirect()->to('/product');
			} else {
				session()->setFlashdata('input_failed', 'Data gagal disimpan');
				return redirect()->back()->withInput();
			}
		} else {
			return redirect()->back()->withInput();
		}
	}

}
