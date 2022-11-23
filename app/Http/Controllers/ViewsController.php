<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    
    public function saveMemory(JournalRequest $request){
        return Redirect::route('register')
            ->with('success', 'Form was send succesfully')
            ->with('title', $request->title);

    }

    public function showMemories(){
        return view('memory');
    }
}
