<?php

// app/Models/IncidentReport.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 
        'details', 
        'level_of_violation', 
        'intervention_program', 
        'violation_type_id', 
        'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function violationType()
    {
        return $this->belongsTo(ViolationType::class, 'violation_type_id');
    }
}
