<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nisn' => [
                'type' => 'char',
                'constraint' => 10,
            ],
            'tanggal' => [
                'type' => 'datetime',
            ],
            'status' => [
                'type' => 'enum',
                'constraint' => ['Lunas', 'Belum Lunas'],
                'default' => 'Belum Lunas',
            ],
            'id_spp' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->addUniqueKey('nisn');
        $this->forge->addUniqueKey('id_spp');

        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
