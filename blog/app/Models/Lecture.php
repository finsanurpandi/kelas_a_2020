<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    // protected $table = 'dosen';
    protected $primaryKey = 'nidn';
    protected $fillable = ['nidn', 'nama', 'status'];
}
