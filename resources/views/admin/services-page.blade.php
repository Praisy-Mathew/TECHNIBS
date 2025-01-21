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
 <!-- Add Services Modal -->
 <div class="modal fade" id="addServicesModal" tabindex="-1" role="dialog" aria-labelledby="addServicesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServicesModalLabel">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('admin.services.store') }}">
    @csrf <!-- CSRF token for security -->
    <div class="form-group">
        <label for="serviceName">Service Name</label>
        <input type="text" class="form-control" id="serviceName" name="name" placeholder="Enter service name">
    </div>
    <div class="form-group">
        <label for="serviceDescription">Service Description</label>
        <textarea class="form-control" id="serviceDescription" name="description" rows="3" placeholder="Enter service description"></textarea>
    </div>
    <div class="form-group">
        <label for="serviceIcon">Select Icon</label>
        <select class="form-control" id="serviceIcon" name="icon">
            <option value="fa-building">Building (fa-building)</option>
            <option value="fa-cogs">Construction Tools (fa-cogs)</option>
            
            <option value="fa-industry">Industry (fa-industry)</option>
                            <option value="fa-truck">Construction Truck (fa-truck)</option>
                            
                            <option value="fa-wrench">Wrench (fa-wrench)</option>
                            <option value="fa-paint-roller">Paint Roller (fa-paint-roller)</option>
                            <option value="fa-laptop">Laptop (fa-laptop)</option>
                            
                            <option value="fa-gavel">Gavel (fa-gavel)</option>
                            
                            <option value="fa-paint-brush">Paint Brush (fa-paint-brush)</option>
            <!-- Add other options here -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Service</button>
</form>

                <!--  -->
            </div>
        </div>
    </div>
</div>

<!-- Edit Service Modal -->
<!-- Edit Service Modal -->
@foreach ($services as $service)
    <div class="modal fade" id="editServicesModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editServicesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editServicesModalLabel">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="editServiceName{{ $service->id }}">Service Name</label>
                            <input type="text" class="form-control" id="editServiceName{{ $service->id }}" name="name" value="{{ $service->name }}">
                        </div>
                        <div class="form-group">
                            <label for="editServiceDescription{{ $service->id }}">Service Description</label>
                            <textarea class="form-control" id="editServiceDescription{{ $service->id }}" name="description" rows="3">{{ $service->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="editServiceIcon{{ $service->id }}">Select Icon</label>
                            <select class="form-control" id="editServiceIcon{{ $service->id }}" name="icon">
                                <option value="fa-building" {{ $service->icon == 'fa-building' ? 'selected' : '' }}>Building</option>
                                <option value="fa-cogs" {{ $service->icon == 'fa-cogs' ? 'selected' : '' }}>Construction Tools</option>
                               
    <option value="fa-industry" {{ $service->icon == 'fa-industry' ? 'selected' : '' }}>Industry (fa-industry)</option>
    <option value="fa-truck" {{ $service->icon == 'fa-truck' ? 'selected' : '' }}>Construction Truck (fa-truck)</option>
    
    
    <option value="fa-wrench" {{ $service->icon == 'fa-wrench' ? 'selected' : '' }}>Wrench (fa-wrench)</option>
    
    <option value="fa-laptop" {{ $service->icon == 'fa-laptop' ? 'selected' : '' }}>Laptop (fa-laptop)</option>
    
    <option value="fa-gavel" {{ $service->icon == 'fa-gavel' ? 'selected' : '' }}>Gavel (fa-gavel)</option>
    
    <option value="fa-paint-brush" {{ $service->icon == 'fa-paint-brush' ? 'selected' : '' }}>Paint Brush (fa-paint-brush)</option>
                                <!-- Add more options as required -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- Delete Service Modal -->
@foreach ($services as $service)
    <div class="modal fade" id="deleteServicesModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteServicesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteServicesModalLabel">Delete Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this service?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
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
                       
                        <li class="active">
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
        <!-- Page Header -->
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Services</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <!-- Add Services Button that triggers the Modal -->
                <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#addServicesModal">
                    <i class="fa fa-plus"></i> Add Services
                </a>
            </div>
        </div>

        <!-- Services List -->
        <div class="row doctor-grid">
            @foreach ($services as $service)
                <div class="col-lg-6">
                    <div class="profile-widget">
                        <!-- Service Icon -->
                        <div class="doctor-img">
                            <a class="avatar" href="#" style="background-color: skyblue;">
                                <i class="fa {{ $service->icon }}"></i> <!-- Dynamic icon -->
                            </a>
                        </div>

                        <!-- Action Dropdown for Edit and Delete -->
                        <div class="dropdown profile-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <!-- Edit Service Button (opens modal with pre-filled data) -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editServicesModal{{ $service->id }}"
           data-id="{{ $service->id }}"
           data-name="{{ $service->name }}"
           data-description="{{ $service->description }}">
            <i class="fa fa-pencil m-r-5"></i> Edit
        </a>
        <!-- Delete Service Button (opens modal with delete confirmation) -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteServicesModal{{ $service->id }}"
           data-id="{{ $service->id }}">
            <i class="fa fa-trash-o m-r-5"></i> Delete
        </a>
    </div>
</div>
                        



                        <!-- Service Name -->
                        <h4 class="doctor-name text-ellipsis">
                            <a href="#">{{ $service->name }}</a> <!-- Dynamic service name -->
                        </h4>

                        <!-- Service Description -->
                        <div class="doc-prof">
                            <h5><em>{{ $service->description }}</em></h5> <!-- Dynamic service description -->
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
                    
            