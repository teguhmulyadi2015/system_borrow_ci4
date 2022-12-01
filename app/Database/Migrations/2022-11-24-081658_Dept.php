<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dept extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'dept_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'dept_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'created_at' => [
                'type'   => 'DATETIME'
            ],
            'updated_at' => [
                'type'   => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_dept');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_dept');
    }
}
