<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use Session;

class LectureController extends Controller
{
    public function index()
    {
        $data['lectures'] = Lecture::all();

        return view('lecture.index')->with($data);
    }

    public function create()
    {
        return view('lecture.create');
    }

    public function store(Request $request)
    {
        Lecture::create($request->all());
        
        Session::flash('status', 'Input data berhasil!!!');
        return redirect('lecture');
    }
}
