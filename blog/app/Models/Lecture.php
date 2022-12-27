<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table = 'dosen';
    protected $primaryKey = 'nidn';
    protected $fillable = ['nidn', 'nama', 'status', 'department_id'];

    public function students()
    {
        return $this->hasMany(Student::class, 'nidn', 'nidn');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id')
                    ->withDefault(['name' => 'Prodi belum dipilih']);
    }
}
