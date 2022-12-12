<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Requests\StoreLectureRequest;
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

    public function store(StoreLectureRequest $request)
    {
        // $validated = $request->validate([
        //     'nidn' => 'required|min:10|numeric',
        //     'nama' => 'required|min:5'
        // ]);

        Lecture::create($request->validated());
        
        Session::flash('status', 'Input data berhasil!!!');
        return redirect('lecture');
    }

    public function edit($id)
    {
        $data['lecture'] = Lecture::find($id);
        return view('lecture.edit')->with($data);
    }

    public function update(Request $req, $nidn)
    {
        $lecture = Lecture::find($nidn);
        $lecture->update($req->all());

        Session::flash('status', 'Ubah data berhasil!!!');
        return redirect('lecture');
    }

    public function destroy($id)
    {
        Lecture::destroy($id);

        Session::flash('status', 'Hapus data berhasil!!!');
        return redirect()->back();
    }

    public function recycle_bin()
    {
        $data['trash'] = Lecture::onlyTrashed()->get();

        return view('lecture.trash')->with($data);
    }

    public function restore($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->restore();
        Session::flash('status', 'Data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function restore_all()
    {
        Lecture::onlyTrashed()->restore();
        Session::flash('status', 'Semua data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function delete($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->forceDelete();
        Session::flash('status', 'Data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }

    public function empty()
    {
        Lecture::onlyTrashed()->forceDelete();
        Session::flash('status', 'Semua data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }
}
