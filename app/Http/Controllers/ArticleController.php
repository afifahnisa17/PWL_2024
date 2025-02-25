<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        return 'Halaman ini adalah artikel: '. $id;
    }
}

?>

