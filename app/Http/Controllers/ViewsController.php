<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }
    
    public function showHome(){
        return view('house');
    }
    
    /* Vista /register */
    public function showRegister(){
        return view('register');
    }
    
    public function saveMemory(Request $request){
        return $request->all();
    }

    public function showMemories(){
        return view('memory');
    }
}
