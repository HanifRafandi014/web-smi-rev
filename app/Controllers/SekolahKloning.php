<?php

namespace App\Controllers;

use App\Models\M_SekolahKloning;
// use App\Models\M_Slider;

class SekolahKloning extends BaseController
{
    protected $db;
    protected $M_SekolahKloning;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_SekolahKloning = new M_SekolahKloning();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'SekolahKloning',
            'aktif' => 'SekolahKloning',
            'isi' => 'programKami/Isi/sekolah-kloning',
        ];

        echo view('programKami/template/wrapper', $data);
    }

    // public function store() {

    // }

    // public function update() {
        
    // }

    // public function delete() {
        
    // }


}
