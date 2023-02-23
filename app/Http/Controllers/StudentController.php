<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class StudentController extends Controller
{
    public function viewDashboard(){
        if(Gate::allows('isStudent')){
            return view('Backend.Student.dashboard');
        }
        return view('Backend.Dashboard.dashboard');
    }
}
