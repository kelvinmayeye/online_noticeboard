<?php
//All the Views will be Displayed with this Controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }

    public function getLogin(){
        return view('auth.index2');
    }

    public function getindex(){
        return view('auth.index2');
    }
}
