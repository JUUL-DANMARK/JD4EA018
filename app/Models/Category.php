<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\View\View;

class CourseCategories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];

    public function show(string $slug): View
    {
        return view('category');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Courses::class);
    }
}
