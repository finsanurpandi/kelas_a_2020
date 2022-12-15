<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::with('lecture')->get();
        $data['department'] = Student::with('department')->where('npm', '5520120446')->first();

        return view('student.index')->with($data);
    }
    
}
