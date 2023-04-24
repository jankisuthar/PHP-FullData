<?php
if(isset($_SESSION['admin']))
{

}
else
{
	?>
	<script>
		window.location='index';
	</script>
	<?php
}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Sale & Rental</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.php">Geetanjali</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard">
                        <i class="fas fa-th-large"></i>
                        Admin Dashboard
                    </a>
                </li>
                
                
                
                
                
                
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-grid"></i>
                        Product
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="product">Manage Product</a>
                        </li>
                        
                        <li>
                            <a href="addproduct">Add Product</a>
                        </li>
                    
                    </ul>
                </li>
                
                  <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-grid"></i>
                        Employee
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="employee">Manage Employee</a>
                        </li>
                        
                        <li>
                            <a href="addemployee">Add Employee</a>
                        </li>
                    
                    </ul>
                </li>
                
                <li>
                    <a href="user">
                        <i class="far fa-user"></i>
                        User
                    </a>
                </li>
				
				<li>
                    <a href="ajax_user">
                        <i class="far fa-user"></i>
                       Ajax User
                    </a>
                </li>
				
				<li>
                    <a href="jquery_ajax_user">
                        <i class="far fa-user"></i>
                       jquery Ajax User
                    </a>
                </li>
				
				
				
				 <li>
                    <a href="inquiry">
                        <i class="far fa-user"></i>
                        Inquiry
                    </a>
                </li>
				
				<li>
                    <a href="feedback">
                        <i class="far fa-user"></i>
                        Feedback
                    </a>
                </li>
				
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                    <h3>Wellcome: <?php echo $_SESSION['admin']?></h3>
                        
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
