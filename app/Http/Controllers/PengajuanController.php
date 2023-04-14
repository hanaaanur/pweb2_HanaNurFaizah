<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    function form(){
        return view('form');
    }

    function organisasi(){
        return view('organisasi');
    }
}
