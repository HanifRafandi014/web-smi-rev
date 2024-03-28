<?php

namespace App\Controllers;

use App\Models\M_Sismatv;
// use App\Models\M_Slider;

class Sismatv extends BaseController
{
    protected $db;
    protected $M_Sismatv;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Sismatv = new M_Sismatv();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'SismaTv',
            'aktif' => 'SismaTv',
            'isi' => 'programKami/Isi/sisma-tv',
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
