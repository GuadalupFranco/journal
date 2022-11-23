<?php

namespace App\Http\Controllers;

class ViewsController extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }
    
    public function showHome(){
        return view('house');
    }

}
