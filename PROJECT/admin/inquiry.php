<?php
include('header.php');
?>

            

            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="work-progres">
                            <h4 class="tittle-w3-agileits mb-4">Manage inquiry</h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>inq id</th>
                                            <th>Email</th>
                                            <th>Sub</th>
											<th>Comment</th>
											
                                            <th>Status</th>
                                            <th colspan="3" align="center">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
									foreach($inquiry as $inq)
									{
									?>
									
                                        <tr>
                                           
										   <td><?php echo $inq->inq_id;?></td>
											<td><?php echo $inq->email;?></td>
											<td><?php echo $inq->sub;?></td>
											<td><?php echo $inq->comment;?></td>
                                            <td>
                                                <span class="badge badge-danger"><?php echo $inq->status;?></span>
                                            </td>
                                            <td>
                                                <a href="delete?dinq_id=<?php echo $inq->inq_id;?>"><img src="images/delete.png" height="30px" width="30px"></a>

             
                                            </td>
                                            <?php 
											$status=$inq->status;
											if($status=="Pending")
											{
											?>
                                            <td>
											
                                                 <a href="reply?rinq_id=<?php echo $inq->inq_id;?>"><img src="images/reply.jpg" height="30px" width="30px"></a>
                                            </td>
											<?php
											}
											?>
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