<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'heading',
        'description',
        'background_image',
        'feature1_title',
        'feature1_description',
        'feature2_title',
        'feature2_description',
        'feature3_title',
        'feature3_description',
        'feature4_title',
        'feature4_description',
    ];
}
