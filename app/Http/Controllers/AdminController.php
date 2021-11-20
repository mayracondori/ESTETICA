<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 
    public function index(){
        //metodo inicial
        return view('admin.index');
    }
    
    public function prueba(){
        //metodo inicial
        return view('admin.prueba');
    }
    public function index1(){
        //metodo inicial
        return view('admin.index1');
    }
    public function plantilla(){
        //metodo inicial
        return view('admin.plantilla');
    }
 
}
