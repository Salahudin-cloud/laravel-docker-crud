<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        "gender",
        'email',
        'phone_number',
        'address',
        'enrollment_year',
        'date_of_birth'
    ];
}
