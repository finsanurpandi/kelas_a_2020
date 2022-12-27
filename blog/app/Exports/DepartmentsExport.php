<?php

namespace App\Exports;

use App\Models\Lecture;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class DepartmentsExport implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $prodi = [1, 2, 3];
        $sheets = [];

        for ($i=0; $i<count($prodi); $i++){
            $sheets[] = new DepartmentLectureSheet($prodi[$i]);
        }

        return $sheets;
    }
}
