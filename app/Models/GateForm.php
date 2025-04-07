<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GateForm extends Model
{
    use HasFactory;

    // Specify the table if it's not the default 'gate_forms'
    protected $table = 'gate_forms';

    // If needed, you can also specify fillable fields here
    protected $fillable = ['name', 'email', 'department', 'branch'];
}

