<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo technibis.png') }}">
<title>Technibs</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Bootstrap CSS -->


    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<style>
    .submenu {
    display: none;
    list-style: none;
    padding-left: 20px;
}

.has-submenu > a {
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu-arrow::before {
    content: "\f107"; /* Font Awesome down arrow */
    font-family: FontAwesome;
    font-size: 12px;
    margin-left: 5px;
}

.has-submenu.open > .submenu {
    display: block;
}

.has-submenu.open > a .menu-arrow::before {
    content: "\f106"; /* Font Awesome up arrow */
}

</style>
<style>
    .container {
        margin-top: 100px;
        margin-left: 250px;
    }
    .portfolio-description h2 {
        font-size: 2rem;
    }
    .portfolio-info h3 {
        margin-bottom: 1rem;
    }
    .btn-visit {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .btn-visit:hover {
        background-color: #0056b3;
    }
</style>
<style>
        /* Internal CSS for border-box-container */
        .border-box-container {
            border: 2px solid #ddd; /* Light gray border */
            padding: 20px; /* Space inside the box */
            background-color: #f9f9f9; /* Light background color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            border-radius: 10px; /* Rounded corners */
        }

        .border-box-container .portfolio-description h2 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .border-box-container .portfolio-description p {
            font-size: 1rem;
            line-height: 1.5;
            color: #555;
        }

        .border-box-container .portfolio-info ul {
            list-style-type: none;
            padding: 0;
        }

        .border-box-container .portfolio-info ul li {
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .border-box-container .portfolio-info ul li strong {
            color: #333;
        }
    </style>
</head>

<body>
<!-- Add New Project Modal -->
<div class="modal fade" id="addPumpProjectModal" tabindex="-1" aria-labelledby="addPumpProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addPumpProjectModalLabel">Add New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Project Title -->
                    <div class="form-group">
                        <label for="projectTitle">Project Title</label>
                        <input type="text" class="form-control" id="projectTitle" name="project_title" placeholder="Enter project title" required>
                    </div>

                    <!-- Project Descriptions -->
                    <div class="form-group">
                        <label for="description1">Description 1</label>
                        <textarea class="form-control" id="description1" name="description1" rows="3" placeholder="Enter description 1" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description2">Description 2</label>
                        <textarea class="form-control" id="description2" name="description2" rows="3" placeholder="Enter description 2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description3">Description 3</label>
                        <textarea class="form-control" id="description3" name="description3" rows="3" placeholder="Enter description 3" required></textarea>
                    </div>

                    <!-- Testimonial Details -->
                    <div class="form-group">
                        <label for="testimonialAuthor">Testimonial Author</label>
                        <input type="text" class="form-control" id="testimonialAuthor" name="testimonial_author" placeholder="Enter testimonial author name" required>
                    </div>
                    <div class="form-group">
                        <label for="testimonialText">Testimonial</label>
                        <textarea class="form-control" id="testimonialText" name="testimonial" rows="3" placeholder="Enter testimonial text" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="testimonialImage">Testimonial Author Image</label>
                        <input type="file" class="form-control-file" id="testimonialImage" name="testimonial_image" required>
                    </div>
                    <div class="form-group">
                        <label for="authorProfession">Author Profession</label>
                        <input type="text" class="form-control" id="authorProfession" name="author_profession" placeholder="Enter author profession" required>
                    </div>

                    <!-- Project Images (Each Image Separately) -->
                    <div class="form-group">
                        <label for="projectImage1">Project Image 1</label>
                        <input type="file" class="form-control-file" id="projectImage1" name="project_image1" required>
                    </div>
                    <div class="form-group">
                        <label for="projectImage2">Project Image 2</label>
                        <input type="file" class="form-control-file" id="projectImage2" name="project_image2">
                    </div>
                    <div class="form-group">
                        <label for="projectImage3">Project Image 3</label>
                        <input type="file" class="form-control-file" id="projectImage3" name="project_image3">
                    </div>
                    <div class="form-group">
                        <label for="projectImage4">Project Image 4</label>
                        <input type="file" class="form-control-file" id="projectImage4" name="project_image4">
                    </div>
                    <div class="form-group">
                        <label for="projectImage5">Project Image 5</label>
                        <input type="file" class="form-control-file" id="projectImage5" name="project_image5">
                    </div>

                    <!-- Project Category -->
                    <select class="form-control" id="projectCategory" name="project_category" required>
    <option> Select Category</option>
    @foreach($categories as $category) <!-- Assuming $categories is passed to the view -->
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>



                    <!-- Client, Date, and URL -->
                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" class="form-control" id="client" name="client" placeholder="Enter client name" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDate">Project Date</label>
                        <input type="date" class="form-control" id="projectDate" name="project_date" required>
                    </div>
                    <div class="form-group">
                        <label for="projectURL">Project URL</label>
                        <input type="url" class="form-control" id="projectURL" name="project_url" placeholder="Enter project URL">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Project</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add Category Modal -->
 <!-- <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.storeCategory') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>  -->

    
    <!-- Edit Project Modal -->
@foreach($projects as $project) 
<div class="modal fade" id="editPumpProjectModal{{ $project->id }}" tabindex="-1" aria-labelledby="editPumpProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPumpProjectModalLabel">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') 
                <div class="form-group">
                    <label for="editProjectTitle{{ $project->id }}">Project Title</label>
                    <input type="text" class="form-control" id="ProjectTitle{{ $project->id }}" name="project_title" value="{{ $project->project_title }}">
                </div>

                <!-- Project Descriptions -->
                <div class="form-group">
                    <label for="editDescription1{{ $project->id }}">Description 1</label>
                    <textarea class="form-control" id="description1{{ $project->id }}" rows="3" name="description1">{{ $project->description1 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="editDescription2{{ $project->id }}">Description 2</label>
                    <textarea class="form-control" id="description2{{ $project->id }}" rows="3" name="description2">{{ $project->description2 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="editDescription3{{ $project->id }}">Description 3</label>
                    <textarea class="form-control" id="description3{{ $project->id }}" rows="3" name="description3">{{ $project->description3 }}</textarea>
                </div>

                <!-- Testimonial Details -->
                <div class="form-group">
                    <label for="editTestimonialAuthor{{ $project->id }}">Testimonial Author</label>
                    <input type="text" class="form-control" id="TestimonialAuthor{{ $project->id }}" name="testimonial_author" value="{{ $project->testimonial_author }}">
                </div>
                <div class="form-group">
                    <label for="editTestimonialText{{ $project->id }}">Testimonial</label>
                    <textarea class="form-control" id="Testimonial{{ $project->id }}" rows="3" name="testimonial">{{ $project->testimonial }}</textarea>
                </div>
                <div class="form-group">
                    <label for="editTestimonialImage{{ $project->id }}">Testimonial Author Image</label>
                    <input type="file" class="form-control-file" id="TestimonialImage{{ $project->id }}" name="testimonial_author">
                </div>
                <div class="form-group">
                    <label for="editAuthorProfession{{ $project->id }}">Author Profession</label>
                    <input type="text" class="form-control" id="AuthorProfession{{ $project->id }}" value="{{ $project->author_profession }}" name="author_profession">
                </div>

                <!-- Project Images -->
                <div class="form-group">
                    <label for="editProjectImage1{{ $project->id }}">Project Image 1</label>
                    <input type="file" class="form-control-file" id="ProjectImage1{{ $project->id }}" name="project_image1">
                </div>
                <div class="form-group">
                    <label for="editProjectImage2{{ $project->id }}">Project Image 2</label>
                    <input type="file" class="form-control-file" id="ProjectImage2{{ $project->id }}" name="project_image2">
                </div>
                <div class="form-group">
                    <label for="editProjectImage3{{ $project->id }}">Project Image 3</label>
                    <input type="file" class="form-control-file" id="ProjectImage3{{ $project->id }}" name="project_image3">
                </div>
                <div class="form-group">
                    <label for="editProjectImage4{{ $project->id }}">Project Image 4</label>
                    <input type="file" class="form-control-file" id="ProjectImage4{{ $project->id }}" name="project_image4">
                </div>
                <div class="form-group">
                    <label for="editProjectImage5{{ $project->id }}">Project Image 5</label>
                    <input type="file" class="form-control-file" id="ProjectImage5{{ $project->id }}" name="project_image5">
                </div>
                <select class="form-control" id="projectCategory" name="project_category" required title="Please select a category">
    <option value="disabled selected"> Select Category</option>
    @foreach($categories as $category) 
    <option value="{{ $category->id }}" 
                @if(old('project_category', $project->project_category) == $category->id) selected @endif>
                {{ $category->name }}
            </option>
    @endforeach
</select>
                
<div class="form-group">
                    <label for="editClient{{ $project->id }}">Client</label>
                    <input type="text" class="form-control" id="Client{{ $project->id }}" value="{{ $project->client }}" name="client">
                </div>
                <div class="form-group">
                    <label for="editProjectDate{{ $project->id }}">Project Date</label>
                    <input type="date" class="form-control" id="ProjectDate{{ $project->id }}" value="{{ $project->project_date }}" name="project_date">
                </div>
                <div class="form-group">
                    <label for="editProjectURL{{ $project->id }}">Project URL</label>
                    <input type="url" class="form-control" id="ProjectURL{{ $project->id }}" value="{{ $project->project_url }}" name="project_url">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save Changes</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Delete Project Modal -->
@foreach($projects as $project) 
<div class="modal fade" id="deletePumpProjectModal{{ $project->id }}" tabindex="-1" aria-labelledby="deletePumpProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePumpProjectModalLabel">Delete Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this project?</p>
            </div>
            <div class="modal-footer">
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
    </form>
            </div>
        </div>
    </div>
</div>

@endforeach

    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="/admin" class="logo">
					<img src="{{ asset('asset/img/logo name.png') }}" width="35" height="35" alt=""> <span>Technibs</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-home"></i> <span>Home Page</span> <span class="menu-arrow"></span></a>
                            <ul class="submenu">
                                <li><a href="/adminexpertise">Expertise in Action</a></li>
                                <li><a href="/adminclients">Clients</a></li>
                                <li><a href="/adminabout">About</a></li>
                                <li><a href="/adminofferings">Services</a></li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="/adminservices-page"><i class="fa fa-money"></i> <span>Service Page</span></a>
                        </li>
                        <li class="has-submenu">
    <a href="#"><i class="fa fa-briefcase"></i> <span>Projects</span> <span class="menu-arrow"></span></a>
    <ul class="submenu">
        @foreach($categories as $category)
            <li><a href="{{ route('admin.projects.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
        @endforeach
        
    </ul>
</li>
                
                        
                      <li>
                            <a href="/admingallery"><i class="fa fa-image"></i> <span>Gallery</span></a>
                        </li>
                        <li>
                            <a href="/admintestimonials"><i class="fa fa-commenting-o"></i> <span>Testimonials</span></a>
                        </li>
                      
                        <li>
                            <a href="/admincontact"><i class="fa fa-book"></i> <span>Contact Messages</span></a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
        
<!-- Laravel Blade example -->
<div class="page-wrapper">
    <div class="mt-4">
        <!-- Add New Project Button -->
        <button class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addPumpProjectModal">
            <i class="fa fa-plus"></i> Add New Project
        </button>
    </div>

    <div class="content">
        @foreach($projects as $project)   
            <!-- Container with Border Box -->
            <div class="border-box-container mb-4">
                <div class="row">
                
                    <!-- Project Image Section -->
                    <div class="col-lg-12">
                        <div class="image-gallery">
                            <div class="row">
                            <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <!-- Edit Action with Dynamic Modal ID -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editPumpProjectModal{{ $project->id }}">
            <i class="fa fa-pencil m-r-5"></i> Edit
        </a>
        <!-- Delete Action with Dynamic Modal ID -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deletePumpProjectModal{{ $project->id }}" >
            <i class="fa fa-trash-o m-r-5"></i> Delete
        </a>
    </div>
</div>

                                <!-- Display project images if they exist -->
                                @if($project->project_image1)
                                    <div class="col-md-2">
                                        <img src="{{ asset('storage/' . $project->project_image1) }}" alt="Project Image 1" class="img-fluid">
                                    </div>
                                @endif
                                @if($project->project_image2)
                                    <div class="col-md-2">
                                        <img src="{{ asset('storage/' . $project->project_image2) }}" alt="Project Image 2" class="img-fluid">
                                    </div>
                                @endif
                                @if($project->project_image3)
                                    <div class="col-md-2">
                                        <img src="{{ asset('storage/' . $project->project_image3) }}" alt="Project Image 3" class="img-fluid">
                                    </div>
                                @endif
                                @if($project->project_image4)
                                    <div class="col-md-2">
                                        <img src="{{ asset('storage/' . $project->project_image4) }}" alt="Project Image 4" class="img-fluid">
                                    </div>
                                @endif
                                @if($project->project_image5)
                                    <div class="col-md-2">
                                        <img src="{{ asset('storage/' . $project->project_image5) }}" alt="Project Image 5" class="img-fluid">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>  
                    
                    <!-- Project Description and Info -->
                    <div class="col-lg-8">
                       
                        <div class="portfolio-description">
                            <h2>{{ $project->project_title }}</h2>
                            <p>{{ $project->description1 }}</p>
                            <p>{{ $project->description2 }}</p>
                            <p>{{ $project->description3 }}</p>
                            
                            <!-- Testimonial Section -->
                            <div class="testimonial-item mt-4">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    {{ $project->testimonial }}
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $project->testimonial_image) }}" class="avatar mr-3" alt="{{ $project->testimonial_author }}">
                                    <div>
                                        <h3>{{ $project->testimonial_author }}</h3>
                                        <h4>{{ $project->author_profession }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Information -->
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project Information</h3>
                            <ul class="list-unstyled">
                                <li><strong>Category:</strong> <span>{{ $project->category->name}}</span></li> <!-- Assuming relationship is defined -->
                                <li><strong>Client:</strong> <span>{{ $project->client }}</span></li>
                                <li><strong>Project Date:</strong> <span>{{ \Carbon\Carbon::parse($project->project_date)->format('d-m-Y') }}</span></li> <!-- Carbon for date formatting -->
                                <li><strong>Project URL:</strong> <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<div class="sidebar-overlay" data-reff=""></div>
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/js/chart.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
       
                
    


</body>



</html>