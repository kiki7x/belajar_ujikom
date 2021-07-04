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
            return $this->table('tb_mahasiswa')
                ->select('tb_mahasiswa.id', 'nim', 'nama', 'jk', 'jurusan', 'tb_jurusan.nama_jurusan')
                ->join('tb_jurusan', 'tb_jurusan.kd_jurusan = tb_jurusan.nama_jurusan', 'INNER JOIN')
                ->get()->getResultArray();
        } else {
            return $this->table('tb_mahasiswa')
                ->select('tb_mahasiswa.id', 'nim', 'nama', 'jk', 'jurusan', 'tb_jurusan.nama_jurusan')
                ->join('tb_jurusan', 'tb_jurusan.kd_jurusan = tb_jurusan.nama_jurusan', 'INNER JOIN')
                ->where('id', $id)
                ->get()->getRowArray();
        }
    }
}
