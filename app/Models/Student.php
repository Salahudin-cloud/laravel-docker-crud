<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class Student extends Model
{
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
