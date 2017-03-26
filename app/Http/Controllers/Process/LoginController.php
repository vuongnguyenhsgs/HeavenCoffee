<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;

class LoginController extends Controller{
    
    protected function getLogin (){
        
        return view('Process.login');
    }
    
    protected function postLogin(){
        
    }
}