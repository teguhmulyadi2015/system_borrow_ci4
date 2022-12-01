<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AssetsCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'   => 'DATETIME'
            ],
            'updated_at' => [
                'type'   => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_assets_category');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_assets_category');
    }
}
