<?php
include('header.php');

?>

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <h4 class="tittle-w3-agileits mb-4">Reply Inquiry</h4>
                          
						  <form action="" method="post">
				
							<input type="text" placeholder="To : Email Id " name="toid" value="<?php echo $email;?>" readonly class="form-control"/>  
							<br>
							<input type="text" placeholder="Subject : " name="subject" class="form-control"/>
							<br>
							<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message" class="form-control"></textarea>
							<br>
							<input type="submit" value="Send" name="send" class="btn btn-primary"/>
							
						</form>    
						  
						  
						
                        </div>
                        <!--// Forms-1 -->
            </section>

            <!--// Forms content -->

            <?php
			include('footer.php');
			?>