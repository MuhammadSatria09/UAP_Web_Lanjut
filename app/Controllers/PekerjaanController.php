<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\PekerjaanModel;

class PekerjaanController extends BaseController
{
    public function __construct()
    {
        helper('form'); // Load the form helper
    }

    public function index()
    {
        $model = new PekerjaanModel();
        $data['list_pekerjaan'] = $model->getPekerjaan();
        return view('dashboard_karyawan/index', $data);
    }

    public function create()
    {
        $pekerjaanModel = new PekerjaanModel();
        $orderModel = new OrderModel();
        $data['list_order'] = $orderModel->findAll();
        $data['statusOptions'] = $pekerjaanModel->statusOptions();
        return view('dashboard_karyawan/create', $data);
    }

    public function store()
    {
        $pekerjaanModel = new PekerjaanModel();
        $orderModel =  new OrderModel();
        $order = $orderModel->find($this->request->getVar('id_order'));
        $authentication = service('authentication');
        $userInfo = $authentication->user();
        $userId = $userInfo->id;
        $data = [
            'id_order' => $order['id_order'], // id dari tabel order
            'nama_barang' => $order['nama_barang'], // nama dari tabel order
            'status' => $this->request->getVar('status'), // belum dikerjaan, proses, selesai
            'id_pekerja' => $userId, //id login
        ];
        $pekerjaanModel->insert($data);
        return redirect()->to('/dashboard_karyawan');
    }

    public function edit($id)
    {
        $orderModel = new OrderModel();
        $pekerjaanModel = new PekerjaanModel();
        $data['pekerjaan'] = $pekerjaanModel->find($id);
        $data['list_order'] = $orderModel->findAll();
        $data['statusOptions'] = $pekerjaanModel->statusOptions();
        return view('dashboard_karyawan/edit', $data);
    }

    public function update($id)
    {
        $pekerjaanModel = new PekerjaanModel();
        $orderModel =  new OrderModel();
        $order = $orderModel->find($this->request->getVar('id_order'));
        $authentication = service('authentication');
        $userInfo = $authentication->user();
        $userId = $userInfo->id;
        $data = [
            'id_order' => $order['id_order'], // id dari tabel order
            'nama_barang' => $order['nama_barang'], // nama dari tabel order
            'status' => $this->request->getVar('status'), // belum dikerjaan, proses, selesai
            'id_pekerja' => $userId, //id login
        ];
        $pekerjaanModel->update($id, $data);
        return redirect()->to('/dashboard_karyawan');
    }

    public function delete($id)
    {
        $pekerjaanModel = new PekerjaanModel();
        $pekerjaanModel->delete($id);
        return $this->response
            ->setStatusCode(200) // Kode status HTTP OK
            ->setJSON(['status' => 200, 'message' => 'Data berhasil dihapus']);
    }
}
