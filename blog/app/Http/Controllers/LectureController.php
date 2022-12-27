<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Department;
use App\Http\Requests\StoreLectureRequest;
use Illuminate\Support\Facades\Crypt;
use Session;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use PDF;

use Excel;
use App\Exports\LecturesExport;
use App\Imports\LecturesImport;
use App\Exports\DepartmentsExport;

class LectureController extends Controller
{
    public function index()
    {
        $data['lectures'] = Lecture::all();
        $data['department'] = Department::find(3)->student;

        $data['user'] = Auth::user();

        return view('lecture.index')->with($data);
    }

    public function create()
    {
        $data['departments'] = Department::pluck('name', 'id');
        return view('lecture.create')->with($data);
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
        $data['departments'] = Department::pluck('name', 'id');
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

    // relationship
    public function student($id)
    {
        $id = Crypt::decryptString($id);
        // $data['students'] = Lecture::find($id)->students;
        $data['students'] = Lecture::findOrFail($id)->students()->orderBy('nama', 'asc')->get();
        return view('lecture.student')->with($data);
    }

    public function markAsRead(Request $request)
    {
        DB::table('notifications')->where('id', $request->id)
                    ->update([
                        'read_at' => now()
                    ]);
    }

    // PDF
    public function pdf()
    {
        $data['lectures'] = Lecture::with('department')->get();
        $pdf = PDF::loadview('lecture.pdf', $data);

        return $pdf->stream('coba_pdf.pdf');
    }

    // EXCEL
    public function export()
    {
        return Excel::download(new DepartmentsExport, 'lectures.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new LecturesImport, $request->file('file'));

        Session::flash('status', 'Data berhasil di import');   

        return redirect()->back();
    }
}
