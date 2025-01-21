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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->default('Default Heading'); // Set default heading
            $table->text('description')->default('Default Description'); // Set default description
            $table->string('background_image')->default('default-image.jpg'); // Set default background image
            $table->string('feature1_title')->default('Feature 1'); // Set default feature title
            $table->text('feature1_description')->default('Description for Feature 1'); // Set default feature description
            $table->string('feature2_title')->default('Feature 2'); // Set default feature title
            $table->text('feature2_description')->default('Description for Feature 2'); // Set default feature description
            $table->string('feature3_title')->default('Feature 3'); // Set default feature title
            $table->text('feature3_description')->default('Description for Feature 3'); // Set default feature description
            $table->string('feature4_title')->default('Feature 4'); // Set default feature title
            $table->text('feature4_description')->default('Description for Feature 4'); // Set default feature description
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
