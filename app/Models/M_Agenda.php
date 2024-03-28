<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Agenda extends Model
{
    protected $table = 'tb_agenda';
    protected $primaryKey = 'IDAGENDA';
    protected $protectFields = false;
}