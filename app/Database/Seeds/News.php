<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // Buat data
        $news_data = [
            [
                'title' => 'Selamat datang di Portal Sanji',
                'slug' => 'codeigniter-intro',
                'content' => 'Pengenalan CI4 untuk pemula'
            ],
            [
                'title' => 'Hello World',
                'slug' => 'hello-world',
                'content' => 'Hello World, ini contoh artikel'
            ],
            [
                'title' => 'Meetup komunitas Codeigniter Indonesia',
                'slug'	=> 'codeigniter-meetup',
                'content' => 'Seru sekali meetup perdana komunitas codeigniter..'
            ]
        ];

        foreach($news_data as $data) {
            // insert semua data ke tabel
            $this->db->table('news')->insert($data);
        }
    }
}
