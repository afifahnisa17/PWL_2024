<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang Afifah';
    }

    public function about(){
        return 'Nama: Afifah Khoirunnisa, NIM: 2341720250';
    }

    public function article($id){
        return view('article', ['id'=>$id]);
    }


}
