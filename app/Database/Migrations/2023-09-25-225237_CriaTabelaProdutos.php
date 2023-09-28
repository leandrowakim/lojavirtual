<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaProdutos extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'nome_produto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'descricao_produto' => [
                'type' => 'TEXT',
            ],
            'valor' => [
                'type' => 'DOUBLE(10,2)',
            ],
            'desconto' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'link_pagamento' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
                'null' => true
            ],
            'destaque' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            'promocao' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            'ativo' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1
            ],
            'categorias_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);
        $this->forge
            ->addForeignKey('categorias_id', 'categorias', 'id', 'NO ACTION', 'CASCADE')
            ->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
