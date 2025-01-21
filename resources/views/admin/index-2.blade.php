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
					<img src="asset/img/logo technibis.png" width="35" height="35" alt=""> <span>Technibs</span>
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
                        <li class="active">
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
          
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminexpertise">
							<span class="dash-widget-bg1"><i class="fa fa-book" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                            <div>
</div>
								<span class="widget-title1">Expertise In Action<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminclients">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title2">Clients<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminabout">
                            <span class="dash-widget-bg3"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title3">About<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminofferings">
                            <span class="dash-widget-bg4"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">

                                <span class="widget-title4">Services<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminservices-page">
							<span class="dash-widget-bg1"><i class="fa fa-money" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<span class="widget-title1">Service Page<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/adminprojects">
                            <span class="dash-widget-bg2"><i class="fa fa-building"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title2">Project<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/admingallery">
                            <span class="dash-widget-bg4"><i class="fa fa-image" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title4">Gallery<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/admintestimonials">
                            <span class="dash-widget-bg4"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title4">Testimoinals<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <a href="/admincontact">
                            <span class="dash-widget-bg4"><i class="fa fa-book" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <span class="widget-title4">Contact<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="page-wrapper">
    <div class="content"> -->
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Category Management (Applicable for Project & Gallery)</h3>
            
        </div>

        <!-- Category Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <!-- Delete Button -->
                            <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('admin.storeCategory') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter new category" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
        <!-- Add Category Modal -->
        
								
			  
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