<?php

namespace App\Controllers;

use App\Models\M_Contact;
// use App\Models\M_Slider;

class Contact extends BaseController
{
    protected $db;
    protected $M_Contact;

    protected $request;

    public function __construct()
    {
        // $this->session = session();
        $this->M_Contact = new M_Contact();
        // $this->M_Slider = new M_Slider();
    }

    public function index()
    {
        $data = [
            'tittle' => 'HubungiKami',
            'aktif' => 'HubungiKami',
            'isi' => 'hubungiKami/Isi/hubungi-kami',
        ];

        echo view('hubungiKami/template/wrapper', $data);
    }

    // public function store() {

    // }

    // public function update() {
        
    // }

    // public function delete() {
        
    // }


}
