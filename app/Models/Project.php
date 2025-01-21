<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    // The attributes that are mass assignable
    protected $fillable = [
        'project_title', 'description1', 'description2', 'description3', 
        'testimonial_author', 'testimonial', 'testimonial_image', 
        'author_profession', 'project_image1', 'project_image2', 'project_image3', 
        'project_image4', 'project_image5', 'project_category', 'client', 
        'project_date', 'project_url'
    ];
    // Define relationship with Category model (Assuming project_category is a foreign key)
    public function category()
    {
        // Assuming project_category column is a foreign key in the 'projects' table referencing 'categories' table
        return $this->belongsTo(Category::class, 'project_category', 'id'); 
    }

    // You can also use this if 'project_category' is an ID and 'categories' table has 'id' as the primary key
//      public function category()
//      {
//      return $this->belongsTo(Category::class);
//  }

}
        

