<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_list(){
        return view('student.list');
    }

    public function add_student(){
        return view('student.add');
    }

    public function update_student(){
        
    }

}
