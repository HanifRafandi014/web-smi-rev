<?php

namespace App\Controllers;

use App\Models\M_TentangSmi;
use App\Models\M_Pengembang;
use App\Models\M_Visimisi;
use App\Models\M_SelayangPandang;
// use App\Models\M_Slider;

class TentangKami extends BaseController
{
    protected $db;
    protected $M_TentangSmi;
    protected $M_Pengembang;
    protected $M_Visimisi;
    protected $M_SelayangPandang;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_TentangSmi = new M_TentangSmi();
        $this->M_Pengembang = new M_Pengembang();
        $this->M_Visimisi = new M_Visimisi();
        $this->M_SelayangPandang = new M_SelayangPandang();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'TentangSmi',
            'aktif' => 'TentangSmi',
            'isi' => 'tentangKami/Isi/tentang-smi',
        ];

        echo view('tentangKami/template/wrapper', $data);
    }

    public function timPengembang()
    {
        $data = [
            'tittle' => 'TimPengembang',
            'aktif' => 'TimPengembang',
            'isi' => 'tentangKami/Isi/tim-pengembang',
        ];

        echo view('tentangKami/template/wrapper', $data);
    }

    public function visiMisi()
    {
        $data = [
            'tittle' => 'VisiMisi',
            'aktif' => 'VisiMisi',
            'isi' => 'tentangKami/Isi/visi-misi',
        ];

        echo view('tentangKami/template/wrapper', $data);
    }

    public function selayangPandang()
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
