<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return 'Program Karir';
    }

    public function magang(){
        return 'Program Magang';
    }

    public function kunjungan(){
        return 'Program Kunjungan Industri';
    }
}
