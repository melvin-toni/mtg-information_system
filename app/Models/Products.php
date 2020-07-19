<?php namespace App\Models;

use CodeIgniter\Model;

class Products extends Model {

    protected $table = 'products';
    protected $allowedFields = ['name', 'description', 'created_at', 'updated_at'];

    public function getProducts($id=false) {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->getWhere(['email' => $email])
                    ->getResult();
    }

    public function saveProducts($data) {
        $this->insert($data);

        return ($this->affectedRows() != 1) ? false : true;
    }

}