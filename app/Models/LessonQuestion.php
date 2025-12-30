<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonQuestion extends Model
{
    protected $fillable = [
        'lesson_id',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
        'mark',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
