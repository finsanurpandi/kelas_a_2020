<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

// Mail
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::with('lecture')->get();
        $data['department'] = Student::with('department')->where('npm', '5520120446')->first();

        return view('student.index')->with($data);
    }

    public function email()
    {
        $user = User::find(1);

        Mail::to('finsa@unsur.ac.id')->send(new TestMail($user));

        return redirect()->back();
    }
    
}
