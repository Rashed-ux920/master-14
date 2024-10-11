<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class viewscontroller extends Controller
{
    public function index1(){

        return view('userfront.userpages.about');

    }
    public function index2(){
        return view('userfront.userpages.service');
    }
    public function index3(){
        return view('userfront.userpages.project');
    }
    public function index4(){
        return view('userfront.userpages.feature');
    }
    public function index5(){
        return view('userfront.userpages.quote');
    }
    public function index6(){
        return view('userfront.userpages.ourteam');
    }
    public function index7(){
        return view('userfront.userpages.testimonial');
    }
    public function index8(){
        return view('userfront.userpages.404page');
    }
}
