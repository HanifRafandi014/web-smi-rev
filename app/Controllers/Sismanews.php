<?php

namespace App\Controllers;

use App\Models\M_Sismanews;
use App\Models\M_Agenda;
use App\Models\M_Galeri;
// use App\Models\M_Slider;

class Sismanews extends BaseController
{
    protected $db;
    protected $M_Sismanews;
    protected $M_Agenda;
    protected $M_Galeri;
    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Sismanews = new M_Sismanews();
        $this->M_Agenda = new M_Agenda();
        $this->M_Galeri = new M_Galeri();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'SismaNews',
            'aktif' => 'SismaNews',
            'isi' => 'publikasi/Isi/sisma-news',
        ];

        echo view('publikasi/template/wrapper', $data);
    }

    public function sismaNewsDetails()
    {
        $data = [
            'tittle' => 'SismaNewsDetails',
            'aktif' => 'SismaNewsDetails',
            'isi' => 'publikasi/Isi/sisma-news-details',
        ];

        echo view('publikasi/template/wrapper', $data);
    }

    public function agenda()
    {
        $data = [
            'tittle' => 'Agenda',
            'aktif' => 'Agenda',
            'isi' => 'publikasi/Isi/agenda',
        ];

        echo view('publikasi/template/wrapper', $data);
    }

    public function galeri()
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
