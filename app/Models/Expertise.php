<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $table = 'expertises';
    protected $fillable = [
        'title',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
}
