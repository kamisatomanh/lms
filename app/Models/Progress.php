<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'enrollment_id', 'lesson_id', 'completed', 'completed_at'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Student::class, 'enrollment_id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
