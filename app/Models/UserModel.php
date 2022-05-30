<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tabel_user';
    protected $allowedFields = ['nama','jenis_aduan','aduan','bukti'];
}