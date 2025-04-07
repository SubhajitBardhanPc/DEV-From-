<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamData extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'exam_data'; 

    // Specify the columns that can be mass-assigned
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'gender',
        'college_name',
        'university_name',
        'state',
        'city',
        'department',
        'dob',
        'image',
        'signature',
    ];

    // If you have timestamps (created_at and updated_at) columns, you can keep the following line
    public $timestamps = true;
}
