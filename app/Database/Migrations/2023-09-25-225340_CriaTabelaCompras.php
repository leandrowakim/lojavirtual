<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaCompras extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'usuarios_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'produtos_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'data' => [
                'type' => 'TIMESTAMP',
                'default_string' => false
            ]
        ]);
        $this->forge
            ->addForeignKey('usuarios_id', 'usuarios', 'id', 'NO ACTION', 'CASCADE')
            ->addForeignKey('produtos_id', 'produtos', 'id', 'NO ACTION', 'CASCADE')
            ->createTable('compras');
    }

    public function down()
    {
        $this->forge->dropTable('compras');
    }
}
