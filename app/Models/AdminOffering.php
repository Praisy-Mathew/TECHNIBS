<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminOffering extends Model
{   
    protected $table = 'admin_offerings';
    protected $fillable = [
        'name',
        'subtitle',
        'description',
        'image',
        'feature1_title',
        'feature2_title',
        'feature3_title',
        'feature4_title',
    ];
}
