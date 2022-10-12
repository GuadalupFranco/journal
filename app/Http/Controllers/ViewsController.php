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

    public function showRegister(){
        return view('register');
    }

    public function showMemory(){
        return view('memory');
    }
}
