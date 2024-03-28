<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Galeri extends Model
{
    protected $table = 'tb_galeri';
    protected $primaryKey = 'IDGALERI';
    protected $protectFields = false;
}