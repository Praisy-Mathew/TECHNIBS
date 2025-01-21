<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Service;
use App\Models\Expertise;
use App\Models\About;
use App\Models\AdminOffering;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Project;

class BaseController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $clients = Client::all();
        $expertises = Expertise::all(); 
        $about = About::first();
        $offerings = AdminOffering::all(); 
        $categories = Category::all();
        
        return view('user.index',compact('testimonials','clients','expertises','about','offerings','categories'));
    }   
    public function about()
{
    $testimonials = Testimonial::all();
    $categories = Category::all();
    return view('user.about', compact('testimonials','categories'));
}
public function services()
{    
    $testimonials = Testimonial::all();
    $services = Service::all(); // Get all services from the database
    $categories = Category::all();
    return view('user.services', compact('services','testimonials','categories'));
}
public function gallery()
{
    $categories = Category::all(); // Assuming you have a Category model
    $galleries = Gallery::all(); // Adjust as needed for pagination
    $categories = Category::all();
    return view('user.gallery', compact('categories', 'galleries','categories'));
}
 public function galleryByCategory($category)
 {
     $categories = Category::all();
     $galleries = Gallery::where('category', $category)->get();
     return view('user.gallery', compact('categories', 'galleries'));
 }
 public function projects()
{
    $projects = Project::all(); // Fetch all projects
    $categories = Category::all(); // Fetch all categories from the database
    return view('user.projects', compact('categories', 'projects')); // Pass categories and projects to the view
}

// Method to filter projects by category
public function showProjectsByCategory($category)
{
    // Fetch projects based on the selected category
    $projects = Project::where('project_category', $category)->get(); 
    $categories = Category::all(); // Fetch all categories again
    return view('user.projects', compact('projects', 'categories')); // Pass filtered projects and categories to the view
}
public function showProjectDetails($id)
{   
    $categories = Category::all();
    $project = Project::findOrFail($id); // Fetch project by ID
    return view('user.project-details', compact('project','categories'));
}

public function contact()
{
    $categories = Category::all();
    return view('user.contact', compact('categories'));
}



    public function storeContact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Create a new contact entry in the database
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);

        // Redirect back with a success message
        return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    }
}
