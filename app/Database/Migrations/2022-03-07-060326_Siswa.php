<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nisn' => [
                'type' => 'char',
                'constraint' => 10,
            ],
            'nis' => [
                'type' => 'char',
                'constraint' => 8,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'alamat' => [
                'type' => 'text',
                'null' => true,
            ],
            'telp' => [
                'type' => 'varchar',
                'constraint' => 13,
                'null' => true,
            ],
            'id_kelas' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_spp' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('nisn', true);
        $this->forge->addUniqueKey('id_kelas');
        $this->forge->addUniqueKey('id_spp');

        $this->forge->createTable('siswa');
    }

    public function down()
    {
        //
    }
}
