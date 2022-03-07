<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Spp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_spp' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tahun' => [
                'type' => 'varchar',
                'constraint' => 8,
            ],
            'nominal' => [
                'type' => 'bigint',
                'constraint' => 20,
            ],
        ]);
        $this->forge->addKey('id_spp', true);

        $this->forge->createTable('spp');
    }

    public function down()
    {
        $this->forge->dropTable('spp');
    }
}
