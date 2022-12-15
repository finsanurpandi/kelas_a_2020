<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'nidn', 'nidn');
    }

    public function department()
    {
        return $this->belongsToMany(Department::class);
    }
}
