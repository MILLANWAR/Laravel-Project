<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolled_subject extends Model
{
    use HasFactory;
    protected $table = 'enrolled_subjects';

    protected $fillable = [
            'subjectcode',
            'description',
            'units',
            'schedule',
        
    ];
}

