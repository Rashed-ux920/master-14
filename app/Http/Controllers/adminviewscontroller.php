<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminviewscontroller extends Controller
{
    public function index1(){
        return view('dashboard');
    }
}
