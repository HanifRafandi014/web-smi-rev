<?php

namespace App\Controllers;

use App\Models\M_StudiBanding;
use App\Models\M_Best;
use App\Models\M_Pentalokanas;
use App\Models\M_SekolahKloning;
use App\Models\M_Sismatv;
// use App\Models\M_Slider;

class StudiBanding extends BaseController
{
    protected $db;
    protected $M_StudiBanding;
    protected $M_Best;
    protected $M_Pentalokanas;
    protected $M_SekolahKloning;
    protected $M_Sismatv;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_StudiBanding = new M_StudiBanding();
        $this->M_Best = new M_Best();
        $this->M_Pentalokanas = new M_Pentalokanas();
        $this->M_SekolahKloning = new M_SekolahKloning();
        $this->M_Sismatv = new M_Sismatv();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'StudiBanding',
            'aktif' => 'StudiBanding',
            'isi' => 'programKami/Isi/studi-banding',
        ];

        echo view('programKami/template/wrapper', $data);
    }

    public function programBest()
    {
        $data = [
            'tittle' => 'Best',
            'aktif' => 'Best',
            'isi' => 'programKami/Isi/program-best',
        ];

        echo view('programKami/template/wrapper', $data);
    }

    public function pentalokanas()
    {
        $data = [
            'tittle' => 'Pentalokanas',
            'aktif' => 'Pentalokanas',
            'isi' => 'programKami/Isi/pentalokanas',
        ];

        echo view('programKami/template/wrapper', $data);
    }

    public function sekolahKloning()
    {
        $data = [
            'tittle' => 'SekolahKloning',
            'aktif' => 'SekolahKloning',
            'isi' => 'programKami/Isi/sekolah-kloning',
        ];

        echo view('programKami/template/wrapper', $data);
    }

    public function sismaTv()
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
