<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Contact extends Model
{
    protected $table = 'tb_contact';
    protected $primaryKey = 'IDCONTACT';
    protected $protectFields = false;
}