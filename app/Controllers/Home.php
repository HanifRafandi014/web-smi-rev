<?php

namespace App\Controllers;

// use App\Models\M_Slider;

class Home extends BaseController
{
    protected $db;
    protected $request;

    // public function __construct()
    // {
    //     $this->session = session();
    //     $this->M_Slider = new M_Slider();
    // }

    public function index()
    {
        $data = [
            'tittle' => 'Home',
            'aktif' => 'Home',
            'isi' => 'home/Isi/index',
        ];

        echo view('home/template/wrapper', $data);
    }

    public function home()
    {
        $data = [
            'tittle' => 'Home',
            'aktif' => 'Home',
            'isi' => 'home/Isi/index',
        ];

        echo view('home/template/wrapper', $data);
    }

}
