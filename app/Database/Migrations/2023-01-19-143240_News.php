<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        // Membuat kolom tabel news
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => 'Michael Sanji'
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['published', 'draft'],
                'default' => 'draft'
            ],
        ]);

        // Buat primary key
        $this->forge->addKey('id', TRUE);

        // Buat tabel news
        $this->forge->createTable('news', TRUE);
    }

    public function down()
    {
        // Hapus tabel news
        $this->forge->dropTable('news');
    }
}
