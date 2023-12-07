<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsScore extends Model
{
    use HasFactory;

    protected $table = 'StudentsScore';

    protected $fillable  = [
        'student_name',
        'score'
    ];
}
