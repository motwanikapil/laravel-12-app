<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController2 extends Controller
{
    function getStudents() {
        $test_fun = new \App\Models\Student;
        $test_fun->testFun();
        $students = \App\Models\Student::all();
        return view('students', ['students'=>$students]);
    }
}
