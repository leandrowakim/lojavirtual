<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaBanners extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'banner' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->createTable('banners');
    }

    public function down()
    {
        $this->forge->dropTable('banners');
    }
}
