<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'module_id', 'title', 'content', 'video_url', 'order'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function fileUploads()
    {
        return $this->hasMany(FileUploadLog::class);
    }

    public function questions()
    {
        return $this->hasMany(LessonQuestion::class);
    }
    public function lessonQuestions()
    {
        return $this->hasMany(LessonQuestion::class);
    }
}
