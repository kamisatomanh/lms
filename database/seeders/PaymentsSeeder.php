<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\User;
use App\Models\Course;

class PaymentsSeeder extends Seeder
{
    public function run(): void
    {
        $student = User::where('role', 'st')->first();
        $course = Course::first();

        Payment::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'amount' => 200000,
            'payment_method' => 'VNPAY',
            'status' => 'success',
            'paid_at' => now()
        ]);
    }
}
