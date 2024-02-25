<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student_list(){
        return view('student.list');
    }

    public function add_student(){
        return view('student.add');
    }

    public function add_student_loading(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'class' => 'required'
        ]);

        $student = new Student();
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->class = $request->class;
        $student->save();

        return redirect('/add')->with('status', 'The student has been added successfully !!');
    }

}
