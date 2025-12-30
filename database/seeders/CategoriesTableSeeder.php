<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Web Development', 'description' => 'Learn to build websites'],
            ['category_name' => 'Mobile Apps', 'description' => 'Android & iOS programming'],
            ['category_name' => 'UI/UX Design', 'description' => 'Design beautiful interfaces'],
            ['category_name' => 'Data Science', 'description' => 'Data analysis and visualization'],
            ['category_name' => 'Digital Marketing', 'description' => 'SEO, SEM, and more'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
