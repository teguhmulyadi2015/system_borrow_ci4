<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Borrow extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'employee_id' => [
                'type'       => 'INT'
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'asset_id' => [
                'type'       => 'INT'
            ],
            'date_borrow' => [
                'type'       => 'DATETIME'
            ],
            'date_return' => [
                'type'       => 'DATETIME'
            ],
            'created_at' => [
                'type'   => 'DATETIME'
            ],
            'updated_at' => [
                'type'   => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_borrow');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_borrow');
    }
}
