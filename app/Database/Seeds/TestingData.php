<?php namespace App\Database\Seeds;

class TestingData extends \CodeIgniter\Database\Seeder {
        
    public function run() {
        $res = [];

        array_push($res, $this->insertProducts());
        array_push($res, $this->insertAdmins());
            
        var_dump($res);
    }

    private function insertProducts() {
        $data = [
            [
                'name' => 'Sony MDR-ZX310',
                'description' => 'Headphones from Sony'
            ],
            [
                'name' => 'Sony WH-1000XM3 Wireless',
                'description' => 'Wireless headphones with noise cancelling'
            ]
        ];

        if ($this->db->table('products')->insertBatch($data)) {
            return 'Products created successfully';
        } else {
            return 'Create products failed';
        }
    }

    private function insertAdmins() {
        $data = [
            [
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('welcome'.getenv('pepper'), PASSWORD_BCRYPT)
            ],
            [
                'username' => 'Melvin Toni',
                'email' => 'melvin@gmail.com',
                'password' => password_hash('welcome'.getenv('pepper'), PASSWORD_BCRYPT)
            ]
        ];

        if ($this->db->table('admins')->insertBatch($data)) {
            return 'Admins created successfully';
        } else {
            return 'Create admins failed';
        }
    }
}