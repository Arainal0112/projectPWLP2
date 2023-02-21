<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Arainal Aldiansyah (2141720042)';
    }

    public function article($id=1){
        return 'Halaman Artikel dengan ID '.$id;
    }
    
}
