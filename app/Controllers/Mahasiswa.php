<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;
use App\Models\Jurusan_model;
use Config\Validation;

class Mahasiswa extends BaseController
{
    protected $db_mhs;
    protected $db_jrs;

    public function __construct()
    {
        $this->db_mhs = new Mahasiswa_model();
        $this->db_jrs = new Jurusan_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Mahasiswa',
            'tampilmhs' => $this->db_mhs->getMhs(),
        ];
        return view('v_mahasiswa', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Mahasiswa',
            'validation' => \Config\Services::validation(),
            'getjurusan' => $this->db_jrs->getJrs(),
        ];
        return view('v_tambah', $data);
    }

    public function simpan()
    {
        // Memanggil fungsi validasi
        $validation = \Config\Services::validation();
        // Ambil inputan
        $data = [
            'nim'        => $this->request->getPost('nim'),
            'nama'       => $this->request->getPost('nama'),
            'jk'         => $this->request->getPost('jk'),
            'jurusan'    => $this->request->getPost('jurusan'),
        ];
        // Lakukan validasi input
        if ($validation->run($data, 'mhs_tambah') == FALSE) {
            // Jika validasi gagal, kembali ke form tambah dengan membawa inputan sebelumnya
            return redirect()->to('/mahasiswa/tambah')->withInput();
        } else {
            $simpan = $this->db_mhs->save($data);
        }
        if ($simpan) {
            session()->setFlashdata('success', 'Sukses, data mahasiswa berhasil ditambahkan');
            return redirect()->to(base_url('mahasiswa'));
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Mahasiswa',
            'validation' => \Config\Services::validation(),
            'edit' => $this->db_mhs->getMhs($id),
            'editjurusan' => $this->db_jrs->getJrs(),
        ];
        return view('v_edit', $data);
    }

    public function update($id)
    {
        // Memanggil fungsi validasi
        $validation = \Config\Services::validation();
        // Ambil inputan
        $data = [
            'nim'        => $this->request->getPost('nim'),
            'nama'       => $this->request->getPost('nama'),
            'jk'         => $this->request->getPost('jk'),
            'jurusan'    => $this->request->getPost('jurusan'),
        ];
        $edit = $this->db_mhs->getMhs($id);
        // Lakukan validasi input
        if ($validation->run($data, 'mhs_edit') == FALSE) {
            // Jika validasi gagal, kembali ke form tambah dengan membawa inputan sebelumnya
            return redirect()->to('/mahasiswa/edit')->withInput();
        } else {
            $update = $this->db_mhs->update($edit['id'], $data);
        }
        if ($update) {
            session()->setFlashdata('success', 'Sukses, data mahasiswa  berhasil diubah');
            return redirect()->to(base_url('mahasiswa'));
        }
    }

    public function hapus($id)
    {
        $hapus = $this->db_mhs->where(['nim' => $id])->delete();
        if ($hapus == TRUE) {
            session()->setFlashdata('success', 'Sukses, mahasiswa dengan NIM ' . $id . ' berhasil dihapus');
            return redirect()->to(base_url('mahasiswa'));
        }
    }
}
