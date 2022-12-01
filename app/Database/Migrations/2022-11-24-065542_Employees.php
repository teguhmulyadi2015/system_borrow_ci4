<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'dept_id' => [
                'type'       => 'INT',
                'unsigned'       => true,
            ],
            'created_at' => [
                'type'   => 'DATETIME'
            ],
            'updated_at' => [
                'type'   => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_employees');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_employees');
    }
}
