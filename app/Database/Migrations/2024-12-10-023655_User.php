<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'password' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'nama_lengkap' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'TEXT',
                'constraint' => '100',
                'unique'     => true,
            ],
            'token' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'last_login timestamp default now()'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
