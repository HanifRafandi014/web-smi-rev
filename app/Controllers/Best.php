<?php

namespace App\Controllers;

use App\Models\M_Best;
// use App\Models\M_Slider;

class Best extends BaseController
{
    protected $db;
    protected $M_Best;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Best = new M_Best();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Best',
            'aktif' => 'Best',
            'isi' => 'programKami/Isi/program-best',
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
