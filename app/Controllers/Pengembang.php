<?php

namespace App\Controllers;

use App\Models\M_Pengembang;
// use App\Models\M_Slider;

class Pengembang extends BaseController
{
    protected $db;
    protected $M_Pengembang;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Pengembang = new M_Pengembang();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'TimPengembang',
            'aktif' => 'TimPengembang',
            'isi' => 'tentangKami/Isi/tim-pengembang',
        ];

        echo view('tentangKami/template/wrapper', $data);
    }

    // public function store() {

    // }

    // public function update() {
        
    // }

    // public function delete() {
        
    // }


}
