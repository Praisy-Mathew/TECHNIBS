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
  <!-- Add Service Modal -->
  <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.offerings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control" id="serviceName" name="name" placeholder="Enter service name" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceSubtitle">Subtitle</label>
                        <input type="text" class="form-control" id="serviceSubtitle" name="subtitle" placeholder="Enter subtitle" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceDescription">Description</label>
                        <textarea class="form-control" id="serviceDescription" name="description" rows="3" placeholder="Enter service description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="serviceImage">Upload Image</label>
                        <input type="file" class="form-control" id="serviceImage" name="image" required>
                    </div>

                    <!-- Feature Inputs (4 fields) -->
                    <div class="form-group">
                        <label for="serviceFeature1">Feature 1</label>
                        <input type="text" class="form-control" id="serviceFeature1" name="feature1_title" placeholder="Enter feature 1" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceFeature2">Feature 2</label>
                        <input type="text" class="form-control" id="serviceFeature2" name="feature2_title" placeholder="Enter feature 2" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceFeature3">Feature 3</label>
                        <input type="text" class="form-control" id="serviceFeature3" name="feature3_title" placeholder="Enter feature 3" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceFeature4">Feature 4</label>
                        <input type="text" class="form-control" id="serviceFeature4" name="feature4_title" placeholder="Enter feature 4" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
            </div>
        </div>
</div>
</div>
  <!-- Edit Service Modal -->
  @foreach ($offerings as $offering)   
  <div class="modal fade" id="editServiceModal{{ $offering->id }}" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceModalLabel">Edit Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.offerings.update', $offering->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $offering->id }}">

                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $offering->name }}" placeholder="Enter service name">
                    </div>

                    <div class="form-group">
                        <label for="serviceSubtitle">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $offering->subtitle }}" placeholder="Enter subtitle">
                    </div>

                    <div class="form-group">
                        <label for="serviceDescription">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter service description">{{ $offering->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="serviceImage">Upload Image</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{ asset('storage/'.$offering->image) }}" alt="Current Image" class="img-fluid mt-2" width="100">
                    </div>

                    <!-- Feature Inputs (4 fields) -->
                    <div class="form-group">
                        <label for="serviceFeature1">Feature 1</label>
                        <input type="text" class="form-control" name="feature1_title" value="{{ $offering->feature1_title }}" placeholder="Enter feature 1">
                    </div>

                    <div class="form-group">
                        <label for="serviceFeature2">Feature 2</label>
                        <input type="text" class="form-control" name="feature2_title" value="{{ $offering->feature2_title }}" placeholder="Enter feature 2">
                    </div>

                    <div class="form-group">
                        <label for="serviceFeature3">Feature 3</label>
                        <input type="text" class="form-control" name="feature3_title" value="{{ $offering->feature3_title }}" placeholder="Enter feature 3">
                    </div>

                    <div class="form-group">
                        <label for="serviceFeature4">Feature 4</label>
                        <input type="text" class="form-control" name="feature4_title" value="{{ $offering->feature4_title }}" placeholder="Enter feature 4">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  
<!-- Delete Modal -->
<div class="modal fade" id="deleteServiceModal{{ $offering->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteServiceModalLabel{{ $offering->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.offerings.destroy', $offering->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteServiceModalLabel{{ $offering->id }}">Delete Offering</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Services</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
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
                                <li class="active"><a href="/adminofferings">Services</a></li>
                               
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
          
        <div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Services</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="javascript:void(0)" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addServiceModal">
                    <i class="fa fa-plus"></i> Add Service
                </a>
            </div>
        </div>

        <div class="row">
            @foreach ($offerings as $offering)  <!-- Loop through offerings -->
                <div class="col-lg-6">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <img src="{{ asset('storage/' . $offering->image) }}" alt="{{ $offering->name }}" class="img-fluid">
                        </div>
                        <div class="profile-details">
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
    <!-- Edit Action - Triggers Edit Modal -->
    <a class="dropdown-item" href="#editServiceModal{{ $offering->id }}" data-toggle="modal">
        <i class="fa fa-pencil m-r-5"></i> Edit
    </a>

    <!-- Delete Action - Triggers Delete Confirmation Modal -->
    <a class="dropdown-item" href="#deleteServiceModal{{ $offering->id }}" data-toggle="modal">
        <i class="fa fa-trash-o m-r-5"></i> Delete
    </a>
</div>

                            </div>

                            <h4 class="service-name text-ellipsis"><a href="#">{{ $offering->name }}</a></h4>
                            <h5 class="service-subtitle"><em>{{ $offering->subtitle }}</em></h5>
                            <div class="service-description">
                                <h5><em>{{ $offering->description }}</em></h5>
                            </div>
                            <div class="service-features">
        <ul>
            <li>{{ $offering->feature1_title}}</li>
            <li>{{ $offering->feature2_title}}</li>
            <li>{{ $offering->feature3_title }}</li>
            <li>{{ $offering->feature4_title}}</li>
        </ul>
    </div>                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
						
                            
        
            
    </div>
</div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <script src="assets/js/jquery-3.2.1.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>
            <script src="assets/js/Chart.bundle.js"></script>
            <script src="assets/js/chart.js"></script>
            <script src="assets/js/app.js"></script>
            <script>
                document.querySelectorAll('.edit-btn').forEach(button => {
                  button.addEventListener('click', function(event) {
                    // Button that triggered the modal
                    const button = event.currentTarget;
                    // Extract info from data-* attributes
                    const serviceId = button.getAttribute('data-id');
                    const serviceName = button.getAttribute('data-name');
                    const serviceDescription = button.getAttribute('data-description');
              
                    // Update the modal's content
                    const editModal = document.getElementById('editModal');
                    const modalTitle = editModal.querySelector('.modal-title');
                    const serviceNameInput = editModal.querySelector('#serviceName');
                    const serviceDescriptionInput = editModal.querySelector('#serviceDescription');
                    const serviceIdInput = editModal.querySelector('#serviceId');
              
                    modalTitle.textContent = `Edit Service: ${serviceName}`;
                    serviceNameInput.value = serviceName;
                    serviceDescriptionInput.value = serviceDescription;
                    serviceIdInput.value = serviceId;
                  });
                });
              </script>
              
        
        </body>
        
        
        
        </html>        
                    
            