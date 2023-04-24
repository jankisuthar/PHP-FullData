


<?php
if(isset($_SESSION['uid']))
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
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="agileits-wthree-about py-lg-5">
			<div class="container py-4">
            <div class="text-center wthree-title pb-sm-5 pb-3">
               <h3 class="w3l-sub"></h3>
							</div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                
						
		<!-- login  -->
        <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">Inquiry NOW</h5>
                       
					    <form class="form_contant" action="" method="post" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
                    
					
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-dark">
					  <tr>
					  <td>
					  <input class="form-control" name="email" placeholder="User Email" type="text" required />
					  </td>
					  </tr>	
					  
					  <tr>
						<td>
						<textarea class="form-control" name="comment" /></textarea>
						</td>
					  </tr>
					  
					
					  
					  <tr>
						<td> <div class="center"><input type="submit" name="inquiry" value="Inquiry NOW" class="btn btn-primary"></div>
</td>					</tr>
					
					  </table>
                    </div>
					
					
					
					
                    
                  </div>
                  </fieldset>
                </form>
					   

                    </div>
                </div>
    <!-- //login -->
				
				
				
            </div>
        </div>
    </div>
    

<?php
	include_once('footer.php');
	?>