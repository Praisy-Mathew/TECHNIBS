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
                                <li class="active"><a href="/adminexpertise">Expertise in Action</a></li>
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
          
        <div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Expertise in Action</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <button class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#expertiseModal">
                    <i class="fa fa-plus"></i> Add Expertise
                </button>
            </div>
        </div>

        <div class="row mt-3">
        @foreach ($expertises as $expertise)
    <div class="card">
        <div class="card-body">
            <h4 class="expertise-title text-ellipsis">{{ $expertise->title }}</h4>
            <p class="expertise-description">{{ $expertise->description }}</p>

            <div class="d-flex flex-wrap">
                @if($expertise->image1)
                    <img src="{{ asset($expertise->image1) }}" class="img-thumbnail me-2 mb-2" width="50" alt="Image 1">
                @endif
                @if($expertise->image2)
                    <img src="{{ asset($expertise->image2) }}" class="img-thumbnail me-2 mb-2" width="50" alt="Image 2">
                @endif
                @if($expertise->image3)
                    <img src="{{ asset($expertise->image3) }}" class="img-thumbnail me-2 mb-2" width="50" alt="Image 3">
                @endif
                @if($expertise->image4)
                    <img src="{{ asset($expertise->image4) }}" class="img-thumbnail me-2 mb-2" width="50" alt="Image 4">
                @endif
                @if($expertise->image5)
                    <img src="{{ asset($expertise->image5) }}" class="img-thumbnail me-2 mb-2" width="50" alt="Image 5">
                @endif
            </div>
            <div class="mt-3">
        <!-- Edit Button -->
        <button class="btn btn-warning" data-toggle="modal" data-target="#editExpertiseModal{{ $expertise->id }}">Edit</button>
        
        <!-- Delete Button -->
        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteExpertiseModal{{ $expertise->id }}">Delete</button>
    </div>
            
        </div>
    </div>
@endforeach
</div>
    </div>
</div>
        
          
          <!-- Modals for Add, Edit, and Delete (same as before) -->
<!-- Add Expertise Modal -->
<!-- Expertise Modal -->
<div class="modal fade" id="expertiseModal" tabindex="-1" role="dialog" aria-labelledby="expertiseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expertiseModalLabel">Add Expertise</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.expertise.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Title Input -->
                    <div class="form-group">
                        <label for="expertiseTitle">Title</label>
                        <input type="text" class="form-control" id="expertiseTitle" name="expertiseTitle" placeholder="Enter Title" required>
                    </div>
                    <!-- Description Textarea -->
                    <div class="form-group">
                        <label for="expertiseDescription">Description</label>
                        <textarea class="form-control" id="expertiseDescription" name="expertiseDescription" rows="3" placeholder="Enter Description" required></textarea>
                    </div>

                    <!-- Image Upload Sections -->
                    <div class="form-group">
                        <label for="expertiseImage1">Upload Image 1</label>
                        <input type="file" class="form-control" id="expertiseImage1" name="expertiseImage1" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="expertiseImage2">Upload Image 2</label>
                        <input type="file" class="form-control" id="expertiseImage2" name="expertiseImage2" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="expertiseImage3">Upload Image 3</label>
                        <input type="file" class="form-control" id="expertiseImage3" name="expertiseImage3" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="expertiseImage4">Upload Image 4</label>
                        <input type="file" class="form-control" id="expertiseImage4" name="expertiseImage4" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="expertiseImage5">Upload Image 5</label>
                        <input type="file" class="form-control" id="expertiseImage5" name="expertiseImage5" accept="image/*">
                    </div>

                    <!-- Save Button inside the form tag -->
                    <div class="modal-footer">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- Save Button -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($expertises as $expertise)
<div class="modal fade" id="editExpertiseModal{{ $expertise->id }}" tabindex="-1" role="dialog" aria-labelledby="editExpertiseModalLabel{{ $expertise->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExpertiseModalLabel{{ $expertise->id }}">Edit Expertise</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.expertise.update', $expertise->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title Input -->
                    <div class="form-group">
                        <label for="editExpertiseTitle{{ $expertise->id }}">Title</label>
                        <input type="text" class="form-control" id="editExpertiseTitle{{ $expertise->id }}" name="expertiseTitle" value="{{ $expertise->title }}" required>
                    </div>

                    <!-- Description Textarea -->
                    <div class="form-group">
                        <label for="editExpertiseDescription{{ $expertise->id }}">Description</label>
                        <textarea class="form-control" id="editExpertiseDescription{{ $expertise->id }}" name="expertiseDescription" rows="3" required>{{ $expertise->description }}</textarea>
                    </div>

                    <!-- Image Upload Sections -->
                    <div class="form-group">
                        <label for="editExpertiseImage1{{ $expertise->id }}">Upload Image 1</label>
                        <input type="file" class="form-control" id="editExpertiseImage1{{ $expertise->id }}" name="expertiseImage1" accept="image/*">
                        @if(isset($expertise->images[0]))
                            <small>Current Image: <a href="{{ asset($expertise->images[0]) }}" target="_blank">View Image</a></small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="editExpertiseImage2{{ $expertise->id }}">Upload Image 2</label>
                        <input type="file" class="form-control" id="editExpertiseImage2{{ $expertise->id }}" name="expertiseImage2" accept="image/*">
                        @if(isset($expertise->images[1]))
                            <small>Current Image: <a href="{{ asset($expertise->images[1]) }}" target="_blank">View Image</a></small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="editExpertiseImage3{{ $expertise->id }}">Upload Image 3</label>
                        <input type="file" class="form-control" id="editExpertiseImage3{{ $expertise->id }}" name="expertiseImage3" accept="image/*">
                        @if(isset($expertise->images[2]))
                            <small>Current Image: <a href="{{ asset($expertise->images[2]) }}" target="_blank">View Image</a></small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="editExpertiseImage4{{ $expertise->id }}">Upload Image 4</label>
                        <input type="file" class="form-control" id="editExpertiseImage4{{ $expertise->id }}" name="expertiseImage4" accept="image/*">
                        @if(isset($expertise->images[3]))
                            <small>Current Image: <a href="{{ asset($expertise->images[3]) }}" target="_blank">View Image</a></small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="editExpertiseImage5{{ $expertise->id }}">Upload Image 5</label>
                        <input type="file" class="form-control" id="editExpertiseImage5{{ $expertise->id }}" name="expertiseImage5" accept="image/*">
                        @if(isset($expertise->images[4]))
                            <small>Current Image: <a href="{{ asset($expertise->images[4]) }}" target="_blank">View Image</a></small>
                        @endif
                    </div>

                    <!-- Modal Footer (Save & Close Buttons) -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
   

    <!-- Delete Expertise Modal -->
    <div class="modal fade" id="deleteExpertiseModal{{ $expertise->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteExpertiseModalLabel{{ $expertise->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteExpertiseModalLabel{{ $expertise->id }}">Delete Expertise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Delete Confirmation Form -->
                    <form action="{{ route('admin.expertise.destroy', $expertise->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Are you sure you want to delete this expertise?</p>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach





                  
        
		<!-- <div id="delete_doctor" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Doctor?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div> -->
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