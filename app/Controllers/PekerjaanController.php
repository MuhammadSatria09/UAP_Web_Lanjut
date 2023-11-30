<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PekerjaanModel;
class PekerjaanController extends BaseController
{
    public function index()
    {
        $data =[
            'pekerjaan' => $this->pekerjaanModel->getPekerjaan(),
        ];
        dd($data);
        return view ('dashboard_karyawan', $data);
    }
    public function create()
    {
        $pekerjaanModel = new PekerjaanModel ();

        $pekerjaan = $pekerjaanModel->getKelas ();

        $data = [
            'pekerjaan' => $pekerjaan,
        ];

        return view ('create_user', $data);
    }
    public function store()
    {
        $this->pekerjaanModel->savePekerjaan([
            'id_pekerja' => $this->request->getVar('id_pekerja'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'status' => $this->request->getVar('status'),
        ]);

        return redirect ()->to('/pekerjaan');
    }
}
