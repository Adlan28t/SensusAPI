<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table         = 'penduduk';
    protected $allowedFields = [
        'id_no', 'nik', 'nama_penduduk', 'jenis_kelamin', 'tanggal_lahir', 'Alamat', 'Agama', 'Pekerjaan'
    ];
    protected $returnType    = 'App\Entities\penduduk';
    protected $useTimestamps = false;
}
