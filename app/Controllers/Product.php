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
	
	public function create() {
		$model = new Products();
		$validation = $this->validate([
			'name' => 'required|min_length[3]|max_length[255]',
			'description' => 'required'
		]);

		if (!$validation) {
			echo view('templates/header', ['title' => 'Create a product']);
			echo view('products/create');
			echo view('templates/footer');
		} else {
			$model->save([
				'name' => $this->request->getVar('name'),
				'description' => $this->request->getVar('description'),
			]);

			echo view('templates/success');
		}
	}

}
