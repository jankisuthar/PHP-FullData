
<?php
if(isset($_SESSION['block']))
{
	unset($_SESSION['user']); 
	unset($_SESSION['uid']); 
}
?>



<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Book My Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index">
                       BookMyShow
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="services">services</a>
                        </li>
                        <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="about">About</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="typo">Services</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
						
						<?php
						if(isset($_SESSION['uid']))
						{
						?>
						<li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="feedback">Feedback</a>
                        </li>
						<li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="profile"><?php echo $_SESSION['user'] ?></a>
                        </li>
						<?php
						}
						?>
						
						
						<?php
						if(isset($_SESSION['uid']))
						{
						?>
						<li>
                            <a href="logout" type="button" class="btn  ml-lg-2 w3ls-btn"  aria-pressed="false" >
                            Logout
							</a>
                        </li>
						<?php
						}
						else
						{
						?>
                        <li>
                            <a href="login" type="button" class="btn  ml-lg-2 w3ls-btn"  aria-pressed="false" >
                            Login
							</a>
                        </li>
						<?php
						}
						?>
                    </ul>
                </div>
            </nav>
        </header>
		

	 
		