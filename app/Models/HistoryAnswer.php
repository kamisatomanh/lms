<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryAnswer extends Model
{
    protected $fillable = [
        'quiz_result_id', 'question_id', 'selected'
    ];

    public function quizResult()
    {
        return $this->belongsTo(QuizResult::class, 'quiz_result_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

