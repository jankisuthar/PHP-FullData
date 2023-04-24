


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
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="agileits-wthree-about py-lg-5">
			<div class="container py-4">
            <div class="text-center wthree-title pb-sm-5 pb-3">
               <h3 class="w3l-sub">Manage Profile</h3>
							</div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                
						
		<!-- login  -->
        <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                       
					    <form class="form_contant" action="" method="post" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
                    
					
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-dark">
					  
					  <?php
						foreach($arr as $d)
						{
						?>
						<tr>
							<td align="center" colspan="6"><img src="upload/<?php echo $d->file1;?>" style=" height:100px; width:100px; border-radius:50%;"></td>
						</tr>
						<?php
						}
						?>
						<tr>
							<td>User Id</td>
							<td>User Name</td>
							<td>Gender</td>
							<td>Lag</td>
							<td>Country</td>
							<td>Pic</td>
						</tr>
						
						<?php
						foreach($arr as $d)
						{
						?>
						<tr>
							<td><?php echo $d->uid;?></td>
							<td><?php echo $d->unm;?></td>
							<td><?php echo $d->gen;?></td>
							<td><?php echo $d->lag;?></td>
							<td><?php echo $d->cnm;?></td>
							<td align="center"><img src="upload/<?php echo $d->file1;?>" style=" height:50px; width:50px; border-radius:50%;"></td>

						</tr>
						<?php
						}
						?>
						<tr>
							<td colspan="6" align="center"><a href="edit" class="btn btn-primary">Edit</a></td>
							
						</tr>
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