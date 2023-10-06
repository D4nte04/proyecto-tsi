<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('home.login');
    }

    public function registrar(){
        return view('home.registro');
    }
    public function logear(){
        
    }
}
