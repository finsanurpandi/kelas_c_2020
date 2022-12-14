<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasManyThrough(
            Student::class, // class tujuan akhir
            Lecture::class, // class yang menghubungkan
            'department_id', // FK dari table lectures
            'nidn', // FK dari table students
            'id', // PK dari table departments
            'nidn' // PK dari table lectures
        );
    }
}
