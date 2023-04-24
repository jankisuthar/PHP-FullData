<?php


// Run Project http://localhost/riya/ci_final/index.php/control_class_name/func_name_index

class control extends Ci_Controller  // pre defined class of Ci
{
	
		function index()
		{
			$this->load->view('user_view/index.php');  // include('myview.php')
		}		
		
		function about()
		{
			$this->load->view('user_view/about.php');  // include('myview.php')
		}	
		
		function services()
		{
			$this->load->view('user_view/services.php');  // include('myview.php')
		}	
		
		function typo()
		{
			$this->load->view('user_view/typo.php');  // include('myview.php')
		}	
		
		function contact()
		{
			$this->load->view('user_view/contact.php');  // include('myview.php')
		}	
		
		function feedback()
		{
			$this->load->view('user_view/feedback.php');  // include('myview.php')
		}	
		
		function signup()
		{
			$this->load->model('model');
			if($this->input->post('signup'))   //$_REQUEST['signup']
				{
					$unm=$this->input->post('unm');
					$pass=$this->input->post('pass');
					$md5=md5($pass);
					$gen=$this->input->post('gen');
					$lag_arr=$this->input->post('lag');
					$lag=implode(",",$lag_arr);
					$cid=$this->input->post('cid');
					
					$config['upload_path']          = './user_public/upload/';
					$config['allowed_types']        = 'gif|jpg|png';
					//$config['max_size']             = 100;
					//$config['max_width']            = 1024;
					//$config['max_height']           = 768;
					
					$this->load->library('upload', $config);
					$this->upload->do_upload('file1');  //$_FILES['file1']['name']
					$d=$this->upload->data(); // upload file in folder
					$file1=$d['file_name'];  // get file name
					
					
					$data=array("unm"=>$unm,"pass"=>$md5,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file1"=>$file1);
					
					$res=$this->model->insert('reg',$data);
					if($res)
					{
							$email=$unm;
							$subject="Wellcome Tops";
						    $coments="Register Successs your account is created ";
							
							$config['protocol']='smtp';
							$config['smtp_host']='ssl://smtp.googlemail.com';
							$config['smtp_port']='465';
							$config['smtp_timeout']='30';
							$config['smtp_user']='manageuser199@gmail.com'; // add email & pass
							$config['smtp_pass']='Akash@123';
							$config['charset']='utf-8';
							$config['newline']="\r\n";
							$config['wordwrap'] = TRUE;
							$config['mailtype'] = 'html';
							
							$this->email->initialize($config);
							  
							  $this->email->from('manageuser199@gmail.com', 'AkASH'); // add email & name
							  $this->email->to($email);
							  $this->email->subject($subject);
							  $this->email->message($coments);
							  
							 // $this->email->send();
							  //Send mail 
							if($this->email->send()) 
							 { 
							 
							 echo '<script>
						   alert("Register Success");
						   window.location="login";
						   </script>';
							 }
					}

				}
			
			
			
			$country_arr['country']=$this->model->select('country');
			$this->load->view('user_view/signup.php',$country_arr);  // include('myview.php')
		}	
		
		
		function profile()
		{
			$this->load->model('model');
			$uid=$this->session->userdata('uid');
			$where=array("uid"=>$uid);
			$fetch_arr['arr']=$this->model->select_join_where('reg','country','reg.cid=country.cid',$where);
			$this->load->view('user_view/profile.php',$fetch_arr);  // include('myview.php')
		}	
		
		function edit()
		{
			$this->load->model('model');
			$uid=$this->session->userdata('uid');
			$where=array("uid"=>$uid);
			$res=$this->model->select_where('reg',$where);
			$fetch_arr['fetch']=$res->result_array();
			$fetch_arr['country']=$this->model->select('country');
			$this->load->view('user_view/edit.php',$fetch_arr);  // include('myview.php')
	
			
			$fetch_arr1=$res->result_array();
			$img1=$fetch_arr1[0]['file1'];
			
			
			if($this->input->post('update'))   //$_REQUEST['signup']
				{
					$unm=$this->input->post('unm');
					$gen=$this->input->post('gen');
					$lag_arr=$this->input->post('lag');
					$lag=implode(",",$lag_arr);
					$cid=$this->input->post('cid');
					
					$config['upload_path']          = './user_public/upload/';
					$config['allowed_types']        = 'gif|jpg|png';
					//$config['max_size']             = 100;
					//$config['max_width']            = 1024;
					//$config['max_height']           = 768;
					
					$this->load->library('upload', $config);
					
					if($this->upload->do_upload('file1')>0)  //$_FILES['file1']['name']
					{
						$d=$this->upload->data(); // upload file in folder
						$file1=$d['file_name'];  // get file name
					
					
						$data=array("unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file1"=>$file1);
					
						$res=$this->model->update('reg',$data,$where);
						if($res)
						{
							  
							   unlink('./user_public/upload/'.$img1);
							   echo '<script>
							   alert("update Success");
							   </script>';
							   redirect('control/profile','refresh');
						}
					}
					else
					{
						$data=array("unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid);
					
						$res=$this->model->update('reg',$data,$where);
						if($res)
						{
							   echo '<script>
							   alert("update Success");
							   </script>';
							   redirect('control/profile','refresh');
						}
					}

				}
			
		}
		
		
		function login()
		{
			$this->load->model('model');
			
			
			$this->form_validation->set_rules('unm', 'User name', 'required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'required|min_length[3]|max_length[8]');
			
			
			
			if($this->form_validation->run() == FALSE)
				{
					$this->load->view('user_view/login.php');  // include('myview.php')
				}
				else
				{
					$unm=$this->input->post('unm');
					$pass=$this->input->post('pass');
					$md5=md5($pass);

					$where=array("unm"=>$unm,"pass"=>$md5);
					$res=$this->model->select_where('reg',$where);
					
					$chk=$res->num_rows();
					if($chk==1)
					{
						$fetch_arr=$res->result_array();
						$uid=$fetch_arr[0]['uid'];
						
						$this->session->set_userdata('user',$unm);
						$this->session->set_userdata('uid',$uid);
						//$this->session->userdata('uid')
						//$this->session->unset_userdata('uid')
						if($this->input->post('rm'))
						{
							$this->input->set_cookie('unm',$unm,15);
							$this->input->set_cookie('pass',$pass,15);
						}
						 echo '<script>
						   alert("Login Success");
						   window.location="index";
						   </script>';
					}
					else
					{
						echo '<script>
						   alert("Login Failed");
						   window.location="login";
						   </script>';
					}
				}
			
		}	
		function logout()
		{
			$this->session->unset_userdata('uid');
			unset($_SESSION['user']);
			echo '<script>
						   alert("Logout Success");
						   window.location="index";
						   </script>';
		}	
			
//==============================================================================================


		function admin()
		{
			$this->load->model('model');
			if($this->input->post('login'))
				{
					$anm=$this->input->post('anm');
					$pass=$this->input->post('pass');

					$where=array("anm"=>$anm,"pass"=>$pass);
					$res=$this->model->select_where('admin',$where);
					
					$chk=$res->num_rows();
					if($chk==1)
					{
						$fetch_arr=$res->result_array();
						$aid=$fetch_arr[0]['aid'];
						
						$this->session->set_userdata('admin',$anm);
						$this->session->set_userdata('aid',$aid);
						//$this->session->userdata('uid')
						//$this->session->unset_userdata('uid')
						if($this->input->post('rem'))
						{
							$this->input->set_cookie('anm',$anm,15);
							$this->input->set_cookie('apass',$pass,15);
						}
						 echo '<script>
						   alert("Login Success");
						   window.location="dashboard";
						   </script>';
					}
					else
					{
						echo '<script>
						   alert("Login Failed");
						   window.location="admin";
						   </script>';
					}
				}
			$this->load->view('admin_view/index.php');  // include('myview.php')
		}
		
	
		function admin_logout()
		{
			$this->session->unset_userdata('aid');
			unset($_SESSION['admin']);
			echo '<script>
						   alert("Logout Success");
						   window.location="admin";
						   </script>';
		}	
		
		
		function delete_uid()
		{
			$this->load->model('model');
			$uid=$this->uri->segment(3);
			$where=array("uid"=>$uid);
			
			$data=$this->model->select_where('reg',$where);
			$fetch=$data->result_array();
			$img1=$fetch[0]['file1'];
			
			$res=$this->model->delete('reg',$where);
			{
				unlink('./user_public/upload/'.$img1);
				echo '<script>
						   alert("Delete Success");
						   </script>';
						   redirect('control/user','refresh');
			}
		}
		function delete_feed_id()
		{
			$this->load->model('model');
			$feed_id=$this->uri->segment(3);
			$where=array("feed_id"=>$feed_id);
		
			$res=$this->model->delete('feedback',$where);
			{
				echo '<script>
						   alert("Delete Success");
						   </script>';
						   redirect('control/view_feedback','refresh');
			}
		}
		
		function delete_inq_id()
		{
			$this->load->model('model');
			$inq_id=$this->uri->segment(3);
			$where=array("inq_id"=>$inq_id);
		
			$res=$this->model->delete('inquiry',$where);
			{
				echo '<script>
						   alert("Delete Success");
						   </script>';
						   redirect('control/view_inquiry','refresh');
			}
		}
		
		function status_uid()
		{
			$this->load->model('model');
			$uid=$this->uri->segment(3);
			$where=array("uid"=>$uid);
			
			$data=$this->model->select_where('reg',$where);
			$fetch=$data->result_array();
			$status=$fetch[0]['status'];
			
			if($status=="Block")
			{
				$data=array("status"=>"Unblock");
				$res=$this->model->update('reg',$data,$where);
				if($res)
				{
					echo '<script>
						   alert("Status Unblock Success");
						   </script>';
						   redirect('control/user','refresh');
				}
			}
			else
			{
				$data=array("status"=>"Block");
				$res=$this->model->update('reg',$data,$where);
				if($res)
				{
					echo '<script>
						   alert("Status Block Success");
						   </script>';
						   redirect('control/user','refresh');
				}
			}
			
		}
		
		
		
		
		function dashboard()
		{
			$this->load->view('admin_view/dashboard.php');  // include('myview.php')
		}

		function product()
		{
			$this->load->view('admin_view/product.php');  // include('myview.php')
		}
		
		function addproduct()
		{
			$this->load->view('admin_view/addproduct.php');  // include('myview.php')
		}
		
		function employee()
		{
			$this->load->view('admin_view/employee.php');  // include('myview.php')
		}
		
		function addemployee()
		{
			$this->load->view('admin_view/addemployee.php');  // include('myview.php')
		}
		
		function user()
		{
			$this->load->model('model');
			if($this->input->post('search_btn'))
			{
				$value=$this->input->post('search');
				$reg_arr['search_data']=$this->model->select_join_like('reg','country','reg.cid=country.cid','unm',$value);
			}
			$reg_arr['register']=$this->model->select_join('reg','country','reg.cid=country.cid');
			$this->load->view('admin_view/user.php',$reg_arr);  // include('myview.php')
		}
		
		function ajax_user()
		{
			$this->load->model('model');
			$reg_arr['register']=$this->model->select_join('reg','country','reg.cid=country.cid');
			$this->load->view('admin_view/ajax_user.php',$reg_arr);  // include('myview.php')
		}
		
		
		function ajax_data()
		{
				$this->load->model('model');
				$value=$this->uri->segment(3);
				
				$reg_arr1=$this->model->select_join_like('reg','country','reg.cid=country.cid','unm',$value);
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
				
				<?php
		}
		
		
		function view_inquiry()
		{
			$this->load->model('model');
			$inquiry_arr['inquiry']=$this->model->select('inquiry');
			$this->load->view('admin_view/view_inquiry.php',$inquiry_arr);  // include('myview.php')
		}
		
		
		function reply_inq_id()
		{
			$this->load->model('model');
			$inq_id=$this->uri->segment(3);
			$where=array("inq_id"=>$inq_id);
			
			$data=$this->model->select_where('inquiry',$where);
			$fetch['email']=$data->result_array();
			
			if($this->input->post('send'))
			{
				$toid=($this->input->post('toid'));
				$subject=($this->input->post('subject'));
				$message=($this->input->post('message'));
							
							$config['protocol']='smtp';
							$config['smtp_host']='ssl://smtp.googlemail.com';
							$config['smtp_port']='465';
							$config['smtp_timeout']='30';
							$config['smtp_user']='manageuser199@gmail.com'; // add email & pass
							$config['smtp_pass']='Akash@123';
							$config['charset']='utf-8';
							$config['newline']="\r\n";
							$config['wordwrap'] = TRUE;
							$config['mailtype'] = 'html';
							
							$this->email->initialize($config);
							  
							  $this->email->from('manageuser199@gmail.com', 'AkASH'); // add email & name
							  $this->email->to($toid);
							  $this->email->subject($subject);
							  $this->email->message($message);
							  
							 // $this->email->send();
							  //Send mail 
							if($this->email->send()) 
							 { 
							 
							 $status_data=$data->result_array();
							 $status=$status_data[0]['status'];
								 if($status=="Pending")
								 {
									 $data=array("status"=>"Sent");
									 $sta_res=$this->model->update('inquiry',$data,$where);
									 if($sta_res)
									 {
										  echo '<script>
										   alert("Reply Success");
										   </script>';
										   echo redirect('control/view_inquiry','refresh');
									 }
								 }
								 else
								 {
									 $data=array("status"=>"Pending");
									 $sta_res=$this->model->update('inquiry',$data,$where);
									 if($sta_res)
									 {
										  echo '<script>
										   alert("Reply Success");
										   </script>';
										   echo redirect('control/view_inquiry','refresh');
									 } 
								 }
								 
							 
							
							 }	
				
			}
			
			$this->load->view('admin_view/reply.php',$fetch);  // include('myview.php')
			
		}
		
		function view_feedback()
		{
			$this->load->model('model');
			$feedback_arr['feedback']=$this->model->select('feedback');
			$this->load->view('admin_view/view_feedback.php',$feedback_arr);  // include('myview.php')
		}

		
}



?>