<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts'; // Ensure this line is present
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
