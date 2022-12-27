<?php

namespace App\Imports;

use App\Models\Lecture;
// use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
// use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;

class LecturesImport implements ToCollection, WithHeadingRow, WithValidation
{
    use Importable;

    // public function model(array $row)
    // {
    //     return new Lecture([
    //         'nidn' => $row['nidn'],
    //         'nama' => $row['name'],
    //         'status' => $row['status'],
    //         'department_id' => $row['department_id'],
    //     ]);
    // }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Lecture::create([
                'nidn' => $row['nidn'],
                'nama' => $row['name'],
                'status' => $row['status'],
                'department_id' => $row['department_id'],
            ]);
        }
    }

    public function headingRow(): int
    {
        return 2;
    }

    // public function onError(\Throwable $e)
    // {
    //     // Handle the exception how you'd like.
    // }

    public function rules(): array
    {
        return [
            'nidn' => 'required|digits:10|unique:lectures,nidn',
            'name' => 'required',
            'status' => 'required|numeric',
            'department_id' => 'required|numeric',
        ];
    }
}
