<?php

namespace App\Controllers;

use App\Models\M_SelayangPandang;
// use App\Models\M_Slider;

class SelayangPandang extends BaseController
{
    protected $db;
    protected $M_SelayangPandang;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_SelayangPandang = new M_SelayangPandang();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'SelayangPandang',
            'aktif' => 'SelayangPandang',
            'isi' => 'tentangKami/Isi/selayang-pandang',
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
