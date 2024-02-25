<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student_list(){

        $students = Student::paginate(1);
        return view('student.list', compact('students'));
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

    public function update_student($id){

        $students = Student::find($id);
        return view('student.update', compact('students'));
    }

    public function update_student_loading(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'class' => 'required'
        ]);

        $student = Student::find($request->id);
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->class = $request->class;
        $student->update();

        return redirect('/student')->with('status', 'The student has been successfully edited !!');
    }

    public function delete_student($id){

        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('status', 'The student has been successfully deleted !!');
    }


}
