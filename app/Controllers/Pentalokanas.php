<?php

namespace App\Controllers;

use App\Models\M_Pentalokanas;
// use App\Models\M_Slider;

class Pentalokanas extends BaseController
{
    protected $db;
    protected $M_Pentalokanas;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Pentalokanas = new M_Pentalokanas();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Pentalokanas',
            'aktif' => 'Pentalokanas',
            'isi' => 'programKami/Isi/pentalokanas',
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
