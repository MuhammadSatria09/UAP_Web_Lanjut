<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
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
    public function dashboard_karyawan(){
        return view('dashboard_karyawan');
    }
}

