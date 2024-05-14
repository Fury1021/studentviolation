<?php

// app/Models/IncidentReport.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 
        'violation_type_id', 
        'date', 
        'details', 
        'level_of_violation'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function violationType()
    {
        return $this->belongsTo(ViolationType::class);
    }
}


