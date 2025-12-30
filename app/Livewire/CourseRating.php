<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class CourseRating extends Component
{
    public Course $course;

    public $ratingValue = 0;
    public $comment = '';

    public $average = 0;
    public $total = 0;
    public $canRate = false;

    public function mount(Course $course)
    {
        $this->average = Rating::where('course_id', $this->course->id)
            ->avg('rating') ?? 0;
        $this->course = $course;
        $this->loadRating();
    }

    public function loadRating()
    {
        $this->average = Rating::where('course_id', $this->course->id)
            ->avg('rating') ?? 0;

        $this->total = Rating::where('course_id', $this->course->id)->count();

        $this->canRate = Auth::check() &&
            !Rating::where('course_id', $this->course->id)
                ->where('user_id', Auth::id())
                ->exists();
    }

    public function submit()
    {
        $this->validate([
            'ratingValue' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        Rating::create([
            'user_id' => Auth::id(),
            'course_id' => $this->course->id,
            'rating' => $this->ratingValue,
            'comment' => $this->comment,
        ]);

        $this->ratingValue = 0;
        $this->comment = '';

        $this->loadRating();

        session()->flash('success', 'Đánh giá khóa học thành công');
    }

    public function render()
    {
        return view('livewire.course-rating', [
            'ratings' => Rating::with('user')
                ->where('course_id', $this->course->id)
                ->latest()
                ->get()
        ]);
    }
}
