<?php namespace App\Database\Migrations;

class AddAdmin extends \CodeIgniter\Database\Migration {

    public function up() {
        $this->forge->addField([
            '_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'unique' => TRUE
            ],
            'password' => [
                'type' => 'TEXT'
            ],
            'created_at DATETIME default current_timestamp',
            'updated_at DATETIME default current_timestamp'
        ]);
        $this->forge->addKey('_id', TRUE);
        $this->forge->createTable('admins');
    }

    public function down() {
        $this->forge->dropTable('admins');
    }
}