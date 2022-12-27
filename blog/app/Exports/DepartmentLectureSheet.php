<?php

namespace App\Exports;

use App\Models\Lecture;
use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DepartmentLectureSheet implements FromArray, WithHeadings, WithTitle, ShouldAutoSize
{
    private $prodi;

    public function __construct($prodi)
    {
        $this->prodi = $prodi;
    }

    public function array(): array
    {
        $lectures = Lecture::where('department_id', $this->prodi)->get();
        $lectures = $lectures->toArray();
        $dataLectures = array();

        for($i=0; $i<count($lectures); $i++)
        {
            $dataLectures[$i]['nidn'] = $lectures[$i]['nidn'];
            $dataLectures[$i]['nama'] = $lectures[$i]['nama'];
            $dataLectures[$i]['status'] = ($lectures[$i]['status'] == 1)? 'AKTIF' : 'TIDAK AKTIF';
        }

        return $dataLectures;
    }

    public function headings(): array
    {
        return [
            'NIDN',
            'NAMA',
            'STATUS',
        ];
    }

    public function title(): string
    {
        $department = Department::find($this->prodi);
        return ucwords($department->name);
    }
}
