<?php

namespace App\Controllers;

use App\Models\M_Visimisi;
// use App\Models\M_Slider;

class Visimisi extends BaseController
{
    protected $db;
    protected $M_Visimisi;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Visimisi = new M_Visimisi();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'VisiMisi',
            'aktif' => 'VisiMisi',
            'isi' => 'tentangKami/Isi/visi-misi',
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
