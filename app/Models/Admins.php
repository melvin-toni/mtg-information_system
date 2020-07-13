<?php namespace App\Models;

use CodeIgniter\Model;

class Admins extends Model {

    protected $table = 'admins';
    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];

    public function getAuthAdmins($email) {
        return $this->getWhere(['email'=>$email])
                    ->getResult();
    }

}