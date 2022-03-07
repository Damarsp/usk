<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    public function index()
    {
        $modelSiswa = new SiswaModel();
        $data['siswa'] = $modelSiswa->getSiswa();
        $data['title'] = 'Dashboard Admin | Data Siswa';
        echo view('admin/siswa', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Dashboard Admin | Data Siswa';
        return view('crud-siswa/tambah', $data);
    }

    public function simpan()
    {
        $modelSiswa = new SiswaModel();
        $modelUser = new \Myth\Auth\Models\UserModel();

        $data = [
            'nisn'       => $this->request->getVar('nisn'),
            'nis'        => $this->request->getVar('nis'),
            // 'alamat'     => $this->request->getVar('alamat'),
            // 'telp'       => $this->request->getVar('no_telp'),
            'id_kelas'   => $this->request->getVar('id_kelas'),
            'id_spp'     => $this->request->getVar('id_spp'),
        ];

        $modelSiswa->simpanSiswa($data);

        $data = [
            'email' => $this->request->getVar('nisn'),
            'username' => $this->request->getVar('nisn'),
            'nisn' => $this->request->getVar('nisn'),
            'nama'       => $this->request->getVar('nama'),
            'password_hash' => password_hash(base64_encode(hash('sha384', $this->request->getVar('nis'), true)), PASSWORD_DEFAULT, [10]),
            'active' => 1,
        ];

        $modelUser->simpanSiswa($data);

        return redirect()->to('/siswa');
    }

    public function ubah($id)
    {
        $modelSiswa = new SiswaModel();
        $data['title'] = 'Edit Siswa | Data Siswa';
        $data['siswa'] = $modelSiswa->getSiswa($id)->getRow();
        echo view('crud-siswa/ubah', $data);
    }

    public function update()
    {
        $modelSiswa = new SiswaModel();
        $id = $this->request->getVar('nisn');
        $data = [
            'nisn'       => $this->request->getVar('nisn'),
            'nis'        => $this->request->getVar('nis'),
            'nama'       => $this->request->getVar('nama'),
            'alamat'     => $this->request->getVar('alamat'),
            'telp'       => $this->request->getVar('no_telp'),
            'id_kelas'   => $this->request->getVar('id_kelas'),
            'id_spp'     => $this->request->getVar('id_spp'),
        ];
        $modelSiswa->update($id, $data);
        return redirect()->to('/datasiswa');
    }

    public function hapus($id)
    {
        $modelSiswa = new SiswaModel();
        $modelSiswa->deleteSiswa($id);
        return redirect()->to('/datasiswa');
    }
}
