


<?php
if(isset($_SESSION['otp']))
{
	
}
else
{
	echo "<script> window.location='index';</script>";
}
include_once('header.php');

?>


        </header>
 <!-- main image slider container -->
        <div class="inner-banner">
         </div> 
    <!-- end of main image slider container -->
	<!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Enter OTP</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="agileits-wthree-about py-lg-5">
			<div class="container py-4">
            <div class="text-center wthree-title pb-sm-5 pb-3">
               <h3 class="w3l-sub">OTP Page</h3>
							</div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                
						
		<!-- login  -->
       <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Enter OTP</label>
                            <input type="text" class="form-control" placeholder="" name="otp" required="">
                        </div>
                       
                        <div class="right-w3l">
                            <input type="submit" name="submit_otp" class="btn btn-primary" value="Submit">
                        </div>
						
						
                       
    
                    </form>
                </div>
    <!-- //login -->
				
				
				
            </div>
        </div>
    </div>
    

<?php
	include_once('footer.php');
	?>