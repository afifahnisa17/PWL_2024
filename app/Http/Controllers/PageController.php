<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang ';
    }

    public function about(){
        return 'Nama: Afifah Khoirunnisa, NIM: 2341720250';
    }

    public function articles($id){
        return 'Halaman Article dengan ID: ' . $id;
    }

}
