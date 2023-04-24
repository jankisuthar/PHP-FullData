


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
               <h3 class="w3l-sub">Signup</h3>
							</div>
            <div class="agileits-wthree-about-row row py-lg-5  no-gutters">
                
						
		<!-- login  -->
        <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
                       
	<form class="form_contant" action="" method="post" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
                    
					
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-dark">
					  <tr>
					  <td>
					  <input class="form-control" name="unm" placeholder="User Name" type="text" required />
					  </td>
					  </tr>	
					  
					  <tr>
						<td>
						<input class="form-control" name="pass" placeholder="User Password" type="password" required />
						</td>
					  </tr>
					  
					
					   <tr>
						<td>
						<input class="form-control" name="file1"  type="file" required />
						</td>
					  </tr>	
					
					  <tr>
						<td>
						 Male: <input name="gen"  type="radio" value="Male" />
					  Female: <input  name="gen"  type="radio" value="Female" />						</td>
					  </tr>
					  
					  <tr>
						<td>
						 Hindi <input name="lag[]"  type="checkbox" value="Hindi" />
					   Gujarati <input name="lag[]"  type="checkbox" value="Gujarati" />
					    English <input name="lag[]"  type="checkbox" value="English" />
	</td>
					  </tr>
					  
					  <tr>
						<td>
						<select name="cid" class="form-control">
							<option>-----Select Country-----</option>
							<?php
							foreach($country as $c)
							{
							?>
							<option value="<?php echo $c['cid'];?>">
										<?php echo $c['cnm'];?>
							</option>
							<?php
							}
							?>
						</select>						
						</td>
					  </tr>
					  <tr>
						<td> <div class="center"><input type="submit" name="signup" value="SUBMIT NOW" class="btn btn-primary"></div>
</td>					</tr>
					<tr>
						<td> <div class="center"><a href="login" class="btn main_bt">Login</a></div>
</td>
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