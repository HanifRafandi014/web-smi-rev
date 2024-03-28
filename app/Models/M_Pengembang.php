<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengembang extends Model
{
    protected $table = 'tb_pengembang';
    protected $primaryKey = 'IDPENGEMBANG';
    protected $protectFields = false;
}