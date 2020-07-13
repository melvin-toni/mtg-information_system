<?php namespace App\Models;

use CodeIgniter\Model;

class Products extends Model {

    protected $table = 'products';
    protected $allowedFields = ['name', 'description'];

    public function getProducts($id=false) {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['_id' => $id])
                    ->first();
    }

}