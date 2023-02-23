<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
        return view('FrontEnd.home.home');
    }
}
