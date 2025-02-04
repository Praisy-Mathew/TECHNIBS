<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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

class AdminController extends Controller
{
 // In App\Http\Controllers\AdminController.php
public function index()
{    
    $categories = Category::all();
    return view('admin.index-2',compact('categories')); // Return the admin dashboard view
}

public function Testimonials()
{
    $testimonials = Testimonial::all();
    $categories = Category::all();
    return view('admin.testimonials', compact('testimonials','categories'));
}
public function showClients()
{
    $categories = Category::all(); 
    $clients = Client::all();
    return view('admin.clients', compact('clients','categories'));
}
public function servicesPage()
{ 
    $categories = Category::all();
    $services = Service::all(); // Get all services from the database
    return view('admin.services-page', compact('services','categories'));
}

public function expertise()
    {   
        $categories = Category::all();
        $expertises = Expertise::all(); // Get all expertise entries from the database
        return view('admin.expertise', compact('expertises','categories'));
    }
    public function offerings()
    {   
        $categories = Category::all();
        $offerings = AdminOffering::all(); // Get all offerings entries from the database
        return view('admin.offering', compact('offerings','categories')); // Pass the offerings to the view
    }
    public function projects()
    {
        $projects = Project::all();
        $categories = Category::all(); // Fetch all categories from the database
        return view('admin.project', compact('categories','projects')); // Pass categories to the view
    }
    public function showProjectsByCategory($category)
{
    // Fetch projects based on the selected category ID
    $projects = Project::where('project_category', $category)->get(); 
    $categories = Category::all(); 
    return view('admin.project', compact('projects','categories')); // Pass filtered projects to the view
}

   
        
    // Display all contacts for admin
    public function showContacts()
    {
        // Get all contact messages from the database
        $categories = Category::all(); 
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts','categories')); // Pass contacts to the view
    }

