<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('abbr')->nullable();
            $table->string('gfx')->nullable();
            $table->string('teaser')->nullable();
            $table->string('tooltip')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('calendar_name')->nullable();
            $table->boolean('active')->nullable();
            $table->char('lang')->default('da')->nullable();
            $table->char('days', 10)->nullable();
            $table->char('price')->nullable();
            $table->decimal('price_factor', 10, 6)->nullable();
            $table->boolean('vat')->nullable();
            $table->boolean('type')->nullable();
            $table->boolean('main')->nullable();
            $table->text('description')->nullable();
            $table->text('secondary')->nullable();
            $table->string('url')->nullable();
            $table->smallInteger('sorting')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
