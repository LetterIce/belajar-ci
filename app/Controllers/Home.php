<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function produk()
    {
        return view('content/produk');
    }

    public function kategori()
    {
        $data['kat'] = [
            'Elektronik' => '/kategori/elektronik',
            'Fashion' => '/kategori/fashion',
            'Otomotif' => '/kategori/otomotif',
            'Kesehatan' => '/kategori/kesehatan',
            'Kuliner' => '/kategori/kuliner',
        ];
        return view('content/kategori', $data);
    }

    public function otomotif() {
        return view('content/kategori/otomotif');
    }

    public function elektronik() {
        return view('content/kategori/elektronik');
    }

    public function fashion() {
        return view('content/kategori/fashion');
    }

    public function kesehatan() {
        return view('content/kategori/kesehatan');
    }

    public function kuliner() {
        return view('content/kategori/kuliner');
    }
}
