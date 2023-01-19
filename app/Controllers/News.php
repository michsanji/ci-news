<?php 

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController {
    public function index() {
        // buat objek model $news
        $news = new NewsModel();
        /*
        siapkan data untuk dikirim ke view dengan nama $newses
        dan isi datanya dengan news yang sudah terbit
        */
        $data['newses'] = $news->where('status', 'published')->findAll();
        echo view('news', $data);
    }

    public function viewNews($slug) {
        $news = new NewsModel();
        $data['news'] = $news->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan error kalo gaada data yg ditemuin
        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('news_detail', $data);
    }
}

?>