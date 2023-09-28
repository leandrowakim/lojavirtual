<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'admin' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
                'default' => 0
            ]
        ]);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}