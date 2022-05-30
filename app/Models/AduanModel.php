<?php
namespace App\Models;
use CodeIgniter\Model;

class AduanModel extends Model
{
    protected $table = 'aduan_masuk';
    protected $useTimestamps = 'false';
    protected $validationRules = [];
    protected $allowedFields = ['nama','aduan','jenis_aduan','bukti'];


    public function getDataId($id)
    {
        return $this->where(['id' => $id])->first();
    }    
}

