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
		<script src="asset/js/html5shiv.min.js"></script>
		<script src="asset/js/respond.min.js"></script>
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
                                <li><a href="/adminexpertise">Expertise in Action</a></li>
                                <li><a href="/adminclients">Clients</a></li>
                                <li class="active"><a href="/adminabout">About</a></li>
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
        <section id="alt-services" class="alt-services">
            <div class="container">
                <div class="row justify-content-around gy-4">
                    <!-- Background Image Column -->
                    <div class="col-lg-6 img-bg" style="background-image: url('{{ asset('storage/' . $about->background_image) }}');">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#updateImageModal">Edit Image</button>
                    </div>

                    <!-- Content Column -->
                    <div class="col-lg-5">
                        <!-- Heading -->
                        <h3 style="font-style: italic;" id="legacy-heading">{{ $about->heading }}</h3>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editHeadingModal">Edit Heading</button>

                        <!-- Description -->
                        <p style="font-style: italic;" id="legacy-description">{{ $about->description }}</p>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editDescriptionModal">Edit Description</button>

                        <!-- Features -->
                        <h5>Why Choose Us?</h5>

                        <!-- Feature 1 -->
                        <div class="icon-box">
                            <h4>{{ $about->feature1_title }}</h4>
                            <p>{{ $about->feature1_description }}</p>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editFeature1Modal">Edit</button>
                        </div>

                        <!-- Feature 2 -->
                        <div class="icon-box">
                            <h4>{{ $about->feature2_title }}</h4>
                            <p>{{ $about->feature2_description }}</p>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editFeature2Modal">Edit</button>
                        </div>

                        <!-- Feature 3 -->
                        <div class="icon-box">
                            <h4>{{ $about->feature3_title }}</h4>
                            <p>{{ $about->feature3_description }}</p>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editFeature3Modal">Edit</button>
                        </div>

                        <!-- Feature 4 -->
                        <div class="icon-box">
                            <h4>{{ $about->feature4_title }}</h4>
                            <p>{{ $about->feature4_description }}</p>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editFeature4Modal">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modals for editing each section -->
        <!-- Edit Heading Modal -->
        <div class="modal fade" id="editHeadingModal" tabindex="-1" role="dialog" aria-labelledby="editHeadingModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin-about.updateHeading') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="editHeadingModalLabel">Edit Heading</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" name="heading" value="{{ $about->heading }}" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Description Modal -->
        <div class="modal fade" id="editDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="editDescriptionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin-about.updateDescription') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDescriptionModalLabel">Edit Description</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" name="description" rows="4" required>{{ $about->description }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Image Modal -->
        <div class="modal fade" id="updateImageModal" tabindex="-1" role="dialog" aria-labelledby="updateImageModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin-about.updateImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateImageModalLabel">Update Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="background_image" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modals for editing features -->
        @foreach (range(1, 4) as $i)
            <div class="modal fade" id="editFeature{{ $i }}Modal" tabindex="-1" role="dialog" aria-labelledby="editFeature{{ $i }}ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route("admin-about.updateFeature$i") }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="editFeature{{ $i }}ModalLabel">Edit Feature {{ $i }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" name="title" value="{{ $about["feature{$i}_title"] }}" required>
                                <textarea class="form-control" name="description" rows="4" required>{{ $about["feature{$i}_description"] }}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
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

</body>



</html>