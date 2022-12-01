<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Assets extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'asset_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'assets_category_id' => [
                'type'       => 'INT'
            ],
            'created_at' => [
                'type'   => 'DATETIME'
            ],
            'updated_at' => [
                'type'   => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_assets');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_assets');
    }
}
