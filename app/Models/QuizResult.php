<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = [
        'user_id', 'quiz_id', 'score', 'status', 'taken_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(HistoryAnswer::class);
    }

    // Quan hệ với bảng history_answers
    public function historyAnswers()
    {
        return $this->hasMany(HistoryAnswer::class);
    }

    // Nếu muốn lấy luôn câu hỏi từng history
    public function questions()
    {
        return $this->hasManyThrough(
            Question::class,
            HistoryAnswer::class,
            'quiz_result_id', // FK của history_answers tới quiz_results
            'id',             // PK của questions
            'id',             // PK của quiz_results
            'question_id'     // FK của history_answers tới questions
        );
    }


}
