<?php

namespace Database\Seeders;

use App\Models\CourseCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/categories.json');
        $collection = collect(json_decode($json, true));

        $collection->each(function ($category) {
            CourseCategories::insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['slug']),
                'header' => $category['header'],
                'gfx' => $category['gfx'],
                'teaser' => $category['teaser'],
                'active' => $category['active'],
                'lang' => $category['lang'],
                'main' => $category['main'],
                'sorting' => $category['sorting'],
            ]);
        });
    }
}
