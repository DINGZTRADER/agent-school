<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function guardians()
    {
        return $this->belongsToMany(Guardian::class, 'student_guardian');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
