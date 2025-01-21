<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo technibis.png">
    <title>Technibs</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
</head>

<body>
  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Add Testimonial Modal -->
    <div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTestimonialModalLabel">Add Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addTestimonialForm" method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="testimonialAuthor" class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="testimonialAuthor" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="testimonialContent" class="col-form-label">Testimonial:</label>
                        <textarea class="form-control" id="testimonialContent" name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="testimonialImage" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" id="testimonialImage" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($testimonials as $testimonial)
<div class="modal fade" id="editTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTestimonialModalLabel{{ $testimonial->id }}">Edit Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editTestimonialForm" method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="testimonialId" name="id" value="{{ $testimonial->id }}">
                    <div class="form-group">
                        <label for="editTestimonialAuthor{{ $testimonial->id }}"  class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="editTestimonialAuthor{{ $testimonial->id }}" name="author" value="{{ $testimonial->author }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editTestimonialContent{{ $testimonial->id }}" class="col-form-label">Testimonial:</label>
                        <textarea class="form-control" id="editTestimonialContent{{ $testimonial->id }}" name="content" required>{{ $testimonial->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="editTestimonialImage{{ $testimonial->id }}" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" id="editTestimonialImage{{ $testimonial->id }}" name="image" accept="image/*" value="{{ $testimonial->image }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTestimonialModalLabel{{ $testimonial->id }}">Delete Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this testimonial?</p>
                <form id="deleteTestimonialForm{{ $testimonial->id }}" method="POST" action="{{ route('admin.testimonials.destroy', $testimonial->id)  }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="deleteTestimonialId" name="id">
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
					<img src="assets/img/logo technibis.png" width="35" height="35" alt=""> <span>Technibs</span>
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
                        <li class="active">
                            <a href="/admintestimonials"><i class="fa fa-commenting-o"></i> <span>Testimonials</span></a>
                        </li>
                      
                        <li>
                            <a href="/admincontact"><i class="fa fa-book"></i> <span>Contact Messages</span></a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
          
						
        <div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Testimonials</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addTestimonialModal">
                    <i class="fa fa-plus"></i> Add Testimonial
                </a>
            </div>
        </div>
        <div class="row doctor-grid">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="profile-widget">
                        <div class="doctor-img">
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" class="avatar">
                            @else
                                <a class="avatar" href="#" style="background-color: skyblue;"><i class="fa fa-user"></i></a>
                            @endif
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTestimonialModal{{ $testimonial->id }}" data-id="{{ $testimonial->id }}" data-author="{{ $testimonial->author }}" data-content="{{ $testimonial->content }}" data-image="{{ asset('storage/' . $testimonial->image) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Edit
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTestimonialModal{{ $testimonial->id }}" data-id="{{ $testimonial->id }}">
                                    <i class="fa fa-trash-o m-r-5"></i> Delete
                                </a>
                            </div>
                        </div>
                        <h4 class="doctor-name text-ellipsis">
                            <a href="#">{{ $testimonial->author }}</a>
                        </h4>
                        <div class="doc-prof">
                            <h5><em>{{ $testimonial->content }}</em></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
        
            
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- doctors23:17-->
</html>