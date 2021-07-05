<?php

namespace App\Models;

use CodeIgniter\Model;

class Jurusan_model extends Model
{
    protected $table = 'tb_jurusan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 'kd_jurusan', 'nama_jurusan',
    ];

    public function tampilJrs($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['kd_jurusan' => $id])->first();
        }
    }

    public function getJrs()
    {
        return $this->findAll();
    }
}
