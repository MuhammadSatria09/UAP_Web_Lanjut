<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\KatalogModel;
use App\Models\PenugasanModel;
use App\Models\UserModel;

class Home extends BaseController
{

    public $OrderModel;
    public $katalogModel;

    public $penugasanModel;

    public function __construct(){
        $this->katalogModel = new KatalogModel();

        $this->OrderModel = new OrderModel();
        $this->PenugasanModel = new PenugasanModel();
        $this->UserModel = New UserModel();
    }

    public function index()
    {
        if(in_groups('Admin') ){
            return view('home_admin');
        }
        if(in_groups('Worker') ){
            return view('home_karyawan');
        }
        if(in_groups('Customer')){
            return view('home_customer');
        }
    }

    public function dashboard(){
        if(in_groups('Admin') ){
            $data = [
                'orders' => $this->OrderModel->getOrderAll(),
                'penugasan' =>$this->PenugasanModel->getPenugasanAll(),
                
            ];

            return view('dashboard_admin',$data);
        }
        if(in_groups('Worker') ){
            $data = [
                'penugasan' => $this->PenugasanModel->getPenugasan()
                
            ];

            return view('dashboard_karyawan',$data);
        }
        if(in_groups('Customer')){
            $data = [
                'orders' => $this->OrderModel->getOrder()
            ];
    
            return view ('dashboard_customer',$data);
        }
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function catalogue(){

        $katalog = $this->katalogModel->getKatalog();

        $data = [
            'katalogs' => $katalog,
        ];

        return view ('catalogue_customer', $data);
    }

    
    public function order(){
        return view ('tambah_order');
    }

    public function StoreOrder(){
        $auth = service('authentication');
        $userId = $auth->id();

        
        $path = 'assets/uploads/img';

        if($this->request->getVar('foto')){
            $this->OrderModel-> saveOrder ([
                'nama_barang' => $this->request->getVar('nama_barang'),
                'customer_id' => $userId,
                'status' => $this->request->getVar('status'),
                'foto' => $this->request->getVar('foto'),
                
            ]);

            return redirect()->to('/dashboard');
        }else{
            $foto = $this->request->getFile('foto');
            $name = $foto->getRandomName();
    
            if($foto->move($path, $name)){
                $foto = base_url($path . '/' . $name);
            }
    
            $OrderModel = new OrderModel();
            
    
            $this->OrderModel-> saveOrder ([
                'nama_barang' => $this->request->getVar('nama_barang'),
                'customer_id' => $userId,
                'status' => $this->request->getVar('status'),
                'foto' => $foto,
                
            ]);
        }

        
       
        return redirect()->to('/dashboard');
    }

    
    public function StoreAssign(){
        
        $PenugasanModel = new PenugasanModel();
        

        $this->PenugasanModel-> savePenugasan([
            'id_order' => $this->request->getVar('id_order'),
            'id_pekerja' => $this->request->getPost('id_pekerja_new'),
            
        ]);
        return redirect()->to('/dashboard');
    }

    public function StoreWork(){
        
        $OrderModel = new OrderModel();

        if($this->request->getPost('status_update') == '1'){
        $this->OrderModel->updateStatus([
            'id_order' => $this->request->getPost('id_order'),
            'status' => $this->request->getPost('status_update')
        ]);

        return redirect()->to('/dashboard');
    }else{
        $this->OrderModel->updateStatus([
            'id_order' => $this->request->getPost('id_order'),
            'status' => $this->request->getPost('status_update')
        ]);
        $this->katalogModel->saveKatalog([
            'nama_produk' => $this->request->getVar('nama_barang'),       
            'harga' => $this->request->getVar('harga'),
            'foto' => $this->request->getPost('foto'),

        ]);
        $this->PenugasanModel->deletePenugasan([
            'id_order' => $this->request->getPost('id_order')
        ]);

        return redirect()->to('/dashboard');
        }
    
    }

    public function DeleteOrder(){
        $this->OrderModel->deleteOrder([
            'id_order' => $this->request->getPost('id_order')
        ]);

        return redirect()->to(base_url('/dashboard'));
    }
}

