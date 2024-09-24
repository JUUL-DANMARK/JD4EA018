<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'categories' => Category::all(),
    ]);
});

Route::get('/{category}', [CategoryController::class, 'show'])->name('category');

Route::get('/{category}/{course?}', function () {
    return view('category.course.show', [
        'category' => Category::where('slug', request()->segment(1))->firstOrFail(),
        'course' => Course::where('slug', request()->segment(2))->firstOrFail(),
    ]);
})->where('category', '^[a-zA-Z0-9-_\/]+$');
