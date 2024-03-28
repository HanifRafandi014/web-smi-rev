<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Best extends Model
{
    protected $table = 'tb_best';
    protected $primaryKey = 'IDBEST';
    protected $protectFields = false;
}