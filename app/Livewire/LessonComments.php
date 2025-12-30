<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class LessonComments extends Component
{
    public $lessonId;
    public $comment = '';
    public $reply = [];
    public $replyingTo = null;

    protected $rules = [
        'comment' => 'required|string|min:1'
    ];

    public function mount($lessonId)
    {
        $this->lessonId = $lessonId;
    }

    public function addComment()
    {
        $this->validate();

        Comment::create([
            'user_id' => Auth::id(),
            'lesson_id' => $this->lessonId,
            'comment' => $this->comment,
            'level' => 0,
            'parent_id' => null,
        ]);

        $this->comment = '';
    }

    public function replyComment($parentId)
    {
        if (!isset($this->reply[$parentId]) || trim($this->reply[$parentId]) === '') {
            return;
        }

        Comment::create([
            'user_id' => Auth::id(),
            'lesson_id' => $this->lessonId,
            'comment' => $this->reply[$parentId],
            'level' => 1,
            'parent_id' => $parentId,
        ]);

        $this->reply[$parentId] = '';
        $this->replyingTo = null;
    }

    public function render()
    {
        $comments = Comment::with(['user', 'replies.user'])
            ->where('lesson_id', $this->lessonId)
            ->whereNull('parent_id')
            ->latest()
            ->get();

        return view('livewire.lesson-comments', compact('comments'));
    }
}
