<?php

namespace App\Models;

use CodeIgniter\Model;

class AduanModel extends Model
{
    protected $table = 'aduan_masuk';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama','aduan','jenis_aduan','bukti'];
    
}