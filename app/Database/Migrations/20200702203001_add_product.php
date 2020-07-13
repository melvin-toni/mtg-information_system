<?php namespace App\Database\Migrations;

class AddProduct extends \CodeIgniter\Database\Migration {

    public function up() {
        $this->forge->addField([
            '_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'created_at DATETIME default current_timestamp',
            'updated_at DATETIME default current_timestamp'
        ]);
        $this->forge->addKey('_id', TRUE);
        $this->forge->createTable('products');
    }

    public function down() {
        $this->forge->dropTable('products');
    }
}