    public function destroy($id)
{
    $contact = Contact::findOrFail($id); // Find the contact by ID
    $contact->delete(); // Delete the contact

    return redirect()->route('admin.contact.index')->with('success', 'Message deleted successfully.');
}

public function testimonialsStore(Request $request)
{
    // Validate the input data
    $validatedData = $request->validate([
        'author' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonials', 'public');
        $validatedData['image'] = $imagePath;
    }

    // Create a new testimonial record
    Testimonial::create($validatedData);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Testimonial added successfully.');
}

// Update an existing testimonial
public function testimonialsUpdate(Request $request, $id)
{
    // Validate the input data
    $request->validate([
        'author' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find the testimonial by ID
    $testimonial = Testimonial::findOrFail($id);
    $testimonial->author = $request->author;
    $testimonial->content = $request->content;

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        // Delete the old image if exists
        if ($testimonial->image) {
            Storage::delete('public/' . $testimonial->image);
        }

        // Store the new image and update the testimonial
        $imagePath = $request->file('image')->store('testimonials', 'public');
        $testimonial->image = $imagePath;
    }

    // Save the updated testimonial record
    $testimonial->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Testimonial updated successfully.');
}

// Delete a testimonial
public function testimonialsDestroy($id)
{
    // Find the testimonial by ID
    $testimonial = Testimonial::findOrFail($id);

    // Delete the image from storage if it exists
    if ($testimonial->image) {
        Storage::delete('public/' . $testimonial->image);
    }

    // Delete the testimonial record
    $testimonial->delete();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Testimonial deleted successfully.');
}
public function storeClient(Request $request)
    {
        // Validate the client name input
        $validatedData = $request->validate([
            'clientName' => 'required|string|max:255',
        ]);

        // Create a new client record with the validated client name
        Client::create([
            'name' => $validatedData['clientName'],
        ]);

        // Redirect or return response with a success message
        return redirect()->back()->with('success', 'Client added successfully.');
    }
    public function updateClient(Request $request, Client $client)
{
    // Validate the input data
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Update the client
    $client->update([
        'name' => $request->name,
    ]);

    // Redirect back with success message
    return redirect()->route('admin.clients')->with('success', 'Client updated successfully');
}

public function destroyClient(Client $client)
{
    // Delete the client using the destroy method
    $client->destroy($client->id);

    // Redirect back with success message
    return redirect()->route('admin.clients')->with('success', 'Client deleted successfully');
}
public function storeServices(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',
        ]);

        // Create a new service record in the database
        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->icon = $request->input('icon');
        $service->save(); // Save the service to the database

        // Redirect back to the services page with a success message
        return redirect()->route('admin.services.page')->with('success', 'Service added successfully!');
    }
    public function updateService(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',  // Assuming icon is a string representing the icon class
        ]);
    
        // Find the service by ID and update it
        $service = Service::findOrFail($id);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->icon = $request->input('icon');
        $service->save();  // Save the updated service
    
        return redirect()->route('admin.services.page')->with('success', 'Service updated successfully!');
    }
    public function destroyService($id)
    {
        // Find the service by ID and delete it
        $service = Service::findOrFail($id);
        $service->delete();
    
        return redirect()->route('admin.services.page')->with('success', 'Service deleted successfully!');
    }
    public function storeExpertise(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'expertiseTitle' => 'required|string|max:255',
            'expertiseDescription' => 'required|string',
            'expertiseImage1' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage2' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage3' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage4' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage5' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
        ]);
    
        // Create a new expertise entry
        $expertise = new Expertise();
        $expertise->title = $request->expertiseTitle;
        $expertise->description = $request->expertiseDescription;
    
        // Handle image uploads
        if ($request->hasFile('expertiseImage1')) {
            $image1 = $request->file('expertiseImage1');
            $imageName1 = time() . '_' . $image1->getClientOriginalName();
            $image1->move(public_path('uploads/expertise'), $imageName1);
            $expertise->image1 = 'uploads/expertise/' . $imageName1;
        }
    
        if ($request->hasFile('expertiseImage2')) {
            $image2 = $request->file('expertiseImage2');
            $imageName2 = time() . '_' . $image2->getClientOriginalName();
            $image2->move(public_path('uploads/expertise'), $imageName2);
            $expertise->image2 = 'uploads/expertise/' . $imageName2;
        }
    
        if ($request->hasFile('expertiseImage3')) {
            $image3 = $request->file('expertiseImage3');
            $imageName3 = time() . '_' . $image3->getClientOriginalName();
            $image3->move(public_path('uploads/expertise'), $imageName3);
            $expertise->image3 = 'uploads/expertise/' . $imageName3;
        }
    
        if ($request->hasFile('expertiseImage4')) {
            $image4 = $request->file('expertiseImage4');
            $imageName4 = time() . '_' . $image4->getClientOriginalName();
            $image4->move(public_path('uploads/expertise'), $imageName4);
            $expertise->image4 = 'uploads/expertise/' . $imageName4;
        }
    
        if ($request->hasFile('expertiseImage5')) {
            $image5 = $request->file('expertiseImage5');
            $imageName5 = time() . '_' . $image5->getClientOriginalName();
            $image5->move(public_path('uploads/expertise'), $imageName5);
            $expertise->image5 = 'uploads/expertise/' . $imageName5;
        }
    
        // Save the expertise entry with the images stored in the respective columns
        $expertise->save();
    
        // Redirect back with success message
        return redirect()->route('admin.expertise')->with('success', 'Expertise added successfully!');
    }
    public function updateExpertise(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'expertiseTitle' => 'required|string|max:255',
            'expertiseDescription' => 'required|string',
            'expertiseImage1' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage2' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage3' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage4' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
            'expertiseImage5' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:5000',
        ]);
    
        // Find the expertise entry by ID
        $expertise = Expertise::findOrFail($id);
        $expertise->title = $request->expertiseTitle;
        $expertise->description = $request->expertiseDescription;
    
        // Handle image uploads and update respective columns
        if ($request->hasFile('expertiseImage1')) {
            $image1 = $request->file('expertiseImage1');
            $imageName1 = time() . '_' . $image1->getClientOriginalName();
            $image1->move(public_path('uploads/expertise'), $imageName1);
            $expertise->image1 = 'uploads/expertise/' . $imageName1;
        }
    
        if ($request->hasFile('expertiseImage2')) {
            $image2 = $request->file('expertiseImage2');
            $imageName2 = time() . '_' . $image2->getClientOriginalName();
            $image2->move(public_path('uploads/expertise'), $imageName2);
            $expertise->image2 = 'uploads/expertise/' . $imageName2;
        }
    
        if ($request->hasFile('expertiseImage3')) {
            $image3 = $request->file('expertiseImage3');
            $imageName3 = time() . '_' . $image3->getClientOriginalName();
            $image3->move(public_path('uploads/expertise'), $imageName3);
            $expertise->image3 = 'uploads/expertise/' . $imageName3;
        }
    
        if ($request->hasFile('expertiseImage4')) {
            $image4 = $request->file('expertiseImage4');
            $imageName4 = time() . '_' . $image4->getClientOriginalName();
            $image4->move(public_path('uploads/expertise'), $imageName4);
            $expertise->image4 = 'uploads/expertise/' . $imageName4;
        }
    
        if ($request->hasFile('expertiseImage5')) {
            $image5 = $request->file('expertiseImage5');
            $imageName5 = time() . '_' . $image5->getClientOriginalName();
            $image5->move(public_path('uploads/expertise'), $imageName5);
            $expertise->image5 = 'uploads/expertise/' . $imageName5;
        }
    
        // Save the updated expertise entry
        $expertise->save();
    
        // Redirect back with success message
        return redirect()->route('admin.expertise')->with('success', 'Expertise updated successfully!');
    }
    public function destroyExpertise($id)
    {
        // Find the expertise entry by ID
        $expertise = Expertise::findOrFail($id);
    
        // Delete the images from the server (if they exist)
        if ($expertise->image1 && file_exists(public_path($expertise->image1))) {
            unlink(public_path($expertise->image1));
        }
    
        if ($expertise->image2 && file_exists(public_path($expertise->image2))) {
            unlink(public_path($expertise->image2));
        }
    
        if ($expertise->image3 && file_exists(public_path($expertise->image3))) {
            unlink(public_path($expertise->image3));
        }
    
        if ($expertise->image4 && file_exists(public_path($expertise->image4))) {
            unlink(public_path($expertise->image4));
        }
    
        if ($expertise->image5 && file_exists(public_path($expertise->image5))) {
            unlink(public_path($expertise->image5));
        }
    
        // Delete the expertise entry from the database
        $expertise->delete();
    
        // Redirect back with success message
        return redirect()->route('admin.expertise')->with('success', 'Expertise deleted successfully!');
    }
   public function showAbout()
    {
        $about = About::first(); // Get the first record (assuming only one about page)
        $categories = Category::all(); 
        return view('admin.about', compact('about','categories'));
    }

    // Update Heading
    public function updateHeading(Request $request)
    {
        $about = About::first();
        $about->heading = $request->input('heading');
        $about->save();
        
        return redirect()->route('admin-about.show');
    }

    // Update Description
    public function updateDescription(Request $request)
    {
        $about = About::first();
        $about->description = $request->input('description');
        $about->save();
        
        return redirect()->route('admin-about.show');
    }

    // Update Image
    public function updateImage(Request $request)
{
    // Retrieve the first "About" record
    $about = About::first();

    // Validate the request to ensure that an image is provided and meets the file type and size restrictions
    $request->validate([
        'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5000', // Use the correct field name here
    ]);

    // Check if an image was uploaded
    if ($request->hasFile('background_image')) {
        // Store the image in the 'about-images' folder in the 'public' disk and get the path
        $imagePath = $request->file('background_image')->store('about-images', 'public');

        // Optionally delete the old image from storage if you want to remove it
        if ($about->background_image && file_exists(storage_path('app/public/' . $about->background_image))) {
            unlink(storage_path('app/public/' . $about->background_image)); // Delete the old image
        }

        // Update the background_image field with the new image path
        $about->background_image = $imagePath;
    }

    // Save the changes to the 'about' record
    $about->save();

    // Redirect back to the "show" page (or anywhere you need) with a success message
    return redirect()->route('admin-about.show')->with('success', 'Background image updated successfully!');
}

    // Update Feature 1
    public function updateFeature1(Request $request)
    {
        $about = About::first();
        $about->feature1_title = $request->input('title');
        $about->feature1_description = $request->input('description');
        $about->save();

        return redirect()->route('admin-about.show');
    }

    // Update Feature 2
    public function updateFeature2(Request $request)
    {
        $about = About::first();
        $about->feature2_title = $request->input('title');
        $about->feature2_description = $request->input('description');
        $about->save();

        return redirect()->route('admin-about.show');
    }

    // Update Feature 3
    public function updateFeature3(Request $request)
    {
        $about = About::first();
        $about->feature3_title = $request->input('title');
        $about->feature3_description = $request->input('description');
        $about->save();

        return redirect()->route('admin-about.show');
    }

    // Update Feature 4
    public function updateFeature4(Request $request)
    {
        $about = About::first();
        $about->feature4_title = $request->input('title');
        $about->feature4_description = $request->input('description');
        $about->save();

        return redirect()->route('admin-about.show');
    } 
    public function storeOffering(Request $request)
    {
        $offering = new AdminOffering();
        $offering->name = $request->name;
        $offering->subtitle = $request->subtitle;
        $offering->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $offering->image = $path;
        }

        $offering->feature1_title = $request->feature1_title;
        $offering->feature2_title = $request->feature2_title;
        $offering->feature3_title = $request->feature3_title;
        $offering->feature4_title = $request->feature4_title;

        $offering->save();

        return redirect('/adminofferings')->with('success', 'Offering added successfully.');
    }  
    
    
    // Update offering
    public function updateOffering(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'feature1_title' => 'nullable|string|max:255',
            'feature2_title' => 'nullable|string|max:255',
            'feature3_title' => 'nullable|string|max:255',
            'feature4_title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the offering by ID
        $offering = AdminOffering::findOrFail($id);
    
        // Update fields with new values
        $offering->name = $request->input('name');
        $offering->subtitle = $request->subtitle;
        $offering->description = $request->input('description');
        $offering->feature1_title = $request->input('feature1_title');
        $offering->feature2_title = $request->input('feature2_title');
        $offering->feature3_title = $request->input('feature3_title');
        $offering->feature4_title = $request->input('feature4_title');
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($offering->image && \Storage::disk('public')->exists($offering->image)) {
                \Storage::disk('public')->delete($offering->image);
            }
            // Store the new image in the public disk and update the image path
            $offering->image = $request->file('image')->store('offerings', 'public');
        }
    
        // Save updated offering to the database
        $offering->save();
    
        // Redirect back with a success message
        return redirect()->route('admin.offerings')->with('success', 'Offering updated successfully!');
    }
        
        
    // Destroy offering
    public function destroyOffering($id)
    {
        $offering = AdminOffering::findOrFail($id);
        $offering->delete();
    
        return redirect()->route('admin.offerings')->with('success', 'Offering deleted successfully!');
    }  
    public function gallery()
    {
        // Get all categories and galleries from the database
        $galleries = Gallery::all();
        $categories = Category::all();
    
        // Pass both galleries and categories to the view
        return view('admin.gallery', compact('galleries', 'categories'));
    }
    
    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'location' => 'required',
            'category' => 'required',
        ]);
    
        // Store the uploaded image
        $imagePath = $request->file('image')->store('gallery_images', 'public');
    
        // Create the new gallery item
        Gallery::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'location' => $request->location,
            'category' => $request->category,
        ]);
    
        // Redirect back to the gallery page with success message
        return redirect()->route('admin.gallery')->with('success', 'Gallery item added successfully.');
    }
    public function storeCategory(Request $request)
    {
        // Replace hyphens with spaces if needed for category name before storing
        $categoryName = str_replace('-', ' ', $request->name);
    
        // Validate the input
        $request->validate([
            'name' => 'required', // Ensure the name is provided
        ]);
    
        // Store the category
        Category::create([
            'name' => $categoryName // Use the modified category name
        ]);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Category added successfully.');
    }
    
    public function category()
    {
        $categories = Category::all(); // Get all categories from the database
        return view('admin.gallery', compact('categories')); // Pass the categories to the view
    }
    

       
    public function destroyCategory($id)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);
        
        // Delete the category
        $category->delete();
        
        // Redirect back with success message
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }          
    public function updateGallery(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|nullable',
            'location' => 'required',
            'category' => 'required',
        ]);
    
        $gallery = Gallery::findOrFail($id);
    
        // Update the gallery fields
        $gallery->title = $request->title;
        $gallery->location = $request->location;
        $gallery->category = $request->category;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery_images', 'public');
            $gallery->image_path = $imagePath;
        }
    
        $gallery->save();
    
        return redirect()->route('admin.gallery')->with('success', 'Gallery updated successfully.');
    }
    public function destroyGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
    
        return redirect()->route('admin.gallery')->with('success', 'Gallery deleted successfully.');
    }
    public function storeProject(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'project_title' => 'required|string|max:255',
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'testimonial_author' => 'required|string',
            'testimonial' => 'required|string',
            'author_profession' => 'required|string',
            'project_category' => 'required|string',
            'client' => 'required|string',
            'project_date' => 'required|date',
            'project_image1' => 'nullable|image',
            'project_image2' => 'nullable|image',
            'project_image3' => 'nullable|image',
            'project_image4' => 'nullable|image',
            'project_image5' => 'nullable|image',
            'testimonial_image' => 'nullable|image',
        ]);
    
        // Create new project entry
        $project = new Project();
        $project->project_title = $request->project_title;
        $project->description1 = $request->description1;
        $project->description2 = $request->description2;
        $project->description3 = $request->description3;
        $project->testimonial_author = $request->testimonial_author;
        $project->testimonial = $request->testimonial;
        $project->author_profession = $request->author_profession;
        $project->project_category = $request->project_category;
        $project->client = $request->client;
        $project->project_date = $request->project_date;
        $project->project_url = $request->project_url;
    
        // Handle image uploads
        if ($request->hasFile('project_image1')) {
            $project->project_image1 = $request->file('project_image1')->store('projects/images', 'public');
        }
        if ($request->hasFile('project_image2')) {
            $project->project_image2 = $request->file('project_image2')->store('projects/images', 'public');
        }
        if ($request->hasFile('project_image3')) {
            $project->project_image3 = $request->file('project_image3')->store('projects/images', 'public');
        }
        if ($request->hasFile('project_image4')) {
            $project->project_image4 = $request->file('project_image4')->store('projects/images', 'public');
        }
        if ($request->hasFile('project_image5')) {
            $project->project_image5 = $request->file('project_image5')->store('projects/images', 'public');
        }
        if ($request->hasFile('testimonial_image')) {
            $project->testimonial_image = $request->file('testimonial_image')->store('projects/testimonials', 'public');
        }
    
        // Save the project
        $project->save();
    
        return redirect()->back()->with('success', 'Project created successfully!');
    }
    public function updateProject(Request $request, $id)
{
    // Find the project by its ID
    $project = Project::findOrFail($id);

    // Validate input data (you can adjust validation as needed)
    $validated = $request->validate([
        'project_title' => 'required|string|max:255',
        'description1' => 'nullable|string',
        'description2' => 'nullable|string',
        'description3' => 'nullable|string',
        'testimonial_author' => 'nullable|string|max:255',
        'testimonial' => 'nullable|string',
        'author_profession' => 'nullable|string|max:255',
        'project_category' => 'required|exists:categories,id',
        'client' => 'nullable|string',
        'project_date' => 'required|date',
        'project_url' => 'nullable|url',
        // File validation if necessary
    ]);

    // Update the project fields with the validated input
    $project->project_title = $request->input('project_title');
    $project->description1 = $request->input('description1');
    $project->description2 = $request->input('description2');
    $project->description3 = $request->input('description3');
    $project->testimonial_author = $request->input('testimonial_author');
    $project->testimonial = $request->input('testimonial');
    $project->author_profession = $request->input('author_profession');
    $project->client = $request->input('client');
    $project->project_date = $request->input('project_date');
    $project->project_url = $request->input('project_url');
    $project->project_category = $request->input('project_category');

    // Handle file uploads if they exist
    if ($request->hasFile('testimonial_image')) {
        $project->testimonial_image = $request->file('testimonial_image')->store('testimonials');
    }
    if ($request->hasFile('project_image1')) {
        $project->project_image1 = $request->file('project_image1')->store('projects');
    }
    if ($request->hasFile('project_image2')) {
        $project->project_image2 = $request->file('project_image2')->store('projects');
    }
    if ($request->hasFile('project_image3')) {
        $project->project_image3 = $request->file('project_image3')->store('projects');
    }
    if ($request->hasFile('project_image4')) {
        $project->project_image4 = $request->file('project_image4')->store('projects');
    }
    if ($request->hasFile('project_image5')) {
        $project->project_image5 = $request->file('project_image5')->store('projects');
    }

    // Save the project
    $project->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Project updated successfully!');
}

    
    public function destroyProject($id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);
        
        
        // Delete the project from the database
        $project->delete();
    
        return redirect()->back()->with('success', 'Project deleted successfully!');
    }
           
        
}