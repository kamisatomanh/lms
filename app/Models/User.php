<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'email', 'password', 'phone', 'birthday',
        'role', 'avatar', 'bio'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResult::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function fileUploads()
    {
        return $this->hasMany(FileUploadLog::class);
    }
}
