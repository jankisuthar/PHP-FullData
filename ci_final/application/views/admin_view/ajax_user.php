<?php
include('header.php');
?>

<script>
function getdata(str)
{
	// for morden browser request object
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();	
	}
	else
	{
		// for old browser request object
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");	
	}
	
	// function for ready to recieve response
	xmlhttp.onreadystatechange=function()
	{
		// response check request complated & ready response /  response status ok 
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			// print response at below id
			document.getElementById("sid").innerHTML=xmlhttp.responseText;	
		}
	}
xmlhttp.open("GET","<?php echo site_url()."/control/ajax_data/"?>"+str,true); // get data from this case 
xmlhttp.send();
	
}

</script>

            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="work-progres">
                            <h4 class="tittle-w3-agileits mb-4">Manage User</h4>
                            <hr>
                            
							<div class="table-responsive">
							<form action="" method="post">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
											<th><input type="text" name="search" placeholder="Enter Use Name" onkeyup="getdata(this.value)" class="form-control"></th>
											
                                        </tr>
                                    </thead>
                                    
                                </table>
							</form>
                            </div>
							
							<div class="table-responsive">
							<form action="" method="post">
                                <table class="table table-hover" id="sid">
                                    
                                </table>
							</form>
                            </div>
							
							
							
							
							
							
							
							<div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
											<th>Profile</th>
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th>Gen</th>
											<th>Lag</th>
											<th>country</th>
											
                                            <th>Status</th>
                                            <th colspan="3" align="center">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									foreach($register as $reg)
									{
									?>
                                        <tr>
                                           <td><img src="<?php echo base_url()?>user_public/upload/<?php echo $reg['file1'];?>" style=" height:30px; width:30px;"></td>
										   <td><?php echo $reg['uid'];?></td>
											<td><?php echo $reg['unm'];?></td>
											<td><?php echo $reg['gen'];?></td>
											<td><?php echo $reg['lag'];?></td>
											<td><?php echo $reg['cnm'];?></td>
                                            <td>
                                                <span class="badge badge-danger"><?php echo $reg['status'];?></span>
                                            </td>
                                            <td>
                                                <a href="delete_uid/<?php echo $reg['uid'];?>"><img src="<?php echo base_url()?>admin_public/images/delete.png" height="30px" width="30px"></a>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url()?>admin_public/images/edit.png" height="30px" width="30px">
                                            </td>
                                            <td>
                                                <?php
												$status=$reg['status'];
												if($status=="Block")
												{
												?>
												 <a href="status_uid/<?php echo $reg['uid'];?>"><img src="<?php echo base_url()?>admin_public/images/block.png" height="30px" width="30px"></a>
												<?php
												}
												else
												{
												?>
												 <a href="status_uid/<?php echo $reg['uid'];?>"><img src="<?php echo base_url()?>admin_public/images/unblock.jpg" height="30px" width="30px"></a>
												<?php
												}
												?>
                                            </td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                   
                </div>
            </div>
            

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                   
                </div>
            </div>
            <!--// Three-grids -->
            
<?php
include('footer.php');
?>