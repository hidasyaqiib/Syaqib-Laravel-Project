<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); //merujuk kehalaman welcome.blade.php di folder resource/views

    }

    public function login(){
        return view('login'); //merujuk kehalaman login.blade.php di folder resource/views
        
    }

    public function about(){
        $data = [
            'name'      => 'Muhammad Tsaqib H',
            'address'   => 'Banyumas',
            'email'     => '541231146@student.smktelkom-pwt.sch.id'
        ];
        return view('about', $data); //merujuk kehalaman login.blade.php di folder resource/views
        
    }
}
