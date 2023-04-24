<?php
include_once('model.php');  // add model class 

class control extends model  // for use model function extends model class
{
	
		function __construct()
		{
			session_start();
			model::__construct(); // also use model __construct for $conn 
			$url=$_SERVER['PATH_INFO'];
			switch($url)
			{
				case '/index':
				if(isset($_REQUEST['login']))
				{
					$anm=$_REQUEST['anm'];
					$pass=$_REQUEST['pass'];
					
					$where=array("anm"=>$anm,"pass"=>$pass);
					$res=$this->select_where('admin',$where);
					$ans=$res->num_rows; // check answer by rows  ans true 1 // false 0
					if($ans==1)
					{
						
						$_SESSION['admin']=$anm;
						?>
						<script>	
							alert("Login Success");
							window.location='dashboard';
						</script>
						<?php
					}
					else
					{
						?>
						<script>	
							alert("Login Failed");
							window.location='index';
						</script>
						<?php
					}
				}

				include('index.php');
				break;
				
				case '/logout':
				unset($_SESSION['admin']); 
				?>
						<script>	
							alert("Logout Success");
							window.location='index';
						</script>
						<?php
				break;
				
				
				case '/delete':
				
				if(isset($_REQUEST['duid']))
				{
					?>
					<script>
					
					var ans=confirm("Are you sure want to delete");
					if(ans=="true")
					{
					</script>
						<?php
						
						$uid=$_REQUEST['duid'];
						$where=array("uid"=>$uid);
						
						// delete img so get img name
						$exe=$this->select_where('reg',$where);
						$fetch=$exe->fetch_object();
						$img=$fetch->file1;
						
						$res=$this->delete('reg',$where);
						if($res)
						{
							
							unlink('../web/upload/'.$img);  // delete image from upload
							?>
							<script>	
								alert("Delete Success");
								window.location='user';
							</script>
							<?php
						}
					?>
					<script>					
					}
					else
					{
						window.location='user';
					}
					</script>
					<?php	
				}
				
				if(isset($_REQUEST['dfeed_id']))
				{
					$feed_id=$_REQUEST['dfeed_id'];
					$where=array("feed_id"=>$feed_id);
					$res=$this->delete('feedback',$where);
					if($res)
					{
						?>
						<script>	
							alert("Delete Success");
							window.location='feedback';
						</script>
						<?php
					}
				}
				
				if(isset($_REQUEST['dinq_id']))
				{
					$inq_id=$_REQUEST['dinq_id'];
					$where=array("inq_id"=>$inq_id);
					$res=$this->delete('inquiry',$where);
					if($res)
					{
						?>
						<script>	
							alert("Delete Success");
							window.location='inquiry';
						</script>
						<?php
					}
				}
				break;
				
				
				case '/status':
					if(isset($_REQUEST['suid']))
					{
						$uid=$_REQUEST['suid'];
						$where=array("uid"=>$uid);
						
						// fetch user status
						$exe=$this->select_where('reg',$where);
						$fetch=$exe->fetch_object();
						$status=$fetch->status;
						if($status=="Block")
						{
							$data=array("status"=>"Unblock");
							$res=$this->update('reg',$data,$where);
							if($res)
							{
								unset($_SESSION['block']);
								?>
								<script>	
									alert("Unblock Success");
									window.location='user';
								</script>
								<?php
							}
						}
						else
						{
							$data=array("status"=>"Block");
							$res=$this->update('reg',$data,$where);
							if($res)
							{
								$_SESSION['block']="Block";
								?>
								<script>	
									alert("Block Success");
									window.location='user';
								</script>
								<?php
							}
						}
					}
				break;
				
				
				
				case '/reply':
				
				if(isset($_REQUEST['rinq_id']))
				{
					$inq_id=$_REQUEST['rinq_id'];
					$where=array("inq_id"=>$inq_id);
					
					// delete img so get img name
					$exe=$this->select_where('inquiry',$where);
					$fetch=$exe->fetch_object();
					$email=$fetch->email;
					
					require 'phpmailer/PHPMailerAutoload.php';
					if(isset($_REQUEST['send']))
					{
						
						$toid=$_REQUEST['toid'];
						$subject=$_REQUEST['subject'];
						$message=$_REQUEST['message'];
						
						$mail = new PHPMailer;

						$mail->isSMTP();

						$mail->Host = 'smtp.gmail.com';

						$mail->Port = 587;

						$mail->SMTPSecure = 'tls';

						$mail->SMTPAuth = true;

						$mail->Username = 'manageuser199@gmail.com';  // enter your email

						$mail->Password = 'Akash@123';  // enter your email password

						$mail->setFrom('manageuser199@gmail.com', 'Akash');  // enter display email & name

						$mail->addReplyTo('manageuser199@gmail.com', 'Akash'); // enter your reply email & name

						$mail->addAddress($toid);

						$mail->Subject = $subject;

						$mail->msgHTML($message);

						if (!$mail->send()) {
						   $error = "Mailer Error: " . $mail->ErrorInfo;
							?><script>alert('<?php echo $error ?>');</script><?php
						} 
						else 
						{
						   $data=array("status"=>"Sent");
						   $this->update('inquiry',$data,$where);
						   echo '<script>
						   alert("Message sent!");
						   window.location="inquiry";
						   </script>';
						}
						
					}
					
				}
				
				include('reply.php');
				break;
				
				case '/dashboard':
				include('dashboard.php');
				break;
				
				case '/product':
				include('product.php');
				break;
				
				case '/addproduct':
				include('addproduct.php');
				break;
				
				case '/employee':
				include('employee.php');
				break;
				
				case '/addemployee':
				include('addemployee.php');
				break;
				
				case '/user':
				
			    if(isset($_REQUEST['search_btn']))	
				{
					$value=$_REQUEST['search'];
					$reg_arr1=$this->select_search('reg','country','reg.cid=country.cid','reg.unm',$value);
				}
				
				$reg_arr=$this->select_join('reg','country','reg.cid=country.cid');
				include('user.php');
				break;
				
				
				case '/ajax_user':
				
				$reg_arr=$this->select_join('reg','country','reg.cid=country.cid');
				include('ajax_user.php');
				break;
				
				
				
				case '/ajax_data':
				if(isset($_REQUEST['btn']))
				{
					$value=$_REQUEST['btn'];
					$reg_arr1=$this->select_search('reg','country','reg.cid=country.cid','reg.unm',$value);
				
				}
				?>
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
									foreach($reg_arr1 as $reg)
									{
									?>
                                        <tr>
                                           <td><img src="../web/upload/<?php echo $reg->file1;?>" style=" height:30px; width:30px;"></td>
										   <td><?php echo $reg->uid;?></td>
											<td><?php echo $reg->unm;?></td>
											<td><?php echo $reg->gen;?></td>
											<td><?php echo $reg->lag;?></td>
											<td><?php echo $reg->cnm;?></td>
                                            <td>
                                                <span class="badge badge-danger"><?php echo $reg->status;?></span>
                                            </td>
                                            <td>
                                                <a href="delete?duid=<?php echo $reg->uid;?>"><img src="images/delete.png" height="30px" width="30px"></a>
                                            </td>
                                            <td>
                                                <img src="images/edit.png" height="30px" width="30px">
                                            </td>
                                            <td>
                                                <?php
												$status=$reg->status;
												if($status=="Block")
												{
												?>
												 <a href="status?suid=<?php echo $reg->uid;?>"><img src="images/block.png" height="30px" width="30px"></a>
												<?php
												}
												else
												{
												?>
												 <a href="status?suid=<?php echo $reg->uid;?>"><img src="images/unblock.jpg" height="30px" width="30px"></a>
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
				<?php
				break;
				
				
				case '/inquiry':
				$inquiry=$this->select('inquiry');
				include('inquiry.php');
				break;
				
				case '/feedback':
				$feedback=$this->select('feedback');
				include('feedback.php');
				break;
			}	
		}
}
$obj=new control;



?>