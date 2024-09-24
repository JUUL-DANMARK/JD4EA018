<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/categories.json');
        $collection = collect(json_decode($json, true));

        $collection->each(function ($category) {
            Category::insert([
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
