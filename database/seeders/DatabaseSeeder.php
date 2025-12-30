<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            CoursesTableSeeder::class,
            ModulesTableSeeder::class,
            LessonsTableSeeder::class,
            FileUploadLogsSeeder::class,
            StudentsTableSeeder::class,
            ProgressTableSeeder::class,
            RatingSeeder::class,
            PaymentsSeeder::class,
            QuizSeeder::class,
            QuestionsSeeder::class,
            QuizResultsSeeder::class,
            HistoryAnswersSeeder::class,
            CommentsSeeder::class,
        ]);
    }
}
