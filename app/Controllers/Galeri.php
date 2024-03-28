<?php

namespace App\Controllers;

use App\Models\M_Galeri;
// use App\Models\M_Slider;

class Galeri extends BaseController
{
    protected $db;
    protected $M_Galeri;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Galeri = new M_Galeri();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Galeri',
            'aktif' => 'Galeri',
            'isi' => 'publikasi/Isi/galeri',
        ];

        echo view('publikasi/template/wrapper', $data);
    }

    public function galeriDetails()
    {
        $data = [
            'tittle' => 'GaleriDetails',
            'aktif' => 'GaleriDetails',
            'isi' => 'publikasi/Isi/galeri-details',
        ];

        echo view('publikasi/template/wrapper', $data);
    }

    // public function store() {

    // }

    // public function update() {
        
    // }

    // public function delete() {
        
    // }


}
