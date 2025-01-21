<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->text('description1');
            $table->text('description2');
            $table->text('description3');
            $table->string('testimonial_author');
            $table->text('testimonial');
            $table->string('testimonial_image')->nullable();
            $table->string('author_profession');
            $table->string('project_image1')->nullable();
            $table->string('project_image2')->nullable();
            $table->string('project_image3')->nullable();
            $table->string('project_image4')->nullable();
            $table->string('project_image5')->nullable();
            $table->string('project_category');
            $table->string('client');
            $table->date('project_date');
            $table->string('project_url')->nullable();  // Make project_url nullable if it's optional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
