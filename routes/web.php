<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;

Route::get('/', [BaseController::class, 'index'])->name('index');
// Route::get('/', function () {
//     return view('user.index'); 
// });
Route::get('/about', [BaseController::class, 'about'])->name('about');
// Route::get('/about', function () {
//     return view('user.about'); 
// });
Route::get('/contact', [BaseController::class, 'contact'])->name('contact');
// Route::get('/contact', function () {
//     return view('user.contact'); 
// });
Route::get('/gallery', [BaseController::class, 'gallery'])->name('gallery');
// Route::get('/gallery', function () {
//     return view('user.gallery'); 
// });

Route::get('/project-details', function () {
    return view('user.project-details'); // Project details page route
});

Route::get('/projects', [BaseController::class, 'projects'])->name('projects');
// Route::get('/projects', function () {
//     return view('user.projects'); // Projects page route
// });
Route::get('/services', [BaseController::class, 'services'])->name('services');
// Route::get('/services', function () {
//     return view('user.services'); 
// });

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Route::get('/admin', function () {
//     return view('admin.index-2');
// });
Route::get('/adminabout', [AdminController::class, 'showAbout'])->name('admin.about');

// Route::get('/adminabout', function () {
//     return view('admin.about'); 
// });

// Route::get('/adminclients', function () {
//     return view('admin.clients'); 
// });
Route::get('/adminclients', [AdminController::class, 'showClients'])->name('admin.clients');


Route::get('/admincontact', function () {
    return view('admin.contact'); // Admin Contact page route
});

Route::get('/adminexpertise', [AdminController::class, 'expertise'])->name('admin.expertise');
// Route::get('/adminexpertise', function () {
//     return view('admin.expertise'); 
// });

// Route::get('/admingallery', function () {
//     return view('admin.gallery'); 
// });
// Route::get('/adminprojects', [AdminController::class, 'projects'])->name('admin.projects');
// Route::get('/adminproject', function () {
//     return view('admin.project');
// });
Route::get('/adminofferings', [AdminController::class, 'offerings'])->name('admin.offerings');
// Route::get('/adminservices', function () {
//     return view('admin.services');
// });

Route::get('/adminservicespage', [AdminController::class, 'servicesPage'])->name('admin.services-page');

// Route::get('/adminservices-page', function () {
//         return view('admin.services-page'); 
//  });

// Route::get('/admintestimonials', function () {
//     return view('admin.testimonials'); // Admin Testimonials page route
// });


Route::post('/submit-contact', [BaseController::class, 'storeContact']); // Handle contact form submission

// Admin Routes (AdminController)
Route::get('/admincontact', [AdminController::class, 'showContacts'])->name('admin.contact.index'); // Admin contact page route
Route::delete('/admincontact/{id}', [AdminController::class, 'destroy'])->name('admin.contact.delete');
// Route::get('/admincontact', [AdminController::class, 'index'])->name('admin.contact');

// Route::get('/admintestimonials', [AdminController::class, 'testimonials'])->name('admin.testimonials');
Route::get('/admintestimonials', [AdminController::class, 'Testimonials'])->name('admin.testimonials');

Route::post('/admintestimonials', [AdminController::class, 'testimonialsStore'])->name('admin.testimonials.store');
Route::put('/admintestimonials/{id}', [AdminController::class, 'testimonialsUpdate'])->name('admin.testimonials.update');
Route::delete('/admintestimonials/{id}', [AdminController::class, 'testimonialsDestroy'])->name('admin.testimonials.destroy');

Route::post('/admin/clients/store', [AdminController::class, 'storeClient'])->name('admin.clients.store');
Route::put('/admin/clients/{client}/update', [AdminController::class, 'updateClient'])->name('admin.clients.update');
Route::delete('/admin/clients/{client}/destroy', [AdminController::class, 'destroyClient'])->name('admin.clients.destroy');

Route::post('/admin/services/store', [AdminController::class, 'storeServices'])->name('admin.services.store');
Route::get('/adminservices-page', [AdminController::class, 'servicesPage'])->name('admin.services.page');
Route::put('/admin/services/update/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
Route::delete('/admin/services/destroy/{id}', [AdminController::class, 'destroyService'])->name('admin.services.destroy');

Route::post('admin/expertise/store', [AdminController::class, 'storeExpertise'])->name('admin.expertise.store');
Route::put('admin/expertise/update/{id}', [AdminController::class, 'updateExpertise'])->name('admin.expertise.update');
Route::delete('admin/expertise/destroy/{id}', [AdminController::class, 'destroyExpertise'])->name('admin.expertise.destroy');

// Route to show the About page
Route::get('/admin-about', [AdminController::class, 'showAbout'])->name('admin-about.show');

// Route to update the heading
Route::post('/admin-about/update-heading', [AdminController::class, 'updateHeading'])->name('admin-about.updateHeading');

// Route to update the description
Route::post('/admin-about/update-description', [AdminController::class, 'updateDescription'])->name('admin-about.updateDescription');

// Route to update the image
Route::post('/admin-about/update-image', [AdminController::class, 'updateImage'])->name('admin-about.updateImage');

// Route to update feature 1
Route::post('/admin-about/update-feature1', [AdminController::class, 'updateFeature1'])->name('admin-about.updateFeature1');

// Route to update feature 2
Route::post('/admin-about/update-feature2', [AdminController::class, 'updateFeature2'])->name('admin-about.updateFeature2');

// Route to update feature 3
Route::post('/admin-about/update-feature3', [AdminController::class, 'updateFeature3'])->name('admin-about.updateFeature3');

// Route to update feature 4
Route::post('/admin-about/update-feature4', [AdminController::class, 'updateFeature4'])->name('admin-about.updateFeature4');


// Route::get('/admin/offerings', [AdminController::class, 'indexOfferings'])->name('admin.offerings.index');
Route::post('/admin/offerings/store', [AdminController::class, 'storeOffering'])->name('admin.offerings.store');

Route::put('/admin/offerings/{id}/update', [AdminController::class, 'updateOffering'])->name('admin.offerings.update');  // Update offering
Route::delete('/admin/offerings/{id}/destroy', [AdminController::class, 'destroyOffering'])->name('admin.offerings.destroy');  // Destroy offering

Route::get('/admingallery', [AdminController::class, 'gallery'])->name('admin.gallery');
Route::post('/store-gallery', [AdminController::class, 'storeGallery'])->name('admin.storeGallery');

Route::get('/admincategory', [AdminController::class, 'category'])->name('admin.category');
Route::post('/admin/categories/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
Route::delete('/admin/categories/{id}', [AdminController::class, 'destroyCategory'])->name('admin.deleteCategory');
Route::put('/admin/galleries/{id}', [AdminController::class, 'updateGallery'])->name('admin.updateGallery');
Route::delete('/admin/galleries/{id}', [AdminController::class, 'destroyGallery'])->name('admin.deleteGallery');
Route::get('/gallery/category/{category}', [BaseController::class, 'galleryByCategory'])->name('gallery.category');

// Route to show all categories (list categories for filtering projects)
Route::get('/adminprojects', [AdminController::class, 'projects'])->name('admin.projects');

// Route to show projects by category (filter by selected category)
Route::get('/admin/projects/category/{category}', [AdminController::class, 'showProjectsByCategory'])->name('admin.projects.category');

// Route to store a new project
Route::post('/projects/store', [AdminController::class, 'storeProject'])->name('admin.projects.store');
Route::put('/admin/projects/{id}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
Route::delete('/admin/projects/{id}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy');

Route::get('/projects/category/{category}', [BaseController::class, 'showProjectsByCategory'])->name('projects.category');
Route::get('/project/{id}', [BaseController::class, 'showProjectDetails'])->name('project.details');

