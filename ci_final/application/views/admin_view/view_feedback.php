<?php
include('header.php');
?>

            

            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="work-progres">
                            <h4 class="tittle-w3-agileits mb-4">Manage feedback</h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Feed Id</th>
                                            <th>Email</th>
                                            <th>Comment</th>

                                            <th>Status</th>
                                            <th colspan="3" align="center">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
									foreach($feedback as $feed)
									{
									?>
									
                                        <tr>
                                           
										   <td><?php echo $feed['feed_id'];?></td>
											<td><?php echo $feed['email'];?></td>
											<td><?php echo $feed['comment'];?></td>
                                            <td>
                                                <span class="badge badge-danger">in progress</span>
                                            </td>
                                            <td>
                                                <a href="delete_feed_id/<?php echo $feed['feed_id'];?>"><img src="<?php echo base_url()?>admin_public/images/delete.png" height="30px" width="30px"></a>

                                            </td>
                                            <td>
                                                <img src="<?php echo base_url()?>admin_public/images/edit.png" height="30px" width="30px">
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url()?>admin_public/images/block.png" height="30px" width="30px">
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