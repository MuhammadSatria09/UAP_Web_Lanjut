<?php

namespace App\Controllers;

class Home extends BaseController
{
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
  

}

