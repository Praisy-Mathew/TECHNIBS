<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $table = 'projectcategories'; 
    protected $fillable = ['name'];
}
