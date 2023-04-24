


<?php
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
            <li class="breadcrumb-item active" aria-current="page">Signup</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="agileits-wthree-about py-lg-5">
			<div class="container py-4">
            <div class="text-center wthree-title pb-sm-5 pb-3">
               <h3 class="w3l-sub">Edit Profile</h3>
							</div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                
						
		<!-- login  -->
        <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">Edit Profile</h5>
                       
	<form class="form_contant" action="" method="post" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
                    
					
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-dark">
					  <tr>
					  <td>
					  <input class="form-control" name="unm" placeholder="User Name" type="text" value="<?php echo $fetch->unm?>" required />
					  </td>
					  </tr>	
					  
					
					   <tr>
						<td>
						<input class="form-control" name="file1"  type="file" value="<?php echo $fetch->file1?>" />
						<img src="upload/<?php echo $fetch->file1;?>" style=" height:50px; width:50px; border-radius:50%;">
						</td>
					  </tr>	
					
					  <tr>
						<td>
					  <?php
					  $gen=$fetch->gen;
					  if($gen=="Male")
					  {
					  ?>
					  Male: <input name="gen"  type="radio" value="Male" checked />
					  Female: <input  name="gen"  type="radio" value="Female" />						
					  <?php
					  }
					  else
					  {
					  ?>
					    Male: <input name="gen"  type="radio" value="Male"  />
					  Female: <input  name="gen"  type="radio" value="Female" checked />
					  <?php
					  }
					  ?>
					  </td>
					  </tr>
					  
					  <tr>
						<td>
						
						
						
						 Hindi <input name="lag[]"  type="checkbox" value="Hindi" 
						 <?php
						$lag=$fetch->lag;
						$lag_arr=explode(",",$lag);
						if(in_array("Hindi",$lag_arr))
						{
							echo "checked";
						}
						?>/>
					   Gujarati <input name="lag[]"  type="checkbox" value="Gujarati" 
					   <?php
						$lag=$fetch->lag;
						$lag_arr=explode(",",$lag);
						if(in_array("Gujarati",$lag_arr))
						{
							echo "checked";
						}
						?>/>
					    English <input name="lag[]"  type="checkbox" value="English" 
						<?php
						$lag=$fetch->lag;
						$lag_arr=explode(",",$lag);
						if(in_array("English",$lag_arr))
						{
							echo "checked";
						}
						?>/>
	</td>
					  </tr>
					  
					  <tr>
						<td>
						<select name="cid" class="form-control">
							<option>-----Select Country-----</option>
							<?php
							foreach($country as $c)
							{
								if($c->cid==$fetch->cid)
								{
								?>
								<option value="<?php echo $c->cid;?>" selected>
											<?php echo $c->cnm;?>
								</option>
								<?php
								}
								else
								{
								?>
								<option value="<?php echo $c->cid;?>">
											<?php echo $c->cnm;?>
								</option>
								<?php	
								}
							}
								?>
						</select>						
						</td>
					  </tr>
					  <tr>
						<td> <div class="center"><input type="submit" name="update" value="Save" class="btn btn-primary"></div>
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