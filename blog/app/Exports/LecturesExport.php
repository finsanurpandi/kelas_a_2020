<?php

namespace App\Exports;

use App\Models\lecture;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class LecturesExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return lecture::all();
    // }

    public function array(): array
    {
        $lectures = Lecture::with('department')->get();
        $lectures = $lectures->toArray();
        $dataLectures = array();

        for($i=0; $i<count($lectures); $i++)
        {
            $dataLectures[$i]['nidn'] = $lectures[$i]['nidn'];
            $dataLectures[$i]['nama'] = $lectures[$i]['nama'];
            $dataLectures[$i]['status'] = ($lectures[$i]['status'] == 1)? 'AKTIF' : 'TIDAK AKTIF';
            $dataLectures[$i]['department'] = $lectures[$i]['department']['name'];
        }

        return $dataLectures;
    }

    public function headings(): array
    {
        return [
            'NIDN',
            'NAMA',
            'STATUS',
            'PROGRAM STUDI',
        ];
    }
}
