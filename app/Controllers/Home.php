<?php

namespace App\Controllers;
use App\Models\KatalogModel;

class Home extends BaseController
{

    public $katalogModel;

    public function __construct(){
        $this->katalogModel = new KatalogModel();
    }

    public function index()
    {
        if(in_groups('Admin')){
            return view('home_admin');
        }
        if(in_groups('Worker')){
            return view('home_karyawan');
        }
        if(in_groups('Customer')){
            return view('home_customer');
        }
    }

    public function home_admin(){
        return view('home_admin');
    }
    public function home_karyawan(){
        return view ('home_karyawan');
    }
    public function home_customer(){
        return view ('home_customer');
    }
    public function login(){
        return view('login');
    }
    public function dashboard_admin(){
        return view('dashboard_admin');
    }
    public function transaksi(){
        return view('transaksi');
    }

    public function dashboard_karyawan(){
        return view('dashboard_karyawan');
    }

    public function register(){
        return view('register');
    }
  
    public function dashboard(){
        return view ('dashboard_customer');
    }

    public function catalogue(){

        $katalog = $this->katalogModel->getKatalog();

        $data = [
            'katalog' => $katalog,
        ];

        return view ('catalogue_customer', $data);
    }
  
    public function createKatalog(){
        return view ('addkatalog');
    }

    public function saveKatalog(){
        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $this->katalogModel->saveKatalog([
            'nama_produk' => $this->request->getVar('nama_produk'),       
            'harga' => $this->request->getVar('harga'),
            'foto' => $foto
        ]);
       
        return redirect()->to(base_url('/catalogue'));
    }

    public function editKatalog($id){
        $katalog = $this->katalogModel->getKatalog($id);

        $data = [
            'katalog' => $katalog,
        ];

        return view('editkatalog',$data);
    }

    public function updateKatalog($id){
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
        ];

        if($foto->isValid()) {
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);

                $data['foto'] = $foto_path;
            }
        }

        $result = $this->katalogModel->updateKatalog($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/catalogue'));
    }

    public function deleteKatalog($id){
        $result = $this->katalogModel->deleteKatalog($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        return redirect()->to(base_url('/catalogue'))
            ->with('success', 'Berhasil menghapus data');
    }


}

