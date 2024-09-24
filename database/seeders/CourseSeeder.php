<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/courses.json');
        $collection = collect(json_decode($json, true));

        $collection->each(function ($course) {
            Courses::insert([
                'course_categories_id' => $course['category_id'],
                'name' => $course['name'],
                'title' => $course['title'],
                'slug' => Str::slug($course['name']),
                'description' => $course['description'],
            ]);
        });
    }
}
