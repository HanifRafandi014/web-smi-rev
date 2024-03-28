<?php

namespace App\Controllers;

use App\Models\M_Agenda;
// use App\Models\M_Slider;

class Agenda extends BaseController
{
    protected $db;
    protected $M_Agenda;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Agenda = new M_Agenda();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Agenda',
            'aktif' => 'Agenda',
            'isi' => 'publikasi/Isi/agenda',
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
