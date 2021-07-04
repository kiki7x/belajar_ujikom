<?php

namespace App\Controllers;

use App\Models\Jurusan_model;
use Config\Validation;

class Jurusan extends BaseController
{
    protected $db_jrs;

    public function __construct()
    {
        $this->db_jrs = new Jurusan_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Data Jurusan',
            'tampiljrs' => $this->db_jrs->tampilJrs(),
        ];
        return view('jurusan/v_jurusan', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Jurusan',
            'validation' => \Config\Services::validation(),
        ];
        return view('jurusan/v_tambah', $data);
    }

    public function simpan()
    {
        // Memanggil fungsi validasi
        $validation = \Config\Services::validation();
        // Ambil inputan
        $data = [
            'kd_jurusan'        => $this->request->getPost('kd_jurusan'),
            'nama_jurusan'       => $this->request->getPost('nama_jurusan'),
        ];
        // Lakukan validasi input
        if ($validation->run($data, 'jrs_tambah') == FALSE) {
            // Jika validasi gagal, kembali ke form tambah dengan membawa inputan sebelumnya
            return redirect()->to('/jurusan/tambah')->withInput();
        } else {
            $simpan = $this->db_jrs->save($data);
        }
        if ($simpan) {
            session()->setFlashdata('success', 'Sukses, data Jurusan berhasil ditambahkan');
            return redirect()->to(base_url('jurusan'));
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Jurusan',
            'validation' => \Config\Services::validation(),
            'tampiljrs' => $this->db_jrs->tampilJrs($id),
        ];
        return view('jurusan/v_edit', $data);
    }

    public function update($id)
    {
        // Memanggil fungsi validasi
        $validation = \Config\Services::validation();
        // Ambil inputan
        $data = [
            'kd_jurusan'        => $this->request->getPost('kd_jurusan'),
            'nama_jurusan'       => $this->request->getPost('nama_jurusan'),
        ];
        $edit = $this->db_jrs->tampilJrs($id);
        // Lakukan validasi input
        if ($validation->run($data, 'jrs_edit') == FALSE) {
            // Jika validasi gagal, kembali ke form tambah dengan membawa inputan sebelumnya
            return redirect()->to('/jurusan/edit/')->withInput();
        } else {
            $update = $this->db_jrs->update($edit['id'], $data);
        }
        if ($update) {
            session()->setFlashdata('success', 'Sukses, data Jurusan  berhasil diubah');
            return redirect()->to(base_url('jurusan'));
        }
    }
}
