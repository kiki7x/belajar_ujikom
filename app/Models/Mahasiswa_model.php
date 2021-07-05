<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 'nim', 'nama', 'jk', 'jurusan'
    ];

    public function getMhs($id = false)
    {
        if ($id === false) {
            return $this
                ->join('tb_jurusan', 'tb_jurusan.kd_jurusan = jurusan', 'LEFT')
                ->findAll();
        } else {
            return $this
                ->join('tb_jurusan', 'tb_jurusan.kd_jurusan = jurusan', 'INNER JOIN')
                ->where(['nim' => $id])
                ->first();
        }
    }
}